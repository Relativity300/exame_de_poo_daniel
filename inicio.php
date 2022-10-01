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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="model/inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<?=require('nav.php');?>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



<h1 class="title">Categotias</h1>
<section>
                  <article>
                    <div class="div-1">
                      <a href="helado.php"><h2 class="div-h2">Helados</h2></a>
                      <a href="jugos.php"><h2 class="div-h2">Jusos</h2></a>
                    </div>
                    
                  </article>
</section>















    
     <!-- <?php
     $password = $_POST['password'];
     md5($password);
     echo "<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>".md5($password);
     ?>  -->
    
    

</body>

</html>