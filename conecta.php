<?php
// Configurações para conexão ao banco de dados
$banco = "cadastro_funcionario"; 
$usuario = "root"; 
$senha = ""; 
$servidor = "localhost"; 

// Conexão com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
?>
