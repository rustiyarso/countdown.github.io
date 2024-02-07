<?php

namespace App\Models;

use CodeIgniter\Model;

class Tes1Model extends Model
{
    protected $table      = 'data1'; // Nama tabel di database
    protected $primaryKey = 'id'; // Kolom kunci utama

    protected $allowedFields = ['field1', 'field2', 'field3']; // Sesuaikan dengan nama kolom pada tabel

    public function getData()
    {
        return $this->findAll(); // Mendapatkan semua data dari tabel
    }
}
