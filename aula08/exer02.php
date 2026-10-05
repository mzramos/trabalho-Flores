<?php

$nome = $_POST["nome"];
$cidade = $_POST["cidade"];

echo "Olá, $nome!<br>";
echo "Você mora em $cidade.<br>";

if ($cidade == "Curitiba") {
    echo "Curitibano!";
}
?>
