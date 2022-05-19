<?php
session_start();
require_once '../dao/loginDAO.php';


//$usuario = $_POST['usuario'];
$usuario = isset($_POST['usuario'])?$_POST['usuario']: '';
$senha = $_POST['senha'];

$loginDAO = new LoginDAO();
$login = $loginDAO->login($usuario,$senha);

if (!empty($login)){
    
    $_SESSION['usuario'] = $login['user'];
    $_SESSION['perfil'] = $login['nome'];
  
    header("Location: ../view/index.php");
} else{
    echo "<script> alert('Usuário e/ou senha incorretos') 
                 window.location = '../view/formLogin.php'
    </script>";



   //echo "Não deu bom"; - Teste II

   /* Teste I
   $testeLogin = new Conexao();
   $testeLogin->getConexao();
   echo "$conexao->error";
   */

}

?>