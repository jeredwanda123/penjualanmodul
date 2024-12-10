<?php

namespace App\Controllers;
use App\Models\UlasanModel;

class Ulasan extends BaseController
{
    public function index()
    {
        $UlasanModel = new UlasanModel();
        $data['ulasan']=$UlasanModel->findAll();
        return view('admin/ulasan',$data);
    }

}
