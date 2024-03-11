<?php

include("conecta.php");

$idp = $_GET['id_produto'];

$sql = "DELETE FROM produto WHERE id_produto=$idp";

if (mysqli_query($conexao, $sql)) {
    echo "Arquivo enviado com sucesso!";
    header('Location: index.php');
} else {
    echo "Falha ao enviar arquivo.";
}