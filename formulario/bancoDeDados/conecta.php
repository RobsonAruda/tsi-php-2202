<?php
$dsn = 'mysql:dbname=senac;host=localhost;port=3307';
$user = 'bono';
$pass='12345678';

$bd = new PDO($dsn, $user, $pass);

var_dump($bd);