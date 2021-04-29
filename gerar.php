<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gerar.css">


</head>
<body>

<?php

$valor = $_POST['valor'];
for($i=1; $i<=$valor; $i++){

echo"<div class='box'> rifa: $i <br> 
sua rifa foi gerada <br> 
O ganhador sera notificado 28/04/2022
</div>";

}


?>
</body>
</html>
