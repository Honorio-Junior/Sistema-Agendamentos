<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/css/cadastro.css" />
    <script defer="defer" src="src/js/cadastro.js"></script>
    <title>Cadastro</title>
  </head>
  <body>
		<p style='text-align: center; color: #CE4257; font-size: .9rem'><?php echo $error = isset($error) ? $error : '' ?></p>
    <form method="POST" action="">
			<div>
				<h2>Cadastro</h2>
			</div>
      <hr />
      <label class="label-form" for="nome">Nome</label>
      <input class="input-form" name="nome" type="text" required/>

      <div class="campo-duplo">

				<div class="campo-item campo-item-1">
					<label class="label-form" for="cpf">CPF</label>
        	<input class="input-form" name="cpf" type="text" required/>
				</div>
        
				<div class="campo-item campo-item-2">
					<label class="label-form" for="nascimento">Nasc.</label>
        	<input id="inputDate" class="input-form" name="data_nascimento" type="date" required/>
				</div>
        
      </div>

      <label class="label-form" for="endereco">Endereço</label>
      <input class="input-form" name="endereco" type="text" required/>

      <label class="label-form" for="email">Email</label>
      <input class="input-form" name="email" type="email" required/>

      <label class="label-form" for="password">Senha</label>
      <input class="input-form" name="senha" type="password" required/>

      <input class="input-form" id="submit" type="submit" value="Cadastrar" />
    </form>
  </body>
</html>
