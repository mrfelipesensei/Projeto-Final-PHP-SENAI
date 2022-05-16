<?php

    class Conexao{

        
        function getConexao(){
            $banco = new mysqli("localhost","root","","ProjetoFinal");
            return $banco;
            if ($banco->connect_errno) {
                echo "Erro " + $banco->error;
            }
        }
    }














?>