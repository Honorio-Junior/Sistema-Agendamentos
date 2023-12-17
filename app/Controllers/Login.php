<?php

namespace App\Controllers;

use App\Models\Clientes;

class Login extends BaseController
{
    public function index(): string
    {   
        return view('login');
    }

    public function validateLogin(): string
    {   
        // pegando dados do forms
        helper('form');
        $post = $this->request->getPost();

        // criando um objeto da Model Clientes e pegando cliente por email
        $modelClientes = model(Clientes::class);
        $cliente = $modelClientes->getByEmail($post['email']);

        // verifica se cliente nao for nulo e senha for igual no db,
        // caso contrário, retorna para a view login com a messagem de erro
        if($cliente !== null and password_verify($post['password'], $cliente['senha'])){
            return view('login');
        }else{
            $data = array();
            $data['error'] = 'Login inválido, tente novamente!';
            return view('login', $data);
        }

    }
}
