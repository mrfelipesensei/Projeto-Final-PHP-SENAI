<?php
include '../login/validaLogin.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <?php
        echo "Usuário: ", $_SESSION['usuario']," <br>";
        echo "Perfil: ", $_SESSION['perfil']," <br>";
    ?>
    <a href="../view/cadastroCliente.php">Cadastrar Cliente</a>
    <a href="../view/listarAllCliente.php">Listar Cliente</a>
    <a href="../view/formCadastrarFunc.php">Cadastrar Funcionário</a>
    <a href="../controller/logoffController.php">Logout</a>
</body>
</html>