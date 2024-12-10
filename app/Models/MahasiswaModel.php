<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $allowedFields = ['npm', 'semester', 'nama', 'alamat', 'telepon', 'id_user', 'id_prodi'];
}
