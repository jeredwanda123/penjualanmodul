<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramstudiModel extends Model
{
    protected $table      = 'programstudi';
    protected $primaryKey = 'id_prodi';
    protected $allowedFields = ['id_prodi', 'program_studi'];
}
