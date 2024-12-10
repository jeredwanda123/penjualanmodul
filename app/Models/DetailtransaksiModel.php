<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailtransaksiModel extends Model
{
    protected $table      = 'detail_transaksi';
    protected $primaryKey = 'detailtransaksi_id';
    protected $allowedFields = ['kuantitas', 'harga_satuan', 'sub_total', 'transaksi_id', 'modul_id',];
}
