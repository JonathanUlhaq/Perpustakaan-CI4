<?php

namespace App\Controllers;

use App\Models\DataAnggota;
use App\Models\DataBuku;
use App\Models\DataGenre;
use App\Models\DataUser;
use App\Models\DataKota;
use App\Models\DataPinjam;


class User extends BaseController
{
    public function __construct()
    {
        $this->dataBuku = new DataBuku();
        $this->dataGenre = new DataGenre();
        $this->dataUser = new DataUser();
        $this->dataKota = new DataKota();
        $this->dataAnggota = new DataAnggota();
        $this->dataPinjam = new DataPinjam();
        helper('form');
    }
    public function index()
    {
        $data = [
            'judul' => 'E-Perpustakaan',
            'buku' => $this->dataBuku->getData(),
            'validation' => \Config\Services::validation(),
            'cart' => \Config\Services::cart(),
            'setatus' => 'home',
            'nama' => $this->dataUser->where(['id' => user_id()])->first()
        ];
        return view('User/index', $data);
    }

    public function peminjaman()
    {
        $nama = $this->dataAnggota->where(['id_akun' => user_id()])->first();
        $data = [
            'judul' => 'E-Perpustakaan | Tanggungan Peminjaman Buku',
            'cart' => \Config\Services::cart(),
            'setatus' => 'tanggungan',
            'nama' => $this->dataUser->where(['id' => user_id()])->first(),
            'tanggungan' => $this->dataPinjam->getTanggungan($nama['id_anggota']),
            'detail' => $this->dataPinjam->getTanggunganDetail($nama['id_anggota'])
        ];
        return view('User/peminjaman', $data);
    }

    public function form()
    {
        $data = [
            'judul' => 'Data Diri',
            'validation' => \Config\Services::validation(),
            'kota' => $this->dataKota->findAll(),
            'nama' => $this->dataAnggota->where(['id_akun' => user_id()])->first()


        ];
        return view('User/form', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field}  mohon diisi'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mohon diisi'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mohon diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mohon diisi'
                ]
            ],

            'nomor_telepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mohon diisi'
                ]
            ],

            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mohon diisi'
                ]
            ],

        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('eror', $this->validator->listErrors());
            return redirect()->to('/forms')->withInput()->with('validation', $validation);
        }


        $seri = rand(100, 10000);
        $id = "ANG$seri";

        $simpan = [
            'id_anggota' => $id,
            'id_akun' => user_id(),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'gender' => $this->request->getVar('gender'),
            'nomor_telepon' => $this->request->getVar('nomor_telepon'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),

        ];

        $this->dataAnggota->insert($simpan);



        session()->setFlashdata('yes', 'Data berhasil ditambah');
        return redirect()->to(base_url() . '/user');
    }

    public function cek()
    {
        $cart = \Config\Services::cart();
        $response = $cart->contents();
        $data = json_encode($response);
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    public function add()
    {
        $cart = \Config\Services::cart();


        $cart->insert(array(
            'id'      => $this->request->getVar('id'),
            'qty'     => 1,
            'price'   => $this->request->getVar('price'),
            'name'    => $this->request->getVar('name'),
            'options' => array('cover' => $this->request->getVar('cover'))
        ));

        session()->setFlashdata('berhasil', 'Buku berhasil ditambahkan');
        return redirect()->to('/user');
    }

    public function clear()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();
    }

    public function cart()
    {
        $data = [
            'judul' => 'Cart Detail',
            'buku' => $this->dataBuku->getData(),
            'validation' => \Config\Services::validation(),
            'cart' => \Config\Services::cart(),
            'setatus' => '',
            'nama' => $this->dataUser->where(['id' => user_id()])->first()
        ];
        return view('User/cart', $data);
    }

    public function update()
    {
        $cart = \Config\Services::cart();
        $i = 1;
        foreach ($cart->contents() as $c) {

            $cart->update(array(
                'rowid'   => $c['rowid'],
                'qty'     => $this->request->getVar('qty' . $i++),

            ));
        }

        session()->setFlashdata('berhasil', 'Buku berhasil diupdate');
        return redirect()->to('/cart');
    }

    public function delete($id)
    {
        $cart = \Config\Services::cart();
        $cart->remove($id);

        session()->setFlashdata('berhasils', 'Buku berhasil dihapus');
        return redirect()->to('/cart');
    }

    public function checkout()
    {
        $cart = \Config\Services::cart();


        $nama = $this->dataAnggota->where(['id_akun' => user_id()])->first();
        date_default_timezone_set("Asia/Jakarta");
        foreach ($cart->contents() as $c) {
            $rand = rand(100, 10000);
            $id = "PM_$rand";
            $data2 = date("d-m-Y");
            $data = [
                'id_peminjaman' => $id,
                'id_buku' => $c['id'],
                'id_anggota' => $nama['id_anggota'],
                'setatus' => "Belum kembali",
                'tanggal_peminjaman' => date("d-m-Y"),
                'tanggal_pengembalian' => date('d-m-Y', strtotime('+1 week', strtotime($data2))),
                'jumlah_buku' => $c['qty']
            ];

            $this->dataPinjam->insert($data);
        }
        $cart->destroy();
        session()->setFlashdata('berhasilss', 'Checkout Berhasil');
        return redirect()->to('/user');
    }
}
