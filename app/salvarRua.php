<?php
    include_once 'conexao.php';
    include_once 'functions.php';

    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
   

    $stmt = cadastrarRua($rua, $bairro);

    header('location: ../denuncia.php');