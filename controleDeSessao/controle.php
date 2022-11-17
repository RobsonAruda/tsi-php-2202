<?php

//Inicializamos o sitema de controle de sessão
session_start();

if(!isset($_SESSION['id'])){

    //se não estiver, é direcionado para 
    //tela de login
    header('Location: /tsi-php-2202-rob/login');

}