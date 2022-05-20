<?php


$perfil = $_SESSION['perfil'];

switch ($perfil) {
    case 'Administrador':
        echo "<br> <a href='../view/cadastroCliente.php'>Cadastrar Cliente</a> <br> <br>";
        echo "<a href='../view/listarAllCliente.php'>Listar Cliente</a> <br> <br>";
        echo "<a href='../view/formCadastrarFunc.php'>Cadastrar Funcionário</a> <br> <br>";
    break;
    
    case 'Funcionario':
        echo "<br> <a href='../view/cadastroCliente.php'>Cadastrar Cliente</a> <br> <br>";
        echo "<a href='../view/listarAllCliente.php'>Listar Cliente</a> <br> <br>";  
    break;
}

?>