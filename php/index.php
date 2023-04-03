<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        a {
            text-decoration: none;
            padding: 10px;
            border-style: solid;
            border-radius: 5px;
            border-color: black;
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
            <form action="validacao-login.php" method="POST">
                <input type="email" name="email" placeholder="Email" required /><br><br>
                <input type="password" name="senha" placeholder="Senha" required /><br><br>
                <input type="submit" value="Entrar" /><br><br><br>
            </form>
            <a href="cadastro.php"> Cadastrar </a><br><br>
        </section>
        <section class="image"></section>
        <div class="erro">
            <?php
            if (isset($_GET["acao"]) && $_GET["acao"] == 2) {
                echo "Usuário e senha inválido!";
            }
            ?>
        </div>
    </main>
</body>

</html>