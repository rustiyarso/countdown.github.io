<?php

namespace App\Controllers;

use App\Models\Data_model;

class Data extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model'); // Memuat model
    }

    public function index()
    {
        // Mencoba menjalankan query sederhana
        $query = $this->db->query('SELECT 1');

        if ($this->db->conn_id) {
            echo 'Database terhubung dengan sukses.';
        } else {
            echo 'Gagal terhubung ke database.';
        }
    }
}
