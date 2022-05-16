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
    <header>
        Cliente
    </header>

    <main>
        <div class="conteiner">
            <h1>Cadastro</h1>
            <form action="../controller/cadastarClienteController.php" method="post">
                
                <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="inputs">
                <br>
                <input type="tel" name="telefone" id="telefone" placeholder="99 9999-99999" class="inputs">
                <br>
                <input type="email" name="email" id="email" placeholder="seunome@email.com" class="inputs">

                <div>
                    <p class="sex">Sexo:</p>
                    <label>Masc</label>
                    <input type="radio" name="sexo" id="masculino" value="M">

                    <label>Fem</label>
                    <input type="radio" name="sexo" id="feminino" value="F">
                </div>
                
            
                <div class="data">
                    Data de Nascimento
                    <input type="date" name="datanasc" id="datanasc" class="inputs">
                </div>

                <input type="submit" value="Cadastrar" id="submit" class="inputs">
                
                

            </form>


        </div>



    </main>

    <footer>

    </footer>

</body>
</html>