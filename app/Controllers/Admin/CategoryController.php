<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Category;
use CodeIgniter\HTTP\RedirectResponse;

class CategoryController extends BaseController
{
    protected $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new Category();
    }
    public function index()
    {
         if (!session()->get('admin_logged_in')) {
                return redirect()->to('/admin/login');
        }
        $categoryModel = new Category();

        $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();

        return view('admin/categories/index', $data);
    }

    public function create()
    {
        if (!session()->get('admin_logged_in')) {
                return redirect()->to('/admin/login');
        }
        return view('admin/categories/create');
    }

    public function store(): RedirectResponse
    {
        helper(['form']);

        $rules = [
            'name' => 'required|min_length[3]|max_length[255]',
            'description' => 'required|min_length[10]|max_length[1000]',
            'image' => 'uploaded[image]'
                    . '|is_image[image]'
                    . '|mime_in[image,image/jpg,image/jpeg,image/png,image/webp,image/gif]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $categoryModel = new Category();

        // Upload image
        $imageName = null;
        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/categories', $imageName);
        }

        // Slug generation + unique check
        $slug = url_title($this->request->getPost('name'), '-', true);
        $originalSlug = $slug;
        $i = 1;

        while ($categoryModel->where('slug', $slug)->countAllResults() > 0) {
            $slug = $originalSlug . '-' . $i++;
        }

        // Save to database
        $categoryModel->save([
            'name'        => $this->request->getPost('name'),
            'slug'        => $slug,
            'description' => $this->request->getPost('description'),
            'image'       => $imageName
        ]);

        return redirect()->to('/admin/categories')->with('success', 'Category added successfully!');
    }


    public function edit($id)
    {
        if (!session()->get('admin_logged_in')) {
                return redirect()->to('/admin/login');
        }
        $categoryModel = new Category();
        $category = $categoryModel->find($id);

        if (!$category) {
            return redirect()->to('/admin/categories')->with('error', 'Category not found.');
        }

        return view('admin/categories/edit', [
            'category' => $category
        ]);
    }

    public function update($id)
    {
        helper(['form']);

        $categoryModel = new Category();
        $existingCategory = $categoryModel->find($id);

        if (!$existingCategory) {
            return redirect()->to('/admin/categories')->with('error', 'Category not found.');
        }

        $rules = [
            'name'        => 'required|min_length[3]|max_length[255]',
            'description' => 'required|min_length[10]|max_length[1000]',
        ];

        // If image is uploaded, apply validation
        if ($this->request->getFile('image')->isValid()) {
            $rules['image'] = 'uploaded[image]'
                            . '|is_image[image]'
                            . '|mime_in[image,image/jpg,image/jpeg,image/png,image/webp,image/gif]';
        }

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Image upload
        $imageName = $existingCategory['image'];
        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/categories', $imageName);
        }

        // Slug generation + unique check (ignore current ID)
        $slug = url_title($this->request->getPost('name'), '-', true);
        $originalSlug = $slug;
        $i = 1;

        while (
            $categoryModel->where('slug', $slug)
                        ->where('id !=', $id)
                        ->countAllResults() > 0
        ) {
            $slug = $originalSlug . '-' . $i++;
        }

        $categoryModel->update($id, [
            'name'        => $this->request->getPost('name'),
            'slug'        => $slug,
            'description' => $this->request->getPost('description'),
            'image'       => $imageName
        ]);

        return redirect()->to('/admin/categories')->with('success', 'Category updated successfully!');
    }

    public function delete($id)
    {
        $category = $this->categoryModel->find($id);

        if (!$category) {
            return redirect()->to('admin/categories')->with('error', 'Category not found.');
        }

        // Delete image if exists
        if (!empty($category['image']) && file_exists(ROOTPATH . 'public/uploads/categories/' . $category['image'])) {
            unlink(ROOTPATH . 'public/uploads/categories/' . $category['image']);
        }

        $this->categoryModel->delete($id);

        return redirect()->to('admin/categories')->with('success', 'Category deleted successfully.');
    }





}
