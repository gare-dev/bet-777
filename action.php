<?php
// Conectar ao banco de dados
$host = 'localhost'; // endereço do servidor MySQL
$usuario = 'root'; // usuário do banco de dados
$senha = '4dMinForTheD4t4B4s3'; // senha do banco de dados
$banco_de_dados = 'loginRegisterDb'; // nome do banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Processar os dados do formulário
$login = $_POST['logintxt'];
$senha = $_POST['senha'];
$dica = $_POST['dica'];

// Inserir os dados no banco de dados
$sql = "INSERT INTO login (login, senha, tip) VALUES ('$login', '$senha', '$dica')";

if ($conexao->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conexao->error;
}

// Fechar a conexão
$conexao->close();
?>