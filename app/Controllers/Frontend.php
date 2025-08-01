<?php

namespace App\Controllers;
use App\Models\ContentModel;
use App\Models\SliderModel;
use App\Models\ItCostInquiryModel;
use App\Models\ContactModel;
use App\Models\JobApplicationModel;

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


    public function submit()
    {
        helper(['form']);
        $validation = \Config\Services::validation();

        $rules = [
            'your-name'      => 'required|min_length[2]|max_length[100]',
            'your-email'     => 'required|valid_email',
            'contact'        => 'required|numeric|exact_length[10]',
            'your-subject'   => 'required|max_length[255]',
            'your-message'   => 'required|max_length[1000]',
            'g-recaptcha-response' => 'required'
        ];

        $messages = [
            'your-name' => [
                'required'    => 'Name is required.',
                'min_length'  => 'Name must be at least 2 characters.',
                'max_length'  => 'Name must be less than 100 characters.',
            ],
            'your-email' => [
                'required'    => 'Email is required.',
                'valid_email' => 'Please enter a valid email address.',
            ],
            'contact' => [
                'required'      => 'Contact number is required.',
                'numeric'       => 'Contact number must be numeric.',
                'exact_length'  => 'Contact number must be exactly 10 digits.',
            ],
            'your-subject' => [
                'required'     => 'Subject is required.',
                'max_length'   => 'Subject must be less than 255 characters.',
            ],
            'your-message' => [
                'required'     => 'Message is required.',
                'max_length'   => 'Message must be less than 1000 characters.',
            ],
            'g-recaptcha-response' => [
                'required'     => 'Please verify the CAPTCHA.',
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return view('frontend/contact_us', [
                'validation' => $validation
            ]);
        }
        $model = new ContactModel();
        $model->save([
            'name'       => $this->request->getPost('your-name'),
            'email'      => $this->request->getPost('your-email'),
            'contact_no' => $this->request->getPost('contact'),
            'subject'    => $this->request->getPost('your-subject'),
            'message'    => $this->request->getPost('your-message'),
        ]);
        session()->setFlashdata('success', 'Inquiry submitted successfully!');
       return redirect()->to('/contact-us');
    }


    public function submitResume()
    {  
        helper(['form']);

        $validationRules = [
            'name'    => 'required',
            'email'   => 'required|valid_email',
            'message' => 'required',
            'resume'  => 'uploaded[resume]|ext_in[resume,pdf,doc,docx]|max_size[resume,2048]',
            'g-recaptcha-response' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return view('frontend/careers', [
                'validation' => $this->validator
            ]);
        }

        // reCAPTCHA verification
        // $recaptchaSecret = getenv('recaptcha.secret');
        // $recaptchaResponse = $this->request->getPost('g-recaptcha-response');

        // $verify = json_decode(file_get_contents(
        //     'https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptchaSecret . '&response=' . $recaptchaResponse
        // ));

        // if (!$verify->success) {
        //     return view('frontend/careers', [
        //         'validation' => \Config\Services::validation(),
        //         'captcha_error' => 'Captcha verification failed.'
        //     ]);
        // }

        // File upload
        $file = $this->request->getFile('resume');
        $fileName = $file->getRandomName();
        $file->move('uploads/resumes', $fileName);

        // Save to DB
        $model = new JobApplicationModel();
        $model->save([
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
            'resume'  => $fileName,
        ]);

        

       session()->setFlashdata('success', 'Your application has been submitted.');
       return redirect()->to('/prime-it/careers');
    }




    
}
