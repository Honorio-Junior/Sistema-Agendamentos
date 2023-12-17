<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/login.css">
    <script defer="defer" src="src/js/login.js"></script>
    <title>Login</title>
</head>
<body>
  <p style='text-align: center; color: #CE4257; font-size: .9rem'><?php echo $error = isset($error) ? $error : '' ?></p>
	<form action="" method="POST">
		<h2>Login</h2>
		<hr class="hr">
		<label class="label-form" id="label-email" for="email">Email</label>
		<input class="input-form" id="email" name="email" type="email">
		<label class="label-form" id="label-password" for="password">Senha</label>
		<input class="input-form" id="password" name="password" type="password">
		<label id="label-checkbox"> <input type="checkbox" id="checkbox"> Lembrar-me</label>
		<input class="input-form" id="submit" type="submit" value="Entrar">
	</form>
</body>
</html>