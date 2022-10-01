<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario.</title>
    <link rel="stylesheet" href="../model/index.css">
    <link rel="stylesheet" href="../model/alerta.css">
</head>
<body>
    <h1 >Formulario de johan rojas</h1>
    <form action="../src/acceso.php"  method="post">
        <!-- <label for="">  Documento </label> -->
        <!-- <input name="usuario"  type="name" class="a"> -->
        <!-- <label for="">Apellido. </h1></label> -->
        <!-- <input name="Apellido" type="name"  class="a"> -->
        <label for="">Password</h1></label>
        <input  name="password" type="password"  class="a">
        <label  for="" class="email">Gmail</h1></label> 
        <input name="Gmail" type="email"  class="a">

        
        <!-- <label for="" class="fecha">Fecha de ncimiento.</h1></label> -->
        <!-- <input name="Fecha" type="date" max="2022-12-31" min="1800-1-1"  class="a"> -->
        
        <!-- <label for="" class="quete">Que te gusta mas.</h1></label><br><br>
        <label for="" class="rasioo">Python.</h1></label>
        <input type="radio" name="fav_language" class="rasio" ><br>
        <label for="" class="rasioo">Javascrip.</h1></label>
        <input type="radio" name="fav_language" class="rasio"><br>
        <label for="" class="rasioo">Java.</label>
        <input type="radio" name="fav_language" class="rasio"><br> -->

        
        <input type="submit" class="e"  value="enviar"  name="acceder">
        <input type="reset" class="e"><br><br><br>

        <br>
        <br>
        <br>
        <br>
        <?php
                    error_reporting(0);
                     if ($_GET['id']!= '' || $_GET['id'] != null) {
                        
                    
                    if($_GET['id'] != 10){
                        echo '';
                        
                    }

                    if($_GET['id'] == 0){
                        print '<p class="alertaaa">Usuario no encontrado</p>';
                    }
                    elseif($_GET['id'] == 1){
                        echo '<p class="alertaaa">Usuario Inactivo</p>';
                    }
                    elseif($_GET['id'] == 2){
                        echo '<p class="alertaaa">Usuario en espera</p>';
                    }
                    elseif($_GET['id'] == 3){
                        echo '<p class="alertaaa">no puede estar basio</p>';
                    }
                    
                 }
                ?>
    </form>

    <video src="ASSETS/videos/video.mp4" autoplay loop></video>
    <!-- <script src="index.js"></script> -->
</body>
</html>