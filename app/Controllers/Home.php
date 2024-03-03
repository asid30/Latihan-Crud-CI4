<?php

namespace App\Controllers;
use App\Models\PesertaModel;

class Home extends BaseController
{
    protected $builderPeserta;
    public $PesertaModel;

    public function __construct() // All Configs, DB, and Models Required
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('peserta');
        $this->PesertaModel = new PesertaModel();
    }

    public function index(): string
    {
        $this->builder->select();
        $query = $this->builder->get();
        $data = [
            'data_peserta' => $query->getResult(),
        ];
        return view('LandingPage', $data);
    }

    public function tambahData()
    {
        return view('TambahData');
    }

    public function tambahDataSimpan()
    {
        $pesertaModel = new PesertaModel();
        $pesertaModel -> savePeserta([
            'Nama' => $this->request->getVar('Nama'),
            'Kampus' => $this->request->getVar('Kampus'),
            'Jurusan' => $this->request->getVar('Jurusan'),
            'Posisi' => $this->request->getVar('Posisi'),
        ]);

        $data = [
            'Nama' => $this->request->getVar('Nama'),
            'Kampus' => $this->request->getVar('Kampus'),
            'Jurusan' => $this->request->getVar('Jurusan'),
            'Posisi' => $this->request->getVar('Posisi'),
        ];

        return redirect()->to(base_url('/'));
    }

    public function editData()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'Nama' => $this->request->getVar('Nama'),
            'Kampus' => $this->request->getVar('Kampus'),
            'Jurusan' => $this->request->getVar('Jurusan'),
            'Posisi' => $this->request->getVar('Posisi'),
        ];
        return view('EditData', $data);
    }

    public function editDataSimpan()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'Nama' => $this->request->getVar('Nama'),
            'Kampus' => $this->request->getVar('Kampus'),
            'Jurusan' => $this->request->getVar('Jurusan'),
            'Posisi' => $this->request->getVar('Posisi'),
        ];
        return view('EditData', $data);
    }
}
