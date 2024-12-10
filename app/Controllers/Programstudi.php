<?php

namespace App\Controllers;

use App\Models\ProgramstudiModel;

class Programstudi extends BaseController
{
    protected $prodiModel;
    protected $validation;

    public function __construct()
    {
        $this->prodiModel = new ProgramstudiModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'prodi' => $this->prodiModel->findAll(),
            'title' => 'Program Studi ~ Penjualan Modul',
            'judul' => 'Data Program Studi',
            'aktive' => 'programstudi'

        ];

        return view('admin/prodi/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Program Studi ~ Penjualan Modul',
            'judul' => 'Data Program Studi',
            'aktive' => 'programstudi'
        ];

        return view('admin/Prodi/create', $data);
    }

    public function store()
    {
        $this->validation->setRules([
            'program_studi' => 'required',

        ]);
        $data = [
            'program_studi' => $this->request->getPost('program_studi'),

        ];

        $this->prodiModel->save($data);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            return redirect()->to('prodi/create')->withInput();
        } else {
            session()->setFlashdata('success', 'Program Studi berhasil dibuat.');
            return redirect()->to('/prodi');
        }
    }
    public function edit($id)
    {
        $programstudi = $this->prodiModel->find($id);

        if (!$programstudi) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("program_studi dengan ID $id tidak ditemukan.");
        }

        $data = [
            'prodi' => $programstudi,
            'title' => 'program_studi',
            'judul' => 'Edit prodi',
            'aktive' => 'prodi'
        ];

        return view('admin/prodi/update', $data);
    }

    // Mengupdate kategori setelah diubah
    public function update($id)
    {
        $this->validation->setRules([
            'program_studi' => 'required',
        ]);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            return redirect()->to("prodi/update/$id")->withInput();
        }

        $data = [
            'program_studi' => $this->request->getPost('program_studi'),
        ];

        if ($this->prodiModel->update($id, $data)) {
            session()->setFlashdata('success', 'Prodi berhasil diubah.');
        } else {
            session()->setFlashdata('error', 'Gagal mengubah prodi.');
        }

        return redirect()->to('/prodi');
    }

    public function delete($id)
    {

        if ($this->prodiModel->delete($id)) {
            session()->setFlashdata('success', 'prodi berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus prodi.');
        }
        return redirect()->to('/prodi');
    }
}
