<?php

namespace App\Controllers;

use App\Models\MpraktikumModel;
use App\Models\KategoriModel;

class Mpraktikum extends BaseController
{
    protected $MpraktikumModel;
    protected $kategoriModel;
    protected $validation;

    public function __construct()
    {
        $this->MpraktikumModel = new MpraktikumModel();
        $this->kategoriModel = new KategoriModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        // Ambil data mahasiswa dari model
        $data = [
            'modul' => $this->MpraktikumModel->getModul(),
            'title' => 'Modul Praktikum ~ Penjualan Modul',
            'judul' => 'Data Modul Praktikum',
            'aktive' => 'modul'

        ];


        // Kirim data ke view
        return view('admin/modul/index', $data);
    }
    public function create()
    {
        $data = [
            'Mpraktikum' => $this->MpraktikumModel->findAll(),
            'tbkategori' => $this->kategoriModel->findAll(),
            'title' => 'praktikum ~ Penjualan Modul',
            'judul' => 'Data Modul Praktikum',
            'aktive' => 'Praktikum'
        ];

        return view('admin/modul/create', $data);
    }

    public function store()
    {
        $this->validation->setRules([
            'nama_modul' => 'required',
            'harga' => 'required',
            'kategori_id' => 'required'

        ]);
        $data = [
            'nama_modul' => $this->request->getPost('nama_modul'),
            'harga' => $this->request->getPost('harga'),
            'kategori_id' => $this->request->getPost('kategori_id')

        ];

        $this->MpraktikumModel->save($data);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            return redirect()->to('modul/create')->withInput();
        } else {
            session()->setFlashdata('success', 'Modul Praktikum berhasil ditambahkan.');
            return redirect()->to('/modul');
        }
    }
    public function edit($id)
    {
        $modul = $this->MpraktikumModel->find($id);

        if (!$modul) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Modul Praktikum dengan ID $id tidak ditemukan.");
        }

        $data = [
            'modul' => $modul,
            'tbkategori' => $this->kategoriModel->findAll(),
            'title' => 'Modul Praktikum',
            'judul' => 'Edit modul',
            'aktive' => 'modul'
        ];

        return view('admin/modul/update', $data);
    }

    // Mengupdate kategori setelah diubah
    public function update($id)
    {
        $this->validation->setRules([
            'nama_modul' => 'required',
            'harga' => 'required',
            'kategori_id' => 'required'

        ]);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            return redirect()->to("modul/update/$id")->withInput();
        }

        $data = [
            'nama_modul' => $this->request->getPost('nama_modul'),
            'harga' => $this->request->getPost('harga'),
            'kategori_id' => $this->request->getPost('kategori_id')

        ];

        if ($this->MpraktikumModel->update($id, $data)) {
            session()->setFlashdata('success', 'Mpraktikum berhasil diubah.');
        } else {
            session()->setFlashdata('error', 'Gagal mengubah prodi.');
        }

        return redirect()->to('/modul');
    }

    public function delete($id)
    {

        if ($this->MpraktikumModel->delete($id)) {
            session()->setFlashdata('success', 'prodi berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus prodi.');
        }
        return redirect()->to('/modul');
    }
}
