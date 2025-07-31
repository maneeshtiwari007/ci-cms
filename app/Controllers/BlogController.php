<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BlogController extends BaseController
{
    public function blog()
    {
        $data['pageTitle'] = 'blog';
        return view('frontend/blog/blog', $data); 
    }

    public function blogDetails(){
        $data['pageTitle'] = 'Blog Details';
        return view('frontend/blog/blog_details', $data); 
    }
}
