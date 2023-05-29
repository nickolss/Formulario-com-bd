<?php
define('MYSQL_HOST', 'localhost:3306');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'agendamento_clientes');

//Define é uma constante de ambiente 
try {
    $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD); //Para criar um PDO é mysql:host'(NOME_HOST no caso localhost)';dbname='(NOME_BANCO_DADOS)' , $username, $senha

} catch (PDOException $ex) {
    echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
}

$id = (int)$_GET['id'];
$sqlDeletar = "DELETE FROM clientes WHERE id=$id";
$deletar = $pdo->prepare($sqlDeletar);
if($deletar->execute()){
    header("Location: consulta.php");
}
?>