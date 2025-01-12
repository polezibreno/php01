<?php
    include "conecta.php";
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $equipe_id = $_POST['equipe'];
    $usuario_id = $_POST['usuario'];

    // Certifique-se de sanitizar os dados recebidos para evitar injeção de SQL
    $nome = mysqli_real_escape_string($conexao, $nome);
    $email = mysqli_real_escape_string($conexao, $email);
    $cpf = mysqli_real_escape_string($conexao, $cpf);
    $equipe_id = intval($equipe_id); // Convertendo para inteiro
    $usuario_id = intval($usuario_id); // Convertendo para inteiro

    $sql = "INSERT INTO funcionario(nome, email, cpf, equipe_id, usuario_id)
            VALUES('$nome', '$email', '$cpf', $equipe_id, $usuario_id)";
                    
    mysqli_query($conexao, $sql);

    header('Location: listarfuncionario.php');
?>
