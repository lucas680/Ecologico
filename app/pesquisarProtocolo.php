<?php
header('Content-Type: application/json');
include_once './conexao.php';
include_once './functions.php';

$pesquisa = $_POST['pesquisa'];

$sql = "SELECT den_protocolo, den_status FROM `tb_denuncias` WHERE den_protocolo LIKE :pesquisa";

$stmt = $con->prepare($sql);
$stmt->bindValue(':pesquisa', '%'.$pesquisa.'%', PDO::PARAM_STR);
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($resultado);