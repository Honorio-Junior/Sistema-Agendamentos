<?php

namespace App\Controllers;

use App\Models\Clientes;

class Cadastro extends BaseController
{
  public function index(): string
  {
    return view('cadastro');
  }

  public function validateCadastro()
  {
    $modelClientes = model(Clientes::class);

    helper('form');
    $post = $this->request->getPost();
    $post['senha'] = password_hash($post['senha'], PASSWORD_DEFAULT);
    $result = $modelClientes->cadastrar($post);

    if($result === true){
      return view('cadastro');
    }else{
      return view('cadastro', ['error' => $result['message']]);
    }
  }
}
