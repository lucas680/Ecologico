<?php

header('Content-Type: application/json');
include_once './conexao.php';
include_once './functions.php';

$bairro = $_POST['bairro'];
$rua = $_POST['rua'];

$sql = "SELECT * FROM tb_rotas WHERE bai_id = :bairro and rua_id = :rua";

$stmt = $con->prepare($sql);
$stmt->bindValue(':bairro', $bairro);
$stmt->bindParam(':rua', $rua);
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($resultado);

