<?php
session_start();

$arrUsu = $_SESSION['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cont = 0;
$parar = false;

while ($cont < sizeof($_SESSION["usuario"]) && $parar == false) {
    $arrusu = $_SESSION["usuario"];
    $usuario = $arrusu[$cont];

    if ($usuario[1] == $email && $usuario[2] == $senha) {
        $parar = true;
    } else {
        $cont++;
    }
}

if ($parar == false) {
    $_SESSION['usuario'][] = $arr;
    header("Location: index.php?acao=2");
} else {
    header("Location: cadastro-veiculo.php");
}
