<?php

session_start();

$nome = $_POST["nome"];

$_SESSION["nome"] = $nome;

header("Location: boasvindas.php");
exit();

?>
