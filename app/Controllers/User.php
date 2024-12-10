<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;
    protected $validation;

    public function __construct()
    {
        $this->userModel = new userModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'user' => $this->userModel->findAll(),
            'title' => 'user ~ Penjualan Modul',
            'judul' => 'Data user',
            'aktive' => 'user'

        ];

        return view('admin/user/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'user ~ Penjualan Modul',
            'judul' => 'Data user',
            'aktive' => 'user'
        ];

        return view('admin/user/create', $data);
    }

    public function store()
    {
        $this->validation->setRules([
            'username' => 'required',
            'password' => 'required',
        ]);
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),

        ];

        $this->userModel->save($data);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Form tidak lengkap. Pastikan semua field diisi.');
            return redirect()->to('user/create')->withInput();
        } else {
            session()->setFlashdata('success', 'User berhasil dibuat.');
            return redirect()->to('/user');
        }
    }

    public function delete($id)
    {

        if ($this->userModel->delete($id)) {
            session()->setFlashdata('success', 'User berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus User.');
        }
        return redirect()->to('/user');
    }
}
