<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Daftar Barang | JehaShop',
            'kue' => $this->barangModel->getBarang()
        ];

        return view('barang/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Barang | JehaShop',
            'kue' => $this->barangModel->getBarang($slug)
        ];
        return view('barang/detail', $data);
    }

   
}
