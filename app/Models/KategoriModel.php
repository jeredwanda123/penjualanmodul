<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table      = 'kategori_modul';
    protected $primaryKey = 'kategori_id';
    protected $allowedFields = ['nama_kategori'];
}
