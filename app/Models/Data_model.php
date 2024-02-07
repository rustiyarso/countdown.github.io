<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_model extends Model
{
    protected $table = 'updatedata';

    public function get_users()
    {
        return $this->findAll();
    }
}
