<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Admin extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }
    public function homeadmin()
    {
        $data = [
            'title' => 'Home Admin | JehaShop'
        ];
        return view('admin/homeadmin', $data);
    }

    public function editbarang()
    {
        $data = [
            'title' => 'Edit Barang | JehaShop',
            'kue' => $this->barangModel->getBarang()
        ];

        return view('admin/editbarang', $data);
    }

    public function responadmin()
    {
        $data = [
            'title' => 'Respon Admin | JehaShop'
        ];
        return view('admin/responadmin', $data);
    }

    public function tambahbarang()
    {

        $data = [
            'title' => 'Tambah Barang | JehaShop'
        ];
        return view('admin/tambahbarang', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->barangModel->save([
            'id' => $this->request->getVar('id'),
            'slug' => $slug,
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'toko' => $this->request->getVar('toko'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        
        return redirect()->to('/admin/editbarang');
    }
}
