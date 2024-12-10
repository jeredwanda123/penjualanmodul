<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class Pembayaran extends BaseController
{
    protected $pembayaranModel;

    public function __construct()
    {
        $this->pembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        // Ambil data mahasiswa dari model
        $data = [
            'pembayaran' => $this->pembayaranModel->findAll(),
            'title' => 'pembayaran ~ Penjualan Modul',
            'judul' => 'Data Pembayaran',
            'aktive' => 'Pembayaran'

        ];

        // Kirim data ke view
        return view('admin/Pembayaran/index', $data);
    }
    public function store()
    {
        $data = [
            'nama_pembayaran'   => $this->request->getGetPost('nama_pembayaran'),
            'deskripsi_pembayaran'   => $this->request->getGetPost('deskripsi_pembayaran'),
        ];

        $this->pembayaranModel->save($data);
        session()->setFlashdata('success', 'pembayaran berhasil ditambahkan.');
        return redirect()->to('/pembayaran');
    }
}
