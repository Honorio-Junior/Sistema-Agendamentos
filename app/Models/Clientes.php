<?php

namespace App\Models;

use CodeIgniter\Model;

class Clientes extends Model
{
    protected $table = 'clientes';

    public function getByEmail(string $email)
    {
        $cliente = $this->where('email', $email)->first();
        if(isset($cliente)){
            return $cliente;
        }else{
            return null;
        }
    }
}
