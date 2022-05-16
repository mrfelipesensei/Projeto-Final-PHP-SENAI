<?php

    require_once '../dto/clienteDTO.php';

    class clienteDAO{

        function cadastrarCliente(clienteDTO $clienteDTO){
            $nome = $clienteDTO->getNome();
            $telefone = $clienteDTO->getTelefone();
            $email = $clienteDTO->getEmail();
            $sexo = $clienteDTO->getSexo();
            $datanasc = $clienteDTO->getDatanasc();

            //conexão com Banco de Dados

            $banco = new mysqli("localhost","root","","ProjetoFinal");
            
            $sql = $banco->query("insert into cliente value ('$telefone','$nome','$email','$sexo','$datanasc');");

            if (!$sql) {
               $msg = $banco->error;
               echo $msg;
            }

            return $sql;




        }



    }











?>