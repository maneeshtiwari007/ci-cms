<?php

namespace App\Controllers;
use App\Models\ContentModel;

class Frontend extends BaseController
{
    public function index()
    {
        $model = new ContentModel();

        $slug = 'home'; // The slug you're targeting

        $content = $model->where('slug', $slug)->first();

        $data = [
            'pageTitle' => 'Dashboard',
            'content'   => $content,
        ];

        return view('frontend/home', $data);
    }

    public function calculatePrice(){
        $data['pageTitle'] = 'Calculate Price';
        return view('frontend/calculate_price', $data);
    }

    public function whyChooseUs(){
        $data['pageTitle'] = 'Why Choose Us';
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

    
}
