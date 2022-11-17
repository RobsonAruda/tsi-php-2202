<?php

//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

//Trim retira o espaço antes e depois do email/senha
$email = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

$stmt = $bd->prepare(" SELECT
                            nome, senha
                        FROM
                            usuarios
                        WHERE
                            email = :email ");
$stmt->bindParam(':email', $email);

$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_ASSOC); // O fetch serve para puxar como vetor os dados do banco de dados

$autenticou = false;

if( isset($usuario['nome']) ){//se existi o usuario 

    //comparar a senha para ver se está correta 
    
    if (password_verify( $senha,  $usuario['senha'])){
        
        session_start();
        $_SESSION['id'] = $email;
        //direciona para o menu princial
        header('Location: /tsi-php-2202-rob/menu');
        
    }


}
include 'index.php'; 