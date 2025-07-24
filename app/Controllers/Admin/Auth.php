<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Auth extends BaseController
{
public function login()
{
    if (session()->get('admin_logged_in')) {
        return redirect()->to('/admin/dashboard');
    }

    helper(['form']);
    if ($this->request->getMethod() === 'POST') {  
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $adminModel = new \App\Models\AdminModel();
        $admin = $adminModel->where('email', $email)->first();
        
        if ($admin && password_verify($password, $admin['password'])) {
            // Success
            session()->set('admin_logged_in', true);
            session()->set('admin_id', $admin['id']);
            session()->set('admin_name', $admin['name']);

            return redirect()->to('/admin/dashboard');
        } else {
            // Failure
            return view('admin/auth/login', [
                'error' => 'Invalid email or password.'
            ]);
        }
    }

    return view('admin/auth/login');
}



    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}
