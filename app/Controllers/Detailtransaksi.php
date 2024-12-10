<?php

namespace App\Controllers;

use App\Models\DetailtransaksiModel;

class Detailtransaksi extends BaseController
{
    protected $detailtransaksiModel;
    protected $validation;

    public function __construct()
    {
        $this->detailtransaksiModel = new DetailtransaksiModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'detailtransaksi' => $this->detailtransaksiModel->findAll(),
            'title' => 'Detail Transaksi ~ Penjualan Modul',
            'judul' => 'Data Detail transaksi',
            'aktive' => 'detailtransaksi'

        ];

        return view('admin/detailtransaksi/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'detail transaksi ~ Penjualan Modul',
            'judul' => 'Data detail transaksi',
            'aktive' => 'detailtransaksi'
        ];

        return view('admin/detailtransaksi/create', $data);
    }

    public function store()
    {
        $this->validation->setRules([
            'kuantitas' => 'required',
            'harga_satuan' => 'required',
            'sub_total' => 'required',
            'transaski_id' => 'required',
            'modul_id' => 'required',


        ]);
        $data = [
            'kuantitas' => $this->request->getPost('kuantitas'),
            'harga_satuan' => $this->request->getPost('harga_satuan'),
            'sub_total' => $this->request->getPost('sub_total'),
            'transaksi_id' => $this->request->getPost('transaksi_id'),
            'modul_id' => $this->request->getPost('modul_id'),

        ];

        $this->detailtransaksiModel->save($data);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            return redirect()->to('detailtransaksi/create')->withInput();
        } else {
            session()->setFlashdata('success', 'Transaksi berhasil dibuat.');
            return redirect()->to('/detailtransaksi');
        }
    }

    public function delete($id)
    {

        if ($this->detailtransaksiModel->delete($id)) {
            session()->setFlashdata('success', 'Transaksi berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus Transaksi.');
        }
        return redirect()->to('/detailtransaksi');
    }
}
