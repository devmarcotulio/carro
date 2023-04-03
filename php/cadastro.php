<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .erro {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <main>
        <section class="content">
            <form action="validacao-cadastro.php" method="POST">
                <input type="text" name="nome" placeholder="Nome" required /><br><br>
                <input type="email" name="email" placeholder="Email" required /><br><br>
                <input type="password" name="senha" placeholder="Senha" required /><br><br>

                <input type="submit" value="Cadastrar" /><br><br><br>
            </form>
        </section>
        <div class="erro">
            <?php
            if (isset($_GET["acao"]) && $_GET["acao"] == 1) {
                echo "Já existe esse email cadastrado!";
            }
            ?>
        </div>

</body>

</html>