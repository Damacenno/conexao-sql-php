<?php
$servidor = 'localhost';
$db = 'batepapo';
$user = 'root';
$pass = '';
try{
    $conn = new PDO ('mysql:host='.$servidor.';dbname='.$db , $user , $pass);
    //echo "Conectado com sucesso!";
}   catch (PDOException $e) {
    //echo 'ERROR:' . $e->getMessage();
    //echo "  Erro ao se conectar ao banco de dados.";
}

?>
