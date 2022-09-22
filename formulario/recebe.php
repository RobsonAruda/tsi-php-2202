<?php

$nome = $_POST ['nomeUsuario'];
$idade = $_POST ['idadeUsuario'];
$cpf = $_POST ['cpfUsuario'];
$periodo = $_POST ['periodoUsuario'];

echo "Voce tem $nome,$idade,$cpf,$periodo ";
//$_SERVEM possui muitas variaveis de ambiente que podem ser muito importante para você em alguns 
// momentos, ex: ip do requisitamte 

$arquivo = fopen('aluno.csv', 'a'); // abra o arquivo para append
fwrite($arquivo, "$nome,$idade,$cpf,$periodo;{$SERVER['REMOTE_ADDR']}\r\n");
fclose($arquivo);

