<?php

namespace App\Controllers;

use App\Models\StokmodulModel;

class Stokmodul extends BaseController
{
    protected $stokmodulModel;
    protected $validation;

    public function __construct()
    {
        $this->stokmodulModel = new StokmodulModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        // Ambil data mahasiswa dari model
        $data = [
            'stokmodul' => $this->stokmodulModel->findAll(),
            'title' => 'stokmodul ~ Penjualan Modul',
            'judul' => 'Data Stok Modul',
            'aktive' => 'stokmodul'

        ];

        // Kirim data ke view
        return view('admin/stokmodul/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'modul ~ Penjualan Modul',
            'judul' => 'Data modul',
            'aktive' => 'modul'
        ];

        return view('admin/stokmodul/create', $data);
    }

    public function store()
    {
        $this->validation->setRules([
            'jenis_stok' => 'required',
            'jumlah' => 'required',
            'modul_id' => 'required',
            'modul_id' => 'required',

        ]);
        $data = [
            'jenis_stok' => $this->request->getPost('jenis_stok'),
            'jumlah' => $this->request->getPost('jumlah'),
            'modul_id' => $this->request->getPost('modul_id'),


        ];

        $this->stokmodulModel->save($data);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            return redirect()->to('modul/create')->withInput();
        } else {
            session()->setFlashdata('success', 'Stok Modul berhasil ditambahkan.');
            return redirect()->to('/modul');
        }
    }

    public function delete($id)
    {

        if ($this->stokmodulModel->delete($id)) {
            session()->setFlashdata('success', 'Stok Modul berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus Stok Modul.');
        }
        return redirect()->to('/modul');
    }
}
