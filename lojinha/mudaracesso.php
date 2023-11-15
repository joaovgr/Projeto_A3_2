<?php

include('conexao.php');
include('validalogin.php');
include('validaadmin.php');


$selec = "SELECT nome, descricao, usuario.cpf FROM usuario 
INNER JOIN login ON login.cpf = usuario.cpf INNER JOIN nivel ON nivel.id = nivel";

$query = mysqli_query($conexao, $selec);



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

<form name="mudatipo" action="mudartipo.php" method="POST">
<table border="1px">
<tr>
<td>nome</td>
<td>Tipo de acesso</td>
<td>Novo tipo de acesso</td>
<td>Alterar</td>
</tr>
<?php
while ($linha = mysqli_fetch_row($query)) {

    ?> 
<tr>
    <td><?php echo $linha[0] ?></td>
    <td><?php echo $linha[1] ?></td>   
    <td>
        <select name="nivel">
            <option value="1">Administrador</option>
            <option value="2">Gerente</option>
            <option value="3">Usuario</option>
</select>
</td> 
<td><input type="submit" name="alterar" value="Alterar">
    <input type="hidden" name="cpf" value="<?php echo $linha[2] ?>"></td>
</tr>

<?php } ?>

</table>
</form>

    </center>
</body>
</html>