<?php
require_once '../dao/clienteDAO.php';
$telefone = $_GET['telefone'];
$clienteDAO = new clienteDAO();
$cliente = $clienteDAO->getClienteByTel($telefone);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/styleCadastroCliente.css">

    <title>Cadastro</title>
</head>
<body>

    <main>
        <div class="conteiner">
            <h1>Cadastro do Cliente</h1>
            <form action="../controller/alterarClienteController.php" method="post">
                
                <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="inputs" value="<?php echo $cliente['nome'] ?>">
                <br>
                <input type="tel" name="telefone" id="telefone" placeholder="99 9999-99999" class="inputs" value="<?php echo $cliente['telefone'] ?>">
                <br>
                <input type="email" name="email" id="email" placeholder="seunome@email.com" class="inputs" value="<?php echo $cliente['email'] ?>">

                <div>
                    <p class="sex">Sexo:</p>
                    <label>Masc</label>
                    <input type="radio" name="sexo" id="masculino" value="M" <?php echo $cliente['sexo'] =='M'? 'checked':'' ?>>

                    <label>Fem</label>
                    <input type="radio" name="sexo" id="feminino" value="F" <?php echo $cliente['sexo'] =='F'? 'checked':'' ?>>
                </div>
                
            
                <div class="data">
                    Data de Nascimento
                    <input type="date" name="datanasc" id="datanasc" class="inputs" value="<?php echo $cliente['datanasc'] ?>">
                </div>

                <input type="submit" value="Cadastrar" id="submit" class="inputs">
                
                

            </form>


        </div>



    </main>

    <footer>

    </footer>

</body>
</html>