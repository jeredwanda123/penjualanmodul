<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table      = 'pembayaran';
    protected $primaryKey = 'metode_pembayaran_id';
    protected $allowedFields = ['transaksi', 'file_path', 'harga_satuan', 'kuantitas', 'sub_total'];
}
