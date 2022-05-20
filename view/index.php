<?php
include '../login/validaLogin.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/styleIndex.css">

    <title>Página Inicial</title>

</head>
<body>
    <div class="conteiner">
        <?php
            echo "Usuário: ", $_SESSION['usuario']," <br>";
            echo "Perfil: ", $_SESSION['perfil']," <br>";
        ?>

        <div>
            <?php
                include '../view/menu.php';
            ?>
        </div>
        
        <a href="../controller/logoffController.php">Logout</a>
    </div>
    
</body>
</html>