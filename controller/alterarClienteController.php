<?php
    require_once '../dto/clienteDTO.php';
    require_once '../dao/clienteDAO.php';
    
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $datanasc = date($_POST['datanasc']);

    $clienteDTO = new clienteDTO();
    $clienteDTO->setNome($nome);
    $clienteDTO->setTelefone($telefone);
    $clienteDTO->setEmail($email);
    $clienteDTO->setSexo($sexo);
    $clienteDTO->setDatanasc($datanasc);

    $clienteDAO = new clienteDAO();
    $ok = $clienteDAO->alterarCliente($clienteDTO);

    if ($ok) {
        echo "<script> alert('Alterado com sucesso') 
                        window.location = '../view/listarAllCliente.php'
        </script>";
    } else{
        echo "Não deu bom";
    }

?>