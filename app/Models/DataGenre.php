<?php

namespace App\Models;

use CodeIgniter\Model;

class DataGenre extends Model
{
    protected $table      = 'genre';
    protected $primaryKey = 'id_genre';
    protected $allowedFields = ['id_genre', 'nama_genre'];

    public function getData()
    {
        return $this->db->table('genre')->get()->getResultArray();
    }
}
