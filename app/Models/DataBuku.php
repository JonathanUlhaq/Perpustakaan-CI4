<?php

namespace App\Models;

use CodeIgniter\Model;

class DataBuku extends Model
{
    protected $table      = 'data_buku';
    protected $primaryKey = 'id_buku';
    protected $allowedFields = ['judul', 'genre', 'tahun_terbit', 'pengarang', 'status', 'cover', 'id_buku', 'penerbit'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getData($keyword = "")
    {
        if ($keyword == "") {
            return $this->db->table('data_buku')->join('genre', 'data_buku.genre=genre.id_genre')->get()->getResultArray();
        } else {
            return $this->db->table('data_buku')->join('genre', 'data_buku.genre=genre.id_genre')->like('judul', $keyword)
                ->orLike('genre', $keyword)
                ->orLike('pengarang', $keyword)
                ->orLike('penerbit', $keyword)->get()->getResultArray();
        }
    }

    public function getDatas($keyword = "")
    {
        if ($keyword == "") {
            return $this->db->table('data_buku')->join('genre', 'data_buku.genre=genre.id_genre')->get()->getResultArray();
        } else {
            return $this->db->table('data_buku')->join('genre', 'data_buku.genre=genre.id_genre')->like('judul', $keyword)
                ->orLike('id_buku', $keyword)->orLike('genre.id_genre', $keyword)->get()->getResultArray();
        }
    }
}
