<?php
$nome = $_GET['nome'];
$qtd = $_GET['qtd'];
$idP = $_GET['id_produto'];

include("conecta.php");

$sql = "UPDATE produto SET nome = '$nome', qtd = '$qtd' WHERE id_produto= $idP";

if (mysqli_query($conexao, $sql)) {
    echo "Arquivo enviado com sucesso!";
    header('Location: index.php');
} else {
    echo "Falha ao enviar arquivo.";
}