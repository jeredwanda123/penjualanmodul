<?php

namespace App\Models;

use CodeIgniter\Model;

class UlasanModel extends Model
{
    protected $table      = 'ulasan';
    protected $primaryKey = 'ulasan_id';
    protected $allowedFields = ['ulasan_id', 'rating','ulasan','tanggal_ulasan','id_mahasiswa','modul_id'];

}   