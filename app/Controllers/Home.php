<?php

namespace App\Controllers;

use App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Dashboard ~ Penjualan Modul",
            'aktive' => 'Home'
        ];
        return view('admin/home', $data);
    }
}
