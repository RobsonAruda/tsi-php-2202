<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA 058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="contaione">
    <div class="row">
        <?php
    //Mensagem de sucesso ou falha na hora 
        //de fazer o login

        if( isset($autenticou) ){
            if( !$autenticou ){
                echo '  <div class="alert alert-danger" role="alert">
                            Credenciais inválidas!
                        </div>';
            }
        }
        ?>
</div>
<form action="autenticacao.php" method="post">
usuario: 
<input name="usuario" type="text" autocomplete="off">
<br>
senha
<input name="senha" type="password" autocomplete="off">
<br>
<input name="enviar" type="submit" value="Logar">
</form>
</div>
</body>
</html>