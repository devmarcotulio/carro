<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    $_SESSION["usuario"] = array();
}

$arr = array();
$arr[] = $_POST["nome"];
$arr[] = $_POST["email"];
$arr[] = $_POST["senha"];
$cont = 0;
$parar = false;
while ($cont < sizeof($_SESSION["usuario"]) && $parar == false) {
    $arrusu = $_SESSION["usuario"];
    $usuario = $arrusu[$cont];

    if ($usuario[1] == $arr[1]) {
        $parar = true;
    } else {
        $cont++;
    }
}

if ($parar == false) {
    $_SESSION["usuario"][] = $arr;
    header("Location: index.php?acao=1");
} else {
    header("Location: cadastro.php?acao=1");
}
