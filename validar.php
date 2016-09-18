<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>
<?php
session_start();
if (isset($_SESSION['usuario']))
    header("location:index.php");
?>
<?php
   
	$mysqli=new mysqli("localhost","root","","inventinformatico"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
    }
      $sql="SELECT * from usuarios";
    $result=$mysqli->query($sql);
   while($row = $result->fetch_assoc()) { //usamos While para buscar en la base de datos los usuarios pra despues comprobar//
         
    
if (isset($_POST['form-username']) && isset($_POST['form-password']))
    {
    if (($_POST['form-username']== $row['Usuario'])&&($_POST['form-password']== $row['contrasena']   ) )  {
        session_start();
        $_SESSION['usuario']=$_POST['form-username'];//se guarda en una variable de sesion el nombre del usuaro que inicio sesion actualmente//
         $_SESSION['roll']=$row['rolUsuario'];//el rol del usuario lo sacamos de la base de datos//
        date_default_timezone_set('America/Mexico_City');//se controla la zona horaria dela pagina///
        $time=time();
        $actual_time=date('h:i:s:a d/m/Y',$time);//se controla el tipo de formato de dia y hora segun la documentacion php//
        $_SESSION['tiempo']=$actual_time;//se guarda en una variable de sesion para posteriormente usarla para el uisuario//
      
        header("location:index.php");
         
        }
    else

        header("location:index.php");
} 
    
   } 
    ?>
        <!-- comienso del contenido -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1> <img src="icons/invent.png" alt="" title="infentario.png" class="img-logo"><strong>INVENTARIO</strong> INFORMATICO</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>IINICIO DE SESIÓN</h3>
                            		<p>Introduzca su nombre de usuario y contraseña para iniciar sesión:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="validar.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Nombre  de Usuario..</label>
			                        	<input type="text" name="form-username" placeholder="Nombre  de Usuario.." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Contraseña..</label>
			                        	<input type="password" name="form-password" placeholder="Contraeña.." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">iniciar sesion</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>Inicia sesion con :</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="https://www.facebook.com/iscitcampeche/">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google +
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        

    </body>

</html>