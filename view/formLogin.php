<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/styleFormLogin.css">
    
    <title>Login</title>
</head>
<body>
   <div class="conteiner">
        <form action="../controller/loginController.php" method="post">
            <h2>Bem-vindo</h2>
            <input type="text" name="usuario" id="usuario" placeholder="Usuário" class="inputs">
            <br>
            <input type="password" name="senha" id="senha" placeholder="Insira sua senha" class="inputs">
            <br>
            <input type="submit" value="Login" class="submit">
        </form>
   </div>
</body>
</html>