<?php

namespace App\Controllers;
use App\Models\ContentModel;
use App\Models\SliderModel;
use App\Models\CalculatePriceInquiryModel;

class Frontend extends BaseController
{
    public function index()
    {
        $model = new ContentModel();
        $sliderModel  = new SliderModel();

        $slug = 'home'; // The slug you're targeting

        $content = $model->where('slug', $slug)->first();
        $sliders = $sliderModel->where('status', 1)->findAll(); 

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

     public function saveInquiry()
    {  die('ok');
        if ($this->request->getMethod() === 'post') {
            $data = [
                'name'  => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
            ];

            $inquiryModel = new CalculatePriceInquiryModel();
            $inquiryModel->save($data);

            return redirect()->back()->with('success', 'Inquiry submitted successfully!');
        }

        return redirect()->back()->with('error', 'Invalid request.');
    }

    
}
