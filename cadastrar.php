<?php 
    $nomeForm = $_POST['nome'];
    $telefoneForm = $_POST['telefone'];
    $origemForm = $_POST['origem'];
    $dataContatoForm = $_POST['data'];
    $observacaoForm = $_POST['observacao'];

    define('MYSQL_HOST' , 'localhost:3306');
    define('MYSQL_USER' , 'root');
    define('MYSQL_PASSWORD' , '');
    define('MYSQL_DB_NAME' , 'agendamento_clientes');

    //Define é uma constante de ambiente 
    try {
        $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD); //Para criar um PDO é mysql:host'(NOME_HOST no caso localhost)';dbname='(NOME_BANCO_DADOS)' , $username, $senha

    } catch (PDOException $ex) {
        echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
    }

    $sqlInserir = "INSERT INTO `clientes`(`nome`, `telefone`, `origem`, `dataContato`, `obser`) VALUES ('$nomeForm','$telefoneForm','$origemForm','$dataContatoForm','$observacaoForm')";

    $cadastrarCliente = $pdo->prepare($sqlInserir);
    if($cadastrarCliente->execute()){
        header("Location: consulta.php");
    }
?>

