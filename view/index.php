<?php
    require_once __DIR__."/../controller/Controller.php"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="collection">
            <div class="field">
                <h1>Pessoa</h1>
                <hr>
                <h2>cadastrar pessoa</h2>
                <p>cadastre uma nova pessoa aqui:</p>
                <form action="../controller/Controller.php" method="POST">
                    Nome: <input type="text" name="nome" placeholder="digite aqui o nome">
                    CPF: <input type="number" name="cpf" placeholder="digite aqui o CPF">
                    <input type="submit">
                </form>
                <hr>
                <h2>Todas Pessoas</h2>
                <p>Todas as pessoas cadastradas estão aqui:</p>
                <div>
                    <?php echo "<p>".listarTodasPessoas()."</p>"?>
                </div>
            </div>

            <div class="field">
                <h1>Contato</h1>
                <hr>
                <h2>Cadastrar Contato</h2>
                <p>cadastre um novo contato:</p>
                <form action="../controller/Controller.php" method="POST">
                    Descrição:
                    <input type="text" name="descricao"><br>
                    Tipo:
                    <input type="radio" name="tipo" value="email">E-mail
                    <input type="radio" name="tipo" value="numero">Número
                    ID da pessoa: <input type="number" name="idpessoa">
                    <br>
                    <p><input type="submit"></p>
                </form>
                <hr>
                <h2>Todas Pessoas</h2>
                <p>Todas as pessoas cadastradas estão aqui:</p>
                <div>
                    <?php echo "<p>".listarTodosContatos()."</p>"?>
                </div>


            </div>
        </div>
    </body>
</html>