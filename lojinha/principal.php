<?php

session_start();
include('validalogin.php');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

<h1>Olá Administrador!</h1>
<?php

if($_SESSION['nivel'] < 3)
{ ?>
<a href="adicionar.php">Adicionar usuário.</a><br> <?php }

if($_SESSION['nivel'] == 1){ ?>
<a href="mudaracesso.php"> Mudar Tipo de Acesso</a><br>
<?php } ?>

<a href="logout.php"> Sair.</a><br><br>

   </center>
</body>
</html>