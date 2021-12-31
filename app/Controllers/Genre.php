<?php

namespace App\Controllers;

use App\Models\DataBuku;
use App\Models\DataGenre;

class Genre extends BaseController
{
    public function __construct()
    {
        $this->dataBuku = new DataBuku();
        $this->dataGenre = new DataGenre();
    }
    public function index()
    {
        $id = $this->request->getVar('keyword');
        $data = [
            'judul' => 'Genre',
            'aktif' => 'genre',
            'validation' => \Config\Services::validation(),
            'gener' => $this->dataGenre->getData($id)
        ];
        return view('Dashboard/genre', $data);
    }


    public function cari()
    {
        $id = $_GET['keyword'];
        $data = [
            'judul' => 'Genre',
            'aktif' => 'genre',
            'validation' => \Config\Services::validation(),
            'gener' => $this->dataGenre->getData($id)
        ];
        return view('Dashboard/genree', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'id_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul mohon diisi'
                ]
            ],
            'nama_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pengarang Buku mohon diisi'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->to('/genre')->withInput()->with('validation', $validation);
        }




        $simpan = [
            'id_genre' => $this->request->getVar('id_genre'),
            'nama_genre' => $this->request->getVar('nama_genre'),

        ];

        $this->dataGenre->insert($simpan);



        session()->setFlashdata('yes', 'Data berhasil ditambah');
        return redirect()->to(base_url() . '/genre');
    }

    public function edit($id)
    {
        $data = [
            'judul' => 'Genre / Edit Genre',
            'aktif' => 'genre',
            'buku' => $this->dataGenre->where(['id_genre' => $id])->first(),
            'validation' => \Config\Services::validation()
        ];
        return view('Dashboard/egenre', $data);
    }

    public function ubah($id)
    {
        if (!$this->validate([
            'id_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul mohon diisi'
                ]
            ],
            'nama_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pengarang Buku mohon diisi'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->to('/Genre/edit/' . $id)->withInput()->with('validation', $validation);
        }

        $simpan = [
            'id_genre' => $this->request->getVar('id_genre'),
            'nama_genre' => $this->request->getVar('nama_genre'),

        ];


        $this->dataGenre->update($id, $simpan);



        session()->setFlashdata('ubah', 'Data berhasil diupdate');
        return redirect()->to(base_url() . '/genre');
    }

    public function deletes($id)
    {
        $this->dataGenre->delete($id);

        session()->setFlashdata('hapus', 'Data berhasil dihapus');
        return redirect()->to(base_url() . '/genre');
    }
}
