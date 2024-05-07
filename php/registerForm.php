<?php

$host = 'localhost';
$usuario = 'root'; 
$senha = '4dMinForTheD4t4B4s3'; 
$banco_de_dados = 'loginRegisterDb'; 
$conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);


if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}


$login = $_POST['logintxt'];
$senha = $_POST['senha'];
$dica = $_POST['dica'];

// Inserir os dados no banco de dado
$sql = "INSERT INTO login (login, senha, tip) VALUES ('$login', '$senha', '$dica')";

if ($conexao->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conexao->error;
}

// Fechar a conexão
$conexao->close();
?>