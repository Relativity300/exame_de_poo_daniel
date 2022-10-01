<?php
              error_reporting(0);
              session_start(); 
              
              // $password=$_POST["password"];
              // $usuario=$_POST['usuario'];
              // $Gmail=$_POST['Gmail'];
              
              // if ($password==null || $usuario=='' ||   $usuario=null ||   $usuario=='' || $Gmail==null || $Gmail=='') {
              //   echo('tienes que iniciar secion para entral aqui');
              //   die();
              // }
              
          
              
          
          ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="model/jugo.css">
</head>
<body>
<?=require('nav.php');?>


<form action="carrito.php" method="POST">


<input type="submit" value="chocolate" name="chocolate">
<input type="text" name="chocolatecantidad">

<input type="submit" value="fresa" name="fresa">
<input type="text" name="fresacantidad">



</form>

</body>
</html>