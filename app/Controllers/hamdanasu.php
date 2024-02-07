<?php

namespace App\Controllers;

use App\Models\Data_model;

class hamdanasu extends BaseController
{
    public function index()
    {
        // Membuat instance dari model
        $dataModel = new Data_model();

        // Menjalankan metode untuk mendapatkan data dari tabel 'updatedata'
        $data = $dataModel->get_users();

        // Mengecek apakah koneksi ke database berhasil
        if ($data) {
            // Menampilkan data jika koneksi berhasil
            echo "Koneksi ke database berhasil. Data dari tabel 'updatedata':<br>";
            print_r($data);
        } else {
            // Menampilkan pesan jika koneksi gagal
            echo "Gagal terkoneksi ke database.";
        }
    }
}
