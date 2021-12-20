<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPinjam extends Model
{
    protected $table      = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';
    protected $allowedFields = ['id_peminjaman', 'id_buku', 'id_anggota', 'jumlah_buku', 'setatus', 'tanggal_peminjaman', 'tanggal_pengembalian'];

    public function getData()
    {
        return $this->db->table('peminjaman')
            ->join('anggota', 'anggota.id_anggota=peminjaman.id_anggota')
            ->join('data_buku', 'data_buku.id_buku=peminjaman.id_buku')
            ->get()->getResultArray();
    }

    public function getWheres()
    {
        return $this->db->table('peminjaman')
            ->join('anggota', 'anggota.id_anggota=peminjaman.id_anggota')
            ->join('data_buku', 'data_buku.id_buku=peminjaman.id_buku')
            ->getWhere(['peminjaman.setatus' => 'Belum kembali'])->getResultArray();
    }

    public function getTanggungan($nama)
    {
        return $this->db->table('peminjaman')
            ->join('anggota', 'anggota.id_anggota=peminjaman.id_anggota')
            ->join('data_buku', 'data_buku.id_buku=peminjaman.id_buku')
            ->getWhere(['peminjaman.setatus' => 'Belum kembali', 'peminjaman.id_anggota' => $nama])->getResultArray();
    }

    public function getTanggunganDetail($nama)
    {
        return  $this->db->table('peminjaman')
            ->join('anggota', 'anggota.id_anggota=peminjaman.id_anggota')
            ->join('data_buku', 'data_buku.id_buku=peminjaman.id_buku')
            ->getWhere(['peminjaman.setatus' => 'Belum kembali', 'peminjaman.id_anggota' => $nama])->getRowArray();
    }
}
