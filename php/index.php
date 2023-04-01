<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
</head>

<body>
    <main>
        <section class="content">
            <form action="validacao-login.php" method="POST">
                <label for="email">Digite o seu email</label>
                <input type="email" name="email" placeholder="seuemail@gmail.com" required />

                <label for="password">Digite o sua senha</label>
                <input type="password" name="senha" required />

                <input type="submit" value="Entrar" />
            </form>
            <a href="cadastro.php"> Cadastrar </a>
        </section>
        <section class="image"></section>
        <div>
            <?php
            if (isset($_GET["acao"]) && $_GET["acao"] == 1) {
                echo "Usuário e senha inválido!";
            }
            ?>
        </div>
    </main>
</body>

</html>