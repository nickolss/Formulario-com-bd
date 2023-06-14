<?php 
    require_once('conexao.php');

    $sqlInserir = "INSERT INTO `clientes`(`nome`, `telefone`, `origem`, `dataContato`, `obser`) VALUES ('$nomeForm','$telefoneForm','$origemForm','$dataContatoForm','$observacaoForm')";

    $cadastrarCliente = $pdo->prepare($sqlInserir);
    if($cadastrarCliente->execute()){
        header("Location: consulta.php");
    }
?>

