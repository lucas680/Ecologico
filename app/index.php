<?php
include_once 'functions.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste denuncia</title>
    <style>
        .emAndamento{
            width: 25px;
            height: 25px;
            background-color: orange;
            border-radius: 50px;
        }
        
        .finalizado{
            width: 25px;
            height: 25px;
            background-color: green;
            border-radius: 50px;
        }
    </style>
</head>
<body>
    <form method="get" action="./salvarDen.php" enctype="multipart/form-data">
        <select name="tipo" id="tipo">
            <?php
                listarTipos();
            ?>
        </select><br><br>
        <input type="text" name="descricao" placeholder="descricao"><br><br>
        <input type="text" name="referencia" placeholder="referencia"><br><br>
        <input type="text" name="nome" placeholder="nome"><br><br>
        <input type="date" name="data" id="">
        <input type="text" name="telefone" placeholder="telefone"><br><br>
        <select name="bairro" id="bairro">
            <?php
                listarBairros();
            ?>
        </select><br><br>
        <select name="ruas" id="ruas">
            <?php
                listarRuas();
            ?>
        </select><br><br>
        <input type="file" name="imagem" ><br><br>
        <input name="salvar" type="submit" value="salvar">
        
    </form>
    <?php
        listarDenunciasPublic();
    ?>
</body>
</html>