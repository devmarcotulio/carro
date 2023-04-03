<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>

    <style>
        a {
            text-decoration: none;
            padding: 10px;
            border-style: solid;
            border-radius: 5px;
            border-color: black;
        }
    </style>
</head>

<body>
    <h1>Visualizar veículos</h1>
    <br>
    <a href="cadastro-veiculo.php"> Cadastrar novo veiculo </a><br><br><br>
    <div>
        <?php
        session_start();

        $cont = count($_SESSION["marca"]);

        for ($i = 0; $i < $cont; $i++) {
            echo "Marca = " . $_SESSION["marca"][$i] . "</br> Modelo = " . $_SESSION["modelo"][$i] . "</br> Ano = " . $_SESSION["ano"][$i] . "</br> KM = " . $_SESSION["km"][$i] . "</br> Cor = " . $_SESSION["cor"][$i] . "</br> </br> ";
        }
        ?>
    </div>
</body>

</html>