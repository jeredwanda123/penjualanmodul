<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table      = 'transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $allowedFields = ['transaksi_id', 'tanggal_transaksi','total_harga','status_transaksi','metode_pembayaran_id','mahasiswa'];

}   