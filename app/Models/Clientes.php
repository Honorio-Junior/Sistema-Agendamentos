<?php

namespace App\Models;

use CodeIgniter\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    protected $protectFields = false;

    protected $validationRules = [
        'email' => [
            'label' => 'email',
            'rules' => 'required|is_unique[clientes.email]'
        ]
        ];

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
        return 'implementar';
    }
}
