<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ContentModel;

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
         if (!session()->get('admin_logged_in')) {
            return redirect()->to('/admin/login');
        }
        return view('admin/content_form');
    }

    public function store()
    {
        helper('common'); // Only if not autoloaded

        $model = new \App\Models\ContentModel();
        $title = $this->request->getPost('title');
        $slug = create_unique_slug($title, $model);

        $data = [
            'title' => $title,
            'slug' => $slug,
            'description' => $this->request->getPost('description'),
        ];

        $model->save($data);

        return redirect()->to(base_url('admin/content/list'))->with('success', 'Content added successfully!');
    }

    public function list()
    {
        if (!session()->get('admin_logged_in')) {
            return redirect()->to('/admin/login');
        }
         helper('text');
        $model = new ContentModel();
        $data['contents'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('admin/index', $data);
    }

    public function edit($id)
    {
        if (!session()->get('admin_logged_in')) {
            return redirect()->to('/admin/login');
        }
        $model = new \App\Models\ContentModel();
        $content = $model->find($id);

        if (!$content) {
            return redirect()->to(base_url('admin/content/list'))->with('error', 'Content not found');
        }

        return view('admin/content_edit', ['content' => $content]);
    }

    public function update($id)
    {
        helper('content');

        $model = new \App\Models\ContentModel();
        $content = $model->find($id);

        if (!$content) {
            return redirect()->to(base_url('admin/content/list'))->with('error', 'Content not found');
        }

        $title = $this->request->getPost('title');
        $slug = create_unique_slug($title, $model, $id); // exclude current id

        $model->update($id, [
            'title' => $title,
            'slug' => $slug,
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to(base_url('admin/content/list'))->with('success', 'Content updated successfully');
    }

    public function delete($id)
    {
        $contentModel = new \App\Models\ContentModel();

        $content = $contentModel->find($id);

        if ($content) {
            $contentModel->delete($id);
            return redirect()->to(base_url('admin/content/list'))->with('success', 'Content deleted successfully.');
        } else {
            return redirect()->to(base_url('admin/content/list'))->with('error', 'Content not found.');
        }
    }



}
