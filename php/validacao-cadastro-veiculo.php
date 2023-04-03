<?php

session_start();

if (!isset($_SESSION["marca"])) {
    $_SESSION["marca"] = array();
}

if (!isset($_SESSION["modelo"])) {
    $_SESSION["modelo"] = array();
}

if (!isset($_SESSION["ano"])) {
    $_SESSION["ano"] = array();
}

if (!isset($_SESSION["km"])) {
    $_SESSION["km"] = array();
}

if (!isset($_SESSION["cor"])) {
    $_SESSION["cor"] = array();
}

$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$ano = $_POST["ano"];
$km = $_POST["km"];
$cor = $_POST["cor"];

array_push($_SESSION["marca"], $marca);
array_push($_SESSION["modelo"], $modelo);
array_push($_SESSION["ano"], $ano);
array_push($_SESSION["km"], $km);
array_push($_SESSION["cor"], $cor);

header("Location: visualizar-veiculo.php?");
