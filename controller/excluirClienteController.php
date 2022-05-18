<?php

require_once '../dao/clienteDAO.php';

$telefone = $_GET['telefone'];

$clienteDAO = new clienteDAO();
$clienteDAO->excluirCliente($telefone);

//echo "<script> window.location='../view/listarAllCliente.php' </script>";

header("Location: ../view/listarAllCliente.php");

?>