<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 Tópicos</title>
</head>

<body>
    <?php
    include("conecta.php");

    $nome = $_GET["nome"];
    $qtd = $_GET["qtd"];
    $idP = $_GET["id_produto"];

    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($resultado);
    ?>
    <form action="editar.php" method="get">
        <input type="text" name="email" value="<?php echo $dados['nome']; ?>">
        <input type="text" name="senha" value="<?php echo $dados['qtd']; ?>">
        <input type="hidden" name="id_usuario" value="<?php echo $dados['id_produto']; ?>">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>