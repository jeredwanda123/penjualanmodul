<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Kategori extends BaseController
{
    protected $kategoriModel;
    protected $validation;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'kategori' => $this->kategoriModel->findAll(),
            'title' => 'Kategori ~ Penjualan Modul',
            'judul' => 'Data Kategori',
            'aktive' => 'Kategori'
        ];

        return view('admin/Kategori/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Kategori ~ Penjualan Modul',
            'judul' => 'Data Kategori',
            'aktive' => 'Kategori'
        ];

        return view('admin/kategori/create', $data);
    }

    public function store()
    {
        $this->validation->setRules([
            'nama_kategori' => 'required',
        ]);
        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
        ];

        $this->kategoriModel->save($data);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            return redirect()->to('kategori/create')->withInput();
        } else {
            session()->setFlashdata('success', 'Kategori berhasil ditambahkan.');
            return redirect()->to('/kategori');
        }
    }

    public function edit($id)
    {
        $kategori = $this->kategoriModel->find($id);

        if (!$kategori) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Kategori dengan ID $id tidak ditemukan.");
        }

        $data = [
            'kategori' => $kategori,
            'title' => 'Kategori ~ Penjualan Modul',
            'judul' => 'Edit Kategori',
            'aktive' => 'Kategori'
        ];

        return view('admin/kategori/update', $data);
    }

    // Mengupdate kategori setelah diubah
    public function update($id)
    {
        $this->validation->setRules([
            'nama_kategori' => 'required',
        ]);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            return redirect()->to("kategori/update/$id")->withInput();
        }

        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
        ];

        if ($this->kategoriModel->update($id, $data)) {
            session()->setFlashdata('success', 'Kategori berhasil diubah.');
        } else {
            session()->setFlashdata('error', 'Gagal mengubah kategori.');
        }

        return redirect()->to('/kategori');
    }


    public function delete($id)
    {

        if ($this->kategoriModel->delete($id)) {
            session()->setFlashdata('success', 'Kategori berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus kategori.');
        }
        return redirect()->to('/kategori');
    }
}
