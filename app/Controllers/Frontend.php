<?php

namespace App\Controllers;

class Frontend extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Dashboard';
        return view('frontend/home', $data);
    }

    public function calculatePrice(){
        $data['pageTitle'] = 'Calculate Price';
        return view('frontend/calculate_price', $data);
    }
}
