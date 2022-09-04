<?php
    include_once 'conexao.php';
    include_once 'functions.php';

    $descricao = $_POST['descricao'];
    $referencia = $_POST['referencia'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $data = $_POST['data'];
    $nome_imagem = $_FILES['imagem']['name'];
    $status = 1;
    $perfil = 0;
    $tipo = $_POST['tipo'];
    $imagem = $_FILES['imagem']['tmp_name'];

    $status = status($nome, $telefone);

    $stmt = paramDenuncia($con, $descricao, $referencia, $nome, $telefone, $bairro, $rua, $nome_imagem, $status, $data, $perfil, $tipo);

    if($stmt->execute()){
        salvarImagem($nome_imagem, $imagem);
        header('location: ../denuncia.php');
    }else{
        echo "erro ao salvar";
    }
