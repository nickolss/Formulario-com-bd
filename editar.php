<?php
require_once('conexao.php');
$id = (int)$_GET['id'];
$sqlUpdate = $pdo->prepare("UPDATE clientes SET nome='$nomeForm' , telefone='$telefoneForm' , origem='$origemForm' , dataContato='$dataContatoForm' , obser='$observacaoForm' WHERE id=$id");

if($sqlUpdate->execute()){
    header("Location: consulta.php");
}
