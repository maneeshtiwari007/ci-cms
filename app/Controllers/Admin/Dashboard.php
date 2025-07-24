<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('admin_logged_in')) {
            return redirect()->to('/admin/login');
        }
        return view('admin/dashboard');
    }

      public function content()
    {  
        return view('admin/content_form');
    }

    public function saveContent()
    {
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');

        // Yahan DB me insert/update ka logic aayega (abhi sirf test ke liye)
        return redirect()->to('/admin/content')->with('success', 'Content saved successfully!');
    }
}
