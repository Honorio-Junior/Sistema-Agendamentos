<?php

namespace App\Models;

use CodeIgniter\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    protected $protectFields = false;

    public function getByEmail(string $email)
    {
        $cliente = $this->where('email', $email)->first();
        if(isset($cliente)){
            return $cliente;
        }else{
            return null;
        }
    }

    public function cadastrar($data)
    {   

        $this->insert($data);

        $error = $this->db->error();

        if(empty($error['code'])){
            return true;
        }else{
            return $error;
        }
    }
}
