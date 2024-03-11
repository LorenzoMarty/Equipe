<?php
$nome= $_POST["nome"];
$qtd= $_POST["qtd"];

include ("conecta.php");

$sql = "INSERT INTO produto(nome, qtd) VALUES('$nome', '$qtd')";

if(mysqli_query($conexao, $sql)){
    echo "Arquivo enviado com sucesso";
    header('Location: index.php');
}else{
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    echo "Falha ao enviar";
}