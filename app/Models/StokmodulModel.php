<?php

namespace App\Models;

use CodeIgniter\Model;

class StokmodulModel extends Model
{
    protected $table      = 'stok';
    protected $primaryKey = 'id_stok';
    protected $allowedFields = ['jenis_stok', 'jumlah', 'modul_id'];
}
