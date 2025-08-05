<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BlogModel;
use App\Models\Category;

class BlogController extends BaseController
{
public function blog()
{
    helper(['text', 'url']);

    $blogModel = new BlogModel();
    $categoryModel = new Category();

    $search = $this->request->getGet('q');
    $categorySlug = $this->request->getGet('category'); // 🟡 Category SLUG

    $perPage = 6;
    $currentPage = (int) ($this->request->getGet('page') ?? 1);

    $blogsQuery = $blogModel->orderBy('created_at', 'DESC');

    // 🔍 Search
    if (!empty($search)) {
        $blogsQuery->groupStart()
            ->like('title', $search)
            ->orLike('description', $search)
            ->orLike('meta_title', $search)
            ->orLike('meta_description', $search)
            ->orLike('tags', $search)
        ->groupEnd();
    }

    // 🟡 Category Filter by Slug
    if (!empty($categorySlug)) {
        $category = $categoryModel->where('slug', $categorySlug)->first();
        if ($category) {
            $blogsQuery->where('cat_id', $category['id']);
        }
    }

    // 🔄 Paginate
    $data['blogs'] = $blogsQuery->paginate($perPage);
    $data['pager'] = $blogModel->pager;

    // 📝 Search Term
    $data['searchTerm'] = $search;

    // 📂 All Categories with blog count
    $categories = $categoryModel->findAll();
    foreach ($categories as &$cat) {
        $cat['blog_count'] = $blogModel->where('cat_id', $cat['id'])->countAllResults();
    }
    $data['categories'] = $categories;

    // 🕒 Recent Posts
    $data['recentPosts'] = $blogModel->orderBy('created_at', 'DESC')->limit(3)->find();

    // 🏷️ Popular Tags
    $allTags = array_column($blogModel->select('tags')->findAll(), 'tags');
    $tagArray = [];
    foreach ($allTags as $tagStr) {
        $tags = explode(',', $tagStr);
        foreach ($tags as $tag) {
            $clean = trim($tag);
            if ($clean !== '') {
                $tagArray[] = $clean;
            }
        }
    }
    $data['popularTags'] = array_unique($tagArray);

    // 🏷️ Category Slug tracking (for active highlight in view, optional)
    $data['currentCategorySlug'] = $categorySlug;

    $data['pageTitle'] = 'Blog';

    return view('frontend/blog/blog', $data);
}







public function blogDetails($slug)
{
    helper('text');

    $blogModel = new BlogModel();
    $categoryModel = new Category();

    // If search is triggered
    $searchTerm = $this->request->getGet('q');
    $searchResults = [];

    if (!empty($searchTerm)) {
        $searchResults = $blogModel
            ->groupStart()
                ->like('title', $searchTerm)
                ->orLike('description', $searchTerm)
                ->orLike('tags', $searchTerm)
            ->groupEnd()
            ->orderBy('created_at', 'DESC')
            ->findAll();
    }

    // Blog Details
    $blog = $blogModel->where('slug', $slug)->first();
    if (!$blog) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Blog not found");
    }

    // Prev / Next Posts
    $prevPost = $blogModel->where('id <', $blog['id'])->orderBy('id', 'DESC')->first();
    $nextPost = $blogModel->where('id >', $blog['id'])->orderBy('id', 'ASC')->first();

    $data = [
        'pageTitle'    => $blog['title'],
        'blog'         => $blog,
        'categories'   => $categoryModel->getWithBlogCount(),
        'recentPosts'  => $blogModel->where('id !=', $blog['id'])->orderBy('created_at', 'DESC')->limit(5)->find(),
        'popularTags'  => array_unique(array_filter(array_merge(...array_map(function ($item) {
            return array_map('trim', explode(',', $item['tags']));
        }, $blogModel->select('tags')->findAll())))),
        'prevPost'     => $prevPost,
        'nextPost'     => $nextPost,
        'searchTerm'   => $searchTerm,
        'searchResults'=> $searchResults,
    ];

    return view('frontend/blog/blog_details', $data);
}



}
