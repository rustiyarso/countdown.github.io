<?php

namespace App\Controllers;

use App\Models\Data_model;

class Home extends BaseController
{

    public function index()
    {
        return view('page2');
    }
}
