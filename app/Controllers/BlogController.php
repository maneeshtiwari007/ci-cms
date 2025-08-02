<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function blog()
    {
        helper('text');
         $blogModel = new BlogModel();
         $data['pageTitle'] = 'Blog';

    // Fetch latest blogs (optional: only published ones)
    $data['blogs'] = $blogModel
        ->orderBy('created_at', 'DESC')
        ->findAll(); 
        return view('frontend/blog/blog', $data); 
    }

    public function blogDetails(){
        $data['pageTitle'] = 'Blog Details';
        return view('frontend/blog/blog_details', $data); 
    }
}
