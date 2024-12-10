<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class MpraktikumModel extends Model
{
    protected $table      = 'modul_praktikum';
    protected $primaryKey = 'modul_id';
    protected $allowedFields = ['nama_modul', 'harga', 'kategori_id'];


    public function getModul()
    {
        $query = "SELECT
            `modul_praktikum`.*,
            `kategori_modul`.`nama_kategori`
            FROM
            `kategori_modul`
            INNER JOIN `modul_praktikum` ON `kategori_modul`.`kategori_id` =
            `modul_praktikum`.`kategori_id`";

        return $this->db->query($query)->getResultArray();
    }
}
