<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php echo $error = isset($error) ? $error : '' ?>
    <form action="" method="post">
        email
        <input type="email" name="email" id="">
        <br>
        senha
        <input type="password" name="password" id="">
        <input type="submit" value="Entrar">
    </form>
</body>
</html>