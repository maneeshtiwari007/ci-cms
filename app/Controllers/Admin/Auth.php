<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Auth extends BaseController
{
public function login()
{
    helper(['form']);

    if ($this->request->getMethod() === 'POST') {  
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $adminModel = new \App\Models\AdminModel();
        $admin = $adminModel->where('email', $email)->first();

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                // Login success - Set session
                $sessionData = [
                    'admin_logged_in' => true,
                    'admin_id'        => $admin['id'],
                    'admin_name'      => $admin['first_name'] . ' ' . $admin['last_name'], // assuming these fields exist
                    'email'           => $admin['email'],
                    'role'            => $admin['role'], // super_admin or admin
                ];

                session()->set($sessionData);

                // Role-based redirect
                return redirect()->to(base_url('admin/slider'));

            } else {
                session()->setFlashdata('error', 'Invalid Password');
            }
        } else {
            session()->setFlashdata('error', 'Email not found');
        }

        return redirect()->back();
    }

    return view('admin/auth/login'); // login form view
}




public function logout()
{
    session()->destroy();
    return redirect()->to('/admin/login');
}

public function addAdmin()
{
    return view('admin/add_admin');
}


public function saveAdmin()
{
    helper(['form']);
    $validation = \Config\Services::validation();

    $rules = [
        'first_name' => 'required',
        'last_name'  => 'required',
        'email'      => 'required|valid_email|is_unique[admins.email]',
        'phone'      => 'required',
        'password'   => 'required|min_length[6]',
        'role'       => 'required|in_list[admin]',
        'image'      => 'uploaded[image]|max_size[image,1024]|is_image[image]',
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    $imageFile = $this->request->getFile('image');
    $imageName = $imageFile->getRandomName();
    $imageFile->move('uploads/admins/', $imageName);

    $firstName = $this->request->getPost('first_name');
    $lastName  = $this->request->getPost('last_name');

    $adminModel = new \App\Models\AdminModel();

    $adminData = [
        'first_name' => $firstName,
        'last_name'  => $lastName,
        'name'       => $firstName . ' ' . $lastName, // 🔗 Full name
        'email'      => $this->request->getPost('email'),
        'phone'      => $this->request->getPost('phone'),
        'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        'role'       => $this->request->getPost('role'),
    ];

    $adminModel->save($adminData);
    $adminId = $adminModel->getInsertID();

    $adminImageModel = new \App\Models\AdminImageModel();
    $adminImageModel->save([
        'admin_id' => $adminId,
        'image'    => $imageName
    ]);

    return redirect()->to('/admin/dashboard')->with('success', 'Admin created successfully.');
}


public function updateProfile(){
    $adminId = session()->get('admin_id');
    $adminModel = new AdminModel();
    $admin      = $adminModel->find($adminId);

    $adminImageModel = new \App\Models\AdminImageModel();
    $adminImage = $adminImageModel->where('admin_id', $adminId)->first();

    return view('admin/profile/edit', [
        'admin' => $admin,
        'adminImage' => $adminImage,
    ]);
}

public function saveProfile()
{
    helper(['form']);
    $adminId = session()->get('admin_id');

    $rules = [
        'first_name' => 'required',
        'last_name'  => 'required',
        'email'      => "required|valid_email|is_unique[admins.email,id,{$adminId}]",
    ];

    // Only validate password if it's filled
    if ($this->request->getPost('password')) {
        $rules['password'] = 'min_length[6]';
    }

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $adminModel = new AdminModel();

    $data = [
        'first_name' => $this->request->getPost('first_name'),
        'last_name'  => $this->request->getPost('last_name'),
        'email'      => $this->request->getPost('email'),
        'phone'      => $this->request->getPost('phone'),
    ];

    if ($this->request->getPost('password')) {
        $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
    }

    $adminModel->update($adminId, $data);

    // Image upload (optional)
    $imageFile = $this->request->getFile('image');
    if ($imageFile && $imageFile->isValid()) {
        $imageName = $imageFile->getRandomName();
        $imageFile->move('uploads/admins/', $imageName);

        $adminImageModel = new \App\Models\AdminImageModel();

        // Check if image exists
        $existingImage = $adminImageModel->where('admin_id', $adminId)->first();
        if ($existingImage) {
            // Optional: delete old image
            @unlink('uploads/admins/' . $existingImage['image']);
            $adminImageModel->update($existingImage['id'], ['image' => $imageName]);
        } else {
            $adminImageModel->save([
                'admin_id' => $adminId,
                'image'    => $imageName,
            ]);
        }
    }

    return redirect()->to('/admin/update-profile')->with('success', 'Profile updated successfully.');
}




}
