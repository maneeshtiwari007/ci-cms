<?php

namespace App\Controllers;

class Frontend extends BaseController
{
    public function index()
    {
        return view('frontend/home');
    }
}
