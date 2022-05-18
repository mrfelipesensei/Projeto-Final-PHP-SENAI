<?php

    require_once '../dto/clienteDTO.php';
    require_once '../dao/conexao/conexao.php';

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
 

        function getAllCliente(){
            $banco = new Conexao();
            $conexao = $banco->getConexao();
            $sql = $conexao->query("select * from cliente");
            return $sql;
            if (!$sql) {
                $msg = $conexao->error;
                return $msg;
            }
        }
        

        function getClienteByTel($telefone){
            $banco = new Conexao();
            $conexao = $banco->getConexao();

            $sql = $conexao->query("Select * from cliente where telefone='$telefone'");
            $final = $sql->fetch_assoc();
            if(!$final){
                echo $conexao->error;
            } else{
                return $final;
            }
        }

        function alterarCliente(clienteDTO $clienteDTO){
            $nome= $clienteDTO->getNome();
            $telefone = $clienteDTO->getTelefone();
            $email = $clienteDTO->getEmail();
            $sexo = $clienteDTO->getSexo();
            $datanasc = $clienteDTO->getDatanasc();

            $bd = new Conexao();
            $conexao = $bd->getConexao();

            $sql = $conexao->query("update cliente set 
            nome='$nome',
            email='$email',
            sexo='$sexo',
            datanasc='$datanasc' where telefone='$telefone' ");
            if (!$sql) {
                echo $conexao->error;
            } else{
                return $sql;
            }

        }
        
        function excluirCliente($telefone){
            
            $bd = new Conexao();
            $conexao = $bd->getConexao();

            $sql = $conexao->query("delete from cliente where telefone='$telefone' ");

            if(!$sql){
                echo $conexao->error;
            } else{
                return $sql;
            }
        }
    }











?>