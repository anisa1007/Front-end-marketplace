<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'kue';
    protected $useTimestamps = true;
    protected $allowedFields = ['gambar', 'slug', 'id', 'toko', 'nama', 'harga'];

    public function getBarang($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
