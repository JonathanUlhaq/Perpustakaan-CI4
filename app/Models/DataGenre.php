<?php

namespace App\Models;

use CodeIgniter\Model;

class DataGenre extends Model
{
    protected $table      = 'genre';
    protected $primaryKey = 'id_genre';
    protected $allowedFields = ['id_genre', 'nama_genre'];

    public function getData($id = "")
    {
        if ($id == "") {
            return $this->db->table('genre')->get()->getResultArray();
        } else {
            return $this->db->table('genre')->like('nama_genre', $id)
                ->orLike('id_genre', $id)
                ->get()->getResultArray();
        }
    }
}
