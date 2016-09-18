<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--pasta├▒as css-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/pesta%C3%B1as.js" ></script>
   
    <title>INVENTARIO</title>
 
    <!-- CSS de Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="estilos.css">
    
  </head>
  <body>
<?php
     
      ?>
<div class="container">
<form action="GBDS/inssert.php" method="POST"> 
    Nombre: <input type="text" name="nombre" required><br> 
    Password: <input type="password" name="password" required><br> 
    <div class="form-group">
    <select class="form-control" id="sel1"name="roll" required> 
      <option value="Invitado">Invitado</option> 
       <option value="Alumno">Alumno</option> 
       <option value="Administrador">Administrador</option> 
    </select>
     </div>
    <input type="submit" value="Enviar" > 
</form> 
</div>

     <script src="bootstrap/jquery/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
  </body>
  
</html>