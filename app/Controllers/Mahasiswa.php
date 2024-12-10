<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\UserModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;
    protected $validation;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'title' => 'Mahasiswa ~ Penjualan Modul',
            'judul' => 'Data Mahasiswa',
            'aktive' => 'Mahasiswa'
        ];

        return view('admin/Mahasiswa/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Mahasiswa ~ Penjualan Modul',
            'judul' => 'Data Mahasiswa',
            'aktive' => 'Mahasiswa'

        ];


        return view('admin/mahasiswa/create', $data);
    }
    public function store()
    {
        $this->validation->setRules([
            'npm' => 'required',
            'semester' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            // 'id_user' => 'required',
            // 'id_prodi' => 'required',

        ]);
        $data = [
            'npm' => $this->request->getPost('npm'),
            'semester' => $this->request->getPost('semester'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            // 'id_user' => $this->request->getPost('id_user'),
            // 'id_prodi' => $this->request->getPost('id_prodi'),

        ];

        $this->mahasiswaModel->save($data);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            return redirect()->to('mahasiswa/create')->withInput();
        } else {
            session()->setFlashdata('success', 'Mahasiswa berhasil ditambahkan.');
            return redirect()->to('/mahasiswa');
        }
    }
    public function edit($id)
    {
        $mahasiswa = $this->mahasiswaModel->find($id);

        if (!$mahasiswa) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Mahasiswa dengan ID $id tidak ditemukan.");
        }

        $data = [
            'mahasiswa' => $mahasiswa,
            'title' => 'Mahasiswa',
            'judul' => 'Edit mahasiswa',
            'aktive' => 'mahasisswa'
        ];

        return view('admin/mahasiswa/update', $data);
    }

    // Mengupdate kategori setelah diubah
    public function update($id)
    {
        $this->validation->setRules([
            'mahasiswa' => 'required',
            'npm' => 'required',
            'semester' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            // 'id_user' => 'required',
            // 'id_prodi' => 'required',

        ]);
        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            // return redirect()->to("mahasiswa/update/$id")->withInput();
        }
        $data = [
            'npm' => $this->request->getPost('npm'),
            'semester' => $this->request->getPost('semester'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            // 'id_user' => $this->request->getPost('id_user'),
            // 'id_prodi' => $this->request->getPost('id_prodi'),

        ];



        if ($this->mahasiswaModel->update($id, $data)) {
            session()->setFlashdata('success', 'Mahasiswa berhasil diubah.');
        } else {
            session()->setFlashdata('error', 'Gagal mengubah prodi.');
        }
        return redirect()->to('/mahasiswa');
    }
    public function delete($id)
    {

        if ($this->mahasiswaModel->delete($id)) {
            session()->setFlashdata('success', 'Stok Modul berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus Stok Modul.');
        }
        return redirect()->to('/mahasiswa');
    }
}
