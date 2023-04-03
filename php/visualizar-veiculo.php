<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
</head>

<body>
    <a href="cadastro-veiculo.php"> Cadastrar novo veiculo </a>
    <div>
        <?php
        session_start();

        $cont = count($_SESSION["marca"]);

        for ($i = 0; $i < $cont; $i++) {
            echo "Marca = " . $_SESSION["marca"][$i] . "Modelo = " . $_SESSION["modelo"][$i] . "Ano = " . $_SESSION["ano"][$i] . "KM = " . $_SESSION["km"][$i] . "Cor = " . $_SESSION["cor"][$i];
        }
        ?>
    </div>
</body>

</html>