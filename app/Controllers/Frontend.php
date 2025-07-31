<?php

namespace App\Controllers;
use App\Models\ContentModel;
use App\Models\SliderModel;
use App\Models\ItCostInquiryModel;

class Frontend extends BaseController
{
    public function index()
    {
        $model = new ContentModel();
        $sliderModel  = new SliderModel();

        $slug = 'home'; // The slug you're targeting

        $content = $model->where('slug', $slug)->first();
        $sliders = $sliderModel->where('status', 1)->orderBy('ordering')->findAll(); 

        $data = [
            'pageTitle' => 'Dashboard',
            'content'   => $content,
            'sliders'   => $sliders,
        ];

        return view('frontend/home', $data);
    }

    public function calculatePrice(){
        $data['pageTitle'] = 'Calculate Price';
        return view('frontend/calculate_price', $data);
    }

    public function whyChooseUs()
    {
        $model = new ContentModel();

        $slug = 'why-choose-us'; 

        $content = $model->asArray()
                 ->where('slug', $slug)
                 ->first();
        $data = [
            'pageTitle' => 'Why Choose Us',
            'content'   => $content,
        ];

        return view('frontend/why_choose_us', $data);
    }


    public function careers(){
        $data['pageTitle'] = 'Careers';
        return view('frontend/careers', $data);
    }

    public function webDevelopment(){
        $data['pageTitle'] = 'Web Development';
        return view('frontend/web_development', $data);
    }

    public function completeBusiness(){
        $data['pageTitle'] = 'Complete Business';
        return view('frontend/complete_business', $data);
    }

    public function digitalMarketing(){
        $data['pageTitle'] = 'Digital Marketing';
        return view('frontend/digital_markrting', $data);
    }

    public function businessItSupports(){
        $data['pageTitle'] = 'Business It Supports';
        return view('frontend/businessItSupports', $data); 
    }

    public function cloudStroge(){
      $data['pageTitle'] = 'cloud storage backup';
        return view('frontend/cloud_storage_backup', $data);   
    }

    public function emailSupportAndServices(){
        $data['pageTitle'] = 'Email Support And Services';
        return view('frontend/email_support_and_services', $data); 
    }

    public function contactUs(){
        $data['pageTitle'] = 'Contact Us';
        return view('frontend/contact_us', $data); 
    }

    public function submitForm()
{
    helper(['form', 'url']);
    $validation = \Config\Services::validation();

    $rules = [
        'name'  => 'required|min_length[3]',
        'email' => 'required|valid_email',
        'phone' => 'required|min_length[10]|max_length[15]',
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    $request = $this->request;

    // Prepare cost summary data
    $costSummary = [
        [
            'item'     => 'Computers',
            'quantity' => $request->getPost('totailComputer'),
            'cost'     => $request->getPost('costComputersHidden')
        ],
        [
            'item'     => 'Servers',
            'quantity' => $request->getPost('totailserver'),
            'cost'     => $request->getPost('costServersHidden')
        ],
        [
            'item'     => 'Network Printers',
            'quantity' => $request->getPost('printers'),
            'cost'     => $request->getPost('costNetworksPrintersHidden')
        ],
        [
            'item'     => 'Network Devices',
            'quantity' => $request->getPost('networkDevices'),
            'cost'     => $request->getPost('costNetworkDevicesHidden')
        ],
        [
            'item'     => 'Offsite Backup',
            'quantity' => ($request->getPost('offSiteBackup') === 'Yes') ? 1 : 0,
            'cost'     => $request->getPost('offSiteBackupHidden')
        ],
        [
            'item'     => 'Imaging Based Backup',
            'quantity' => ($request->getPost('imagingBasedBackup') === 'Yes') ? 1 : 0,
            'cost'     => $request->getPost('imagingBasedBackupHidden')
        ],
    ];

    $data = [
        'helpdesk_support'      => $request->getPost('helpdesk'),
        'num_computers'         => $request->getPost('totailComputer'),
        'num_printers'          => $request->getPost('printers'),
        'num_network_devices'   => $request->getPost('networkDevices'),
        'has_servers'           => $request->getPost('ifserver'),
        'num_servers'           => ($request->getPost('ifserver') == 'Yes') ? $request->getPost('totailserver') : null,
        'onsite_support_rate'   => $request->getPost('supportrate'),
        'store_offsite_backup'  => $request->getPost('offSiteBackup'),
        'offsite_backup_cost'   => ($request->getPost('offSiteBackup') == 'Yes') ? 50.00 : null,
        'imaging_based_backup'  => $request->getPost('imagingBasedBackup'),
        'imaging_backup_cost'   => ($request->getPost('imagingBasedBackup') == 'Yes') ? 75.00 : null,
        'name'                  => $request->getPost('name'),
        'email'                 => $request->getPost('email'),
        'phone'                 => $request->getPost('phone'),
        'cost_summary'          => json_encode($costSummary),
        'total_monthly_cost'    => $request->getPost('totalMothlyTaxCostHidden')
    ];

    $model = new ItCostInquiryModel();
    $model->save($data);

    return redirect()->to('/calculate-price')->with('success', 'Inquiry submitted successfully!');
}


    
}
