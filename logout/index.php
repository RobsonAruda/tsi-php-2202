<?php
require_once '../controleDeSessao/controle.php';

//chama o controle de sessão

//destroi a sessão 
session_destroy();

header('Location: /tsi-php-2202-rob/login/');