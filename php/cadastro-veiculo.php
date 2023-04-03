<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Veiculos</title>
</head>

<body>
    <form action="validacao-cadastro-veiculo.php" method="POST">
        <label for="marca">Digite a marca do veículo</label>
        <input type="text" name="marca" required />

        <label for="modelo">Qual o modelo do veículo</label>
        <input type="text" name="modelo" required />

        <label for="ano">Qual o ano do veículo</label>
        <input type="number" name="ano" placeholder="2020" required />

        <label for="km">Qual a quilometragem do veículo</label>
        <input type="number" name="km" required />

        <label for="cor">Qual a cor do veículo</label>
        <input type="text" name="cor" placeholder="Preto" required />

        <input type="submit" value="Cadastrar" />
    </form>
    <div>
        <?php
        if (isset($_GET["acao"]) && $_GET["acao"] == 2) {
            echo "Você ja cadastrou esse veículo!";
        }
        ?>
    </div>
</body>

</html>