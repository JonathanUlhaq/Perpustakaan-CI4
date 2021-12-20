<?php

namespace App\Models;

use CodeIgniter\Model;

class DataAnggota extends Model
{
    protected $table      = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $allowedFields = ['id_anggota', 'id_akun', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'gender', 'nomor_telepon', 'pekerjaan'];
}
