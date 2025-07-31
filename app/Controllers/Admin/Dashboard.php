<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ContentModel;
use App\Models\SliderModel;
use App\Models\ItCostInquiryModel;

class Dashboard extends BaseController
{

     protected $sliderModel;
     protected $db;
    public function __construct()
    {
        $this->sliderModel = new SliderModel();
        $this->db = \Config\Database::connect();
    }

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

    public function addSlider()
    { 
        return view('admin/slider/add');
    }

public function storeSlider()
{
    $validation = \Config\Services::validation();

    $validation->setRules([
        'image' => [
            'label' => 'Slider Image',
            'rules' => 'uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,2048]',
            'errors' => [
                'uploaded' => 'Please upload an image.',
                'is_image' => 'Uploaded file must be a valid image.',
                'mime_in' => 'Only JPG, JPEG, and PNG images are allowed.',
                'max_size' => 'Image size must be less than 2MB.',
            ],
        ],
        'ordering' => 'required|numeric'
    ]);
     if (!$validation->withRequest($this->request)->run()) {
        return view('admin/slider/add', [
            'validation' => $validation
        ]);
    }

    $image = $this->request->getFile('image');
    $ordering = (int) $this->request->getPost('ordering');

    if ($image->isValid() && !$image->hasMoved()) {
        $imagePath = $image->getTempName();
        $imageSize = getimagesize($imagePath);
        $width = $imageSize[0];
        $height = $imageSize[1];

        if ($width < 500 && $height < 300) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Image must be at least 500 x 300 pixels.');
        }

        // Shift existing orderings if needed
        $existing = $this->sliderModel
                        ->where('ordering >=', $ordering)
                        ->orderBy('ordering', 'DESC')
                        ->findAll();

        if (!empty($existing)) {
            foreach ($existing as $row) {
                $this->sliderModel->update($row['id'], [
                    'ordering' => $row['ordering'] + 1
                ]);
            }
        }

        // Save new slider
        $newName = $image->getRandomName();
        $image->move('uploads/sliders', $newName);

        $this->sliderModel->save([
            'image' => $newName,
            'ordering' => $ordering,
            'status'   => $this->request->getPost('status') ?? 0
        ]);

        return redirect()->to('admin/slider')->with('success', 'Slider added successfully.');
    }

    return redirect()->back()->withInput()->with('error', 'Image upload failed.');
}






    public function sliderIndex()
    {
        $model = new SliderModel();
        $data['sliders'] = $model->findAll();
        return view('admin/slider/index', $data);
    }

    public function editSlider($id)
    {
        $sliderModel = new SliderModel();
        $slider = $sliderModel->find($id);

        if (!$slider) {
            return redirect()->to('admin/slider')->with('error', 'Slider not found.');
        }

        return view('admin/slider/edit', ['slider' => $slider]);
    }

public function updateSlider($id)
{
    $validation = \Config\Services::validation();

    $validation->setRules([
        'image' => [
            'label' => 'Slider Image',
            'rules' => 'permit_empty|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,2048]',
            'errors' => [
                'is_image' => 'Uploaded file must be a valid image.',
                'mime_in' => 'Only JPG, JPEG, and PNG images are allowed.',
                'max_size' => 'Image size must be less than 2MB.',
            ],
        ],
        'ordering' => 'required|is_natural_no_zero'
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        return view('admin/slider/edit', [
            'validation' => $validation,
            'slider' => $this->sliderModel->find($id)
        ]);
    }

    $slider = $this->sliderModel->find($id);
    if (!$slider) {
        return redirect()->to('admin/slider')->with('error', 'Slider not found.');
    }

    $image = $this->request->getFile('image');
    $imageName = $slider['image']; // Keep old image

    if ($image && $image->isValid() && !$image->hasMoved()) {
        $imagePath = $image->getTempName();
        $imageSize = getimagesize($imagePath);
        $width = $imageSize[0];
        $height = $imageSize[1];

        if ($width < 500 && $height < 300) {
            return redirect()->back()->withInput()->with('error', 'Image must be at least 500 x 300 pixels.');
        }

        $imageName = $image->getRandomName();
        $image->move('uploads/sliders', $imageName);

        if (is_file('uploads/sliders/' . $slider['image'])) {
            unlink('uploads/sliders/' . $slider['image']);
        }
    }

    $newOrdering = (int)$this->request->getPost('ordering');
    $oldOrdering = (int)$slider['ordering'];

    if ($newOrdering != $oldOrdering) {
        // Get total sliders
        $totalSliders = $this->sliderModel->countAll();

        // If new ordering is higher than total, set it to last
        if ($newOrdering > $totalSliders) {
            $newOrdering = $totalSliders;
        }

        // Shift other sliders accordingly
        if ($newOrdering < $oldOrdering) {
            // Moving up: increase others in the range
            $this->db->query("UPDATE sliders SET ordering = ordering + 1 WHERE ordering >= ? AND ordering < ? AND id != ?", [$newOrdering, $oldOrdering, $id]);
        } else {
            // Moving down: decrease others in the range
            $this->db->query("UPDATE sliders SET ordering = ordering - 1 WHERE ordering <= ? AND ordering > ? AND id != ?", [$newOrdering, $oldOrdering, $id]);
        }
    }

    // Finally, update this slider
    $this->sliderModel->update($id, [
        'image' => $imageName,
        'ordering' => $newOrdering,
        'status'   => $this->request->getPost('status') ?? 0
    ]);

    return redirect()->to('admin/slider')->with('success', 'Slider updated successfully.');
}







    public function deleteSlider($id)
    {
        $slider = $this->sliderModel->find($id);

        if ($slider) {
            // Delete image file if exists
            $imagePath = FCPATH . 'uploads/sliders/' . $slider['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Delete record from database
            $this->sliderModel->delete($id);

            return redirect()->to(base_url('admin/slider'))->with('success', 'Slider deleted successfully.');
        }

        return redirect()->to(base_url('admin/slider'))->with('error', 'Slider not found.');
    }

    public function itCostList()
    {
        return view('admin/costinquiry/it_cost_inquiries_list');
    }

public function getItCostData()
{
     $db = \Config\Database::connect();
    $builder = $db->table('it_cost_inquiries');

    $data = $builder->orderBy('created_at', 'DESC')->get()->getResult();

    return $this->response->setJSON($data);
}




}
