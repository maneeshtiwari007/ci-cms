<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BlogModel;
use App\Models\Category;

class BlogController extends BaseController
{
    protected $blogModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
        $this->categoryModel = new Category();
    }

    public function index()
    {
        $blogModel = new BlogModel();
        $data['blogs'] = $blogModel->select('blogs.*, categories.name as category_name')
            ->join('categories', 'categories.id = blogs.cat_id', 'left')
            ->orderBy('blogs.created_at', 'DESC')
            ->findAll();

        return view('admin/blogs/index', $data);
    }
    public function create()
    {
        helper(['form']);

        $data = [
            'pageTitle' => 'Add Blog',
            'categories' => $this->categoryModel->findAll(),
        ];

        return view('admin/blogs/create', $data);
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        $data = $this->request->getPost();

        $rules = [
            'title'            => 'required|min_length[3]',
            'cat_id'           => 'required|integer',
            'meta_title'       => 'required',
            'meta_description' => 'required',
            'meta_keywords'    => 'required',
            'tags'             => 'required',
            'blog_content'     => 'required',
            'image'            => 'uploaded[image]|is_image[image]|max_size[image,2048]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Handle Image Upload
        $image = $this->request->getFile('image');
        $imageName = null;

        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/blogs/', $imageName);
        }

        // Process Tags
        $tags = $this->request->getPost('tags');
        $tagsStr = is_array($tags) ? implode(',', array_map('trim', $tags)) : null;

        // Create slug if not provided
        $slug = $data['slug'] ?? url_title($data['title'], '-', true);

         $blogModel = new BlogModel();
        $baseSlug = url_title($data['title'], '-', true);
        $slug = $baseSlug;
        $i = 1;

        while ($blogModel->where('slug', $slug)->countAllResults() > 0) {
            $slug = $baseSlug . '-' . $i++;
        }

        // Insert Data
        $blogModel->insert([
            'title'            => $data['title'],
            'slug'             => $slug,
            'cat_id'           => $data['cat_id'],
            'meta_title'       => $data['meta_title'],
            'meta_description' => $data['meta_description'],
            'meta_keywords'    => $data['meta_keywords'],
            'tags'             => $tagsStr,
            'image'            => $imageName,
            'description'     => $data['blog_content'],
            'created_at'       => date('Y-m-d H:i:s')
        ]);

        return redirect()->to(base_url('admin/blogs'))->with('success', 'Blog created successfully.');
    }


    public function edit($id)
    {
        $blogModel = new BlogModel();
        $categoryModel = new Category();

        $blog = $blogModel->find($id);
        if (!$blog) {
            return redirect()->to('admin/blogs')->with('error', 'Blog not found.');
        }

        $categories = $categoryModel->findAll();

        return view('admin/blogs/edit', [
            'blog' => $blog,
            'categories' => $categories
        ]);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $data = $this->request->getPost();
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);

        if (!$blog) {
            return redirect()->to('admin/blogs')->with('error', 'Blog not found.');
        }

        $rules = [
            'title'            => 'required|min_length[3]',
            'cat_id'           => 'required|integer',
            'meta_title'       => 'required',
            'meta_description' => 'required',
            'meta_keywords'    => 'required',
            'tags'             => 'required',
            'blog_content'     => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Handle Image Upload
        $image = $this->request->getFile('image');
        $imageName = $blog['image'];

        if ($image && $image->isValid()) {
            // Delete old
            if ($imageName && file_exists('uploads/blogs/' . $imageName)) {
                unlink('uploads/blogs/' . $imageName);
            }

            $imageName = $image->getRandomName();
            $image->move('uploads/blogs/', $imageName);
        }

        // Process Tags
        $tags = $this->request->getPost('tags');
        $tagsStr = is_array($tags) ? implode(',', array_map('trim', $tags)) : null;

        // Update
        $slug = $data['slug'] ?? url_title($data['title'], '-', true);
        if ($slug != $blog['slug']) {
            if ($blogModel->where('slug', $slug)->where('id !=', $id)->countAllResults() > 0) {
                return redirect()->back()->withInput()->with('errors', ['slug' => 'Slug already exists.']);
            }
        }

        $blogModel->update($id, [
            'title'            => $data['title'],
            'slug'             => $slug,
            'cat_id'           => $data['cat_id'],
            'meta_title'       => $data['meta_title'],
            'meta_description' => $data['meta_description'],
            'meta_keywords'    => $data['meta_keywords'],
            'tags'             => $tagsStr,
            'description'      => $data['blog_content'],
            'image'            => $imageName,
            'updated_at'       => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/blogs')->with('success', 'Blog updated successfully.');
    }

    public function delete($id)
    {
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);

        if (!$blog) {
            return redirect()->to('admin/blogs')->with('error', 'Blog not found.');
        }

        // Delete image if it exists
        if (!empty($blog['image']) && file_exists('uploads/blogs/' . $blog['image'])) {
            unlink('uploads/blogs/' . $blog['image']);
        }

        $blogModel->delete($id);

        return redirect()->to('admin/blogs')->with('success', 'Blog deleted successfully.');
    }



}
