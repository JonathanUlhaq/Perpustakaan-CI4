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

    public function getWheres($key = "")
    {
        if ($key == "") {

            return $this->db->table('peminjaman')
                ->join('anggota', 'anggota.id_anggota=peminjaman.id_anggota')
                ->join('data_buku', 'data_buku.id_buku=peminjaman.id_buku')
                ->getWhere(['peminjaman.setatus' => 'Belum kembali'])->getResultArray();
        } else {
            return $this->db->table('peminjaman')
                ->join('anggota', 'anggota.id_anggota=peminjaman.id_anggota')
                ->join('data_buku', 'data_buku.id_buku=peminjaman.id_buku')
                ->like('peminjaman.id_peminjaman', $key)
                ->orLike('anggota.nama_lengkap', $key)
                ->orLike('peminjaman.tanggal_peminjaman', $key)
                ->getWhere(['setatus' => 'Belum kembali'])->getResultArray();
        }
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

    public function Riwayat($id = "")
    {
        if ($id == "") {
            return $this->db->table('peminjaman')
                ->join('anggota', 'anggota.id_anggota=peminjaman.id_anggota')
                ->orderBy('tanggal_peminjaman', 'DESC')->groupBy('id_peminjaman')->get()->getResultArray();
        } else {
            return $this->db->table('peminjaman')
                ->join('anggota', 'anggota.id_anggota=peminjaman.id_anggota')
                ->orderBy('tanggal_peminjaman', 'DESC')->groupBy('id_peminjaman')->like('id_peminjaman', $id)
                ->orLike('anggota.nama_lengkap', $id)
                ->orLike('tanggal_peminjaman', $id)->get()->getResultArray();
        }
    }

    public function riwayatDetail($nama, $idp)
    {
        return  $this->db->table('peminjaman')
            ->join('anggota', 'anggota.id_anggota=peminjaman.id_anggota')
            ->join('data_buku', 'data_buku.id_buku=peminjaman.id_buku')
            ->getWhere(['peminjaman.id_anggota' => $nama, 'peminjaman.id_peminjaman' => $idp])->getResultArray();
    }
}
