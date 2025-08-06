<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SeoModel;
use Config\SeoPages;

class SeoController extends BaseController
{
    public function index()
    {
        if (!session()->get('admin_logged_in')) {
                return redirect()->to('/admin/login');
        }
     $seoModel = new SeoModel();
     $data['seoData'] = $seoModel->findAll();
     return view('admin/seo/index', $data);
    }

    public function create(){
         if (!session()->get('admin_logged_in')) {
                return redirect()->to('/admin/login');
        }
        $model = new SeoModel();
        $seoPages = new SeoPages();
        $data['seoList'] = $model->findAll();              
        $data['pageOptions'] = $seoPages->pages;       
        return view('admin/seo/create', $data);
    }

    public function store()
    {
         if (!session()->get('admin_logged_in')) {
                return redirect()->to('/admin/login');
        }
        $seoModel = new SeoModel();

        $validationRules = [
            'page_url'         => 'required',
            'meta_title'       => 'required',
            'meta_description' => 'required',
            'meta_keywords'    => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $pageUrl = $this->request->getPost('page_url');

        // ✅ Check if the page_url already exists
        $existing = $seoModel->where('page_url', $pageUrl)->first();
        if ($existing) {
            return redirect()->back()->withInput()->with('error', 'This Page URL already exists.');
        }

        $data = [
            'page_url'         => $pageUrl,
            'meta_title'       => $this->request->getPost('meta_title'),
            'meta_description' => $this->request->getPost('meta_description'),
            'meta_keywords'    => $this->request->getPost('meta_keywords'),
        ];

        $seoModel->insert($data);

        return redirect()->to('admin/seo')->with('success', 'SEO Data Saved Successfully');
    }


   public function edit($id)
    {
         if (!session()->get('admin_logged_in')) {
                return redirect()->to('/admin/login');
        }
        $seoModel = new SeoModel();
        $seoData = $seoModel->find($id);

        if (!$seoData) {
            return redirect()->to('admin/seo')->with('error', 'SEO record not found.');
        }

        $seoPages = new SeoPages();

        $data = [
            'seo'         => $seoData,
            'pageOptions' => $seoPages->pages,
        ];

        return view('admin/seo/edit', $data);
    }


       public function update($id)
        {
             if (!session()->get('admin_logged_in')) {
                    return redirect()->to('/admin/login');
            }
            $seoModel = new SeoModel();

            $validationRules = [
                'page_url'         => 'required',
                'meta_title'       => 'required',
                'meta_description' => 'required',
                'meta_keywords'    => 'required',
            ];

            if (!$this->validate($validationRules)) {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }

            $pageUrl = $this->request->getPost('page_url');

            // Check if the same page_url exists for a different ID
            $existing = $seoModel->where('page_url', $pageUrl)->where('id !=', $id)->first();
            if ($existing) {
                return redirect()->back()->withInput()->with('error', 'This Page URL already exists.');
            }

            $data = [
                'page_url'         => $pageUrl,
                'meta_title'       => $this->request->getPost('meta_title'),
                'meta_description' => $this->request->getPost('meta_description'),
                'meta_keywords'    => $this->request->getPost('meta_keywords'),
            ];

            $seoModel->update($id, $data);

            return redirect()->to('admin/seo')->with('success', 'SEO Data Updated Successfully');
        }

        public function delete($id)
        {
             if (!session()->get('admin_logged_in')) {
                    return redirect()->to('/admin/login');
            }
            $seoModel = new SeoModel();
            $seoData = $seoModel->find($id);

            if (!$seoData) {
                return redirect()->to('admin/seo')->with('error', 'SEO record not found.');
            }

            $seoModel->delete($id);

            return redirect()->to('admin/seo')->with('success', 'SEO record deleted successfully.');
        }





}
