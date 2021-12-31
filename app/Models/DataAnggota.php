<?php

namespace App\Models;

use CodeIgniter\Model;

class DataAnggota extends Model
{
    protected $table      = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $allowedFields = ['id_anggota', 'id_akun', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'gender', 'nomor_telepon', 'pekerjaan'];

    public function getAnggota($id = "")
    {
        if ($id == "") {
            return $this->db->table('anggota')->get()->getResultArray();
        } else {
            return $this->db->table('anggota')
                ->like('id_anggota', $id)
                ->orLike('nama_lengkap', $id)
                ->get()
                ->getResultArray();
        }
    }
}
