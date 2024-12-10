<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Transaksi extends BaseController
{
    protected $transaksiModel;
    protected $validation;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'transaksi' => $this->transaksiModel->findAll(),
            'title' => 'transaksi ~ Penjualan Modul',
            'judul' => 'Data transaksi',
            'aktive' => 'transaksi'

        ];

        return view('admin/transaksi/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'transaksi ~ Penjualan Modul',
            'judul' => 'Data transaksi',
            'aktive' => 'transaksi'
        ];

        return view('admin/transaksi/create', $data);
    }

    public function store()
    {
        $this->validation->setRules([
            'tanggal_transaksi' => 'required',
            'total_harga' => 'required',
            'status_transaksi' => 'required',
            'id_mahasiswa' => 'required',

        ]);
        $data = [
            'tanggal_transaksi' => $this->request->getPost('tanggal_transaksi'),
            'total_harga' => $this->request->getPost('total_harga'),
            'status_transaksi' => $this->request->getPost('status_transaksi'),
            'id_mahasiswa' => $this->request->getPost('id_mahasiswa'),

        ];

        $this->transaksiModel->save($data);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            return redirect()->to('transaksi/create')->withInput();
        } else {
            session()->setFlashdata('success', 'Transaksi berhasil dibuat.');
            return redirect()->to('/transaksi');
        }
    }

    public function delete($id)
    {

        if ($this->transaksiModel->delete($id)) {
            session()->setFlashdata('success', 'Transaksi berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus Transaksi.');
        }
        return redirect()->to('/transaksi');
    }
}
