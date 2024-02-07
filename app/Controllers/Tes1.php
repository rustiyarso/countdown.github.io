<?php

namespace App\Controllers;

use App\Models\Tes1Model;

class Tes1 extends BaseController
{
    public function index()
    {
        $model = new Tes1Model();
        $data['data1'] = $model->getData();

        // Tampilkan data menggunakan print_r

        print_r($data['data1']);
    }
}
