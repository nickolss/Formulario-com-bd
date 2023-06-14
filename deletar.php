<?php
require_once('conexao.php');

$id = (int)$_GET['id'];
$sqlDeletar = "DELETE FROM clientes WHERE id=$id";
$deletar = $pdo->prepare($sqlDeletar);
if($deletar->execute()){
    header("Location: consulta.php");
}
?>