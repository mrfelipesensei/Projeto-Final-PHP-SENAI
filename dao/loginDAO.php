<?php
    require_once 'conexao/conexao.php';

    class LoginDAO{

        function login($usuario,$senha){

            $bd = new Conexao();
            $conexao = $bd->getConexao();

            $sql = $conexao->query("select u.user, u.pass, p.nome from usuario u join perfil p
            on u.perfil_idperfil = p.idperfil 
            where u.user = '$usuario' and u.pass = '$senha';");

            $assoc = $sql->fetch_assoc();

            if (!$assoc) {
                echo "$conexao->error";
            } else{
                return $assoc;
            }

        }
    }


?>