<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <main>
        <section class="content">
            <form action="validacao-cadastro.php" method="POST">
                <label for="email">Digite o nome</label>
                <input type="text" name="nome" required />

                <label for="email">Digite o seu email</label>
                <input type="email" name="email" placeholder="seuemail@gmail.com" required />

                <label for="password">Digite o sua senha</label>
                <input type="password" name="senha" required />

                <input type="submit" value="Cadastrar" />
            </form>
        </section>
        <div>
            <?php
            if (isset($_GET["acao"]) && $_GET["acao"] == 1) {
                echo "Já existe esse email cadastrado!";
            }
            ?>
        </div>

</body>

</html>