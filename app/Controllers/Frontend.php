<?php

namespace App\Controllers;

class Frontend extends BaseController
{
    public function index()
    {
        return view('frontend/home');
    }

    public function calculatePrice(){
        return view('frontend/calculate_price');
    }
}
