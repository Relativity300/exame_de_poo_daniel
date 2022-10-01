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
    <link rel="stylesheet" href="model/carrito.css">
</head>
<body>
    
<?=require('nav.php');?>

<table class="tabla">
<?php
    $presioPiña=1500;
    $presiomango=3000;
    $presionaranga=2000;
    $presiochocolate=3000;
    $presiofresa=2500;
    
?>  
    <tr>
    <th>Cantidad</th>
    <th>Tipo</th>
    <th>Sudtotal</th>
    </tr>

    <tr>
    <td> <?php  echo $_POST['piñacantidad']; ?></td>
    <td > <?php 
    if (!$_POST['piñacantidad']=='' || !$_POST['piñacantidad']==null) {
        # code...
        echo 'piña'; 
    }
    
    ?></td>
    <td> <?php echo $_POST['piñacantidad']*$presioPiña; ?></td>
    </tr>

    <tr>
    <td> <?php echo $_POST['mangocantidad']; ?></td>
    <td> <?php 
    if (!$_POST['mangocantidad']=='' || !$_POST['mangocantidad']==null) {
        echo 'mango' ; 
      }
    ?></td>
    <td> <?php echo $_POST['mangocantidad']*$presiomango; ?></td>
    </tr>

    <tr>
    <td> <?php echo $_POST['naranjacantidad']; ?></td>
    <td> <?php  
    if(!$_POST['naranjacantidad']=='' || !$_POST['naranjacantidad']==null) {
        
        echo 'naranja'; 
      }
    ?></td>
    <td> <?php echo $_POST['naranjacantidad']*$presionaranga; ?></td>
    </tr>
    
    
    <tr>
    <td> <?php echo $_POST['chocolatecantidad'];?></td>
    <td> <?php  
    if(!$_POST['chocolatecantidad']=='' || !$_POST['chocolatecantidad']==null) {
        
        echo 'chocolate'; 
      }
    ?>
    </td>
    <td> <?php echo $_POST['chocolatecantidad']*$presiochocolate; ?></td>
    </tr>
    
    <tr>
    <td> <?php echo $_POST['fresacantidad']; ?></td>
    <td> <?php  
    if(!$_POST['fresacantidad']=='' || !$_POST['fresacantidad']==null) {
        
        echo 'fresa'; 
      }
    ?>
    </td>
    <td> <?php echo $_POST['fresacantidad']*$presiofresa; ?></td>
    </tr>
    

<tr>
    <th>total= <?php  $total= ($_POST['naranjacantidad']*$presionaranga)+ ($_POST['mangocantidad']*$presiomango) + ( $_POST['piñacantidad']*$presioPiña) + ($_POST['fresacantidad']*$presiofresa) + ( $_POST['chocolatecantidad']*$presiochocolate);  echo $total; ?></th>
</tr>
</table>

</body>
</html>


