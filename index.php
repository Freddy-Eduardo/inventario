<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--pastañas css-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/pesta%C3%B1as.js" ></script>

        <title>INVENTARIO</title>

        <!-- CSS de Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="estilos.css">

    </head>
    <?php
    include ("accion/seguridad.php");
    ?>

    <body>
        <!-- barra  de navegacion -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Inventario Informatico</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="pantallas/graficas.php"><span class="glyphicon glyphicon-signal"></span> Estadisticas</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-saved"></span>Opciones<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Registro inventario</a></li>
                                <li><a href="#">Solicitud de prestamos</a></li>
                                 <li><a href="#">Recepcion de prestamos </a></li>
                                 
                                <li><a href="#">Inventario</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Reporte Final</a></li>
                           
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="pantallas/controlUser.php"><span class="glyphicon glyphicon-cog"></span> Control de Usurios</a></li>
                        <li><a href="pantallas/UserConfig.php"> <span class="glyphicon glyphicon-user"></span> <?php echo  strtoupper($_SESSION['usuario']);?></a></li>
                        <li><a  href="accion/cerrar.php"> <span class="glyphicon glyphicon-off"></span> Cerar seción</a></li>
                        <date></date>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <!--contenedor de la pagina principal  -->
        <div class="contenedor">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#menu1">Operaciones</a></li>
                <li><a data-toggle="tab" href="#menu2">Crear usuario</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3 class='border'>Inicio</h3>
                    <br>


                    <h6>inicio seción: <?php echo $_SESSION['tiempo']?></h6><!--hora de inicio de secion del usuario-->
                    <!--pestaña numero 1 particion-->
                    <div id="cpestana1"> 
                        <table class="cont">
                            <tr> 
                                <td class="texto"> 
                                    <br> Bienvenido <?php echo $_SESSION['roll'];?> <br> 
                                </td> 
                            </tr> 
                        </table>
                    </div><!-- fin de  la pestaña uno-->
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3 class='border'>Operaciones</h3>
                    <br>
                    <img src="icons/1.svg" title="guarda el documento en pdf"alt="guarda el documento"alt="" class="img1">
                    <h4 id="text"> Guardar</h4>
                    <hr id="separador"/> 
                    <img src="icons/2.svg" title="imprime el documento en pdf"alt="impirmir el documento" class="img2">
                    <h4 id="text"> Imprimir</h4>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3 class='border'>Crear Usuario</h3>
                    <br>
                    <form action="GBDS/inssert.php" method="POST"> <!--////select list de roles de usuario//////---->
                        <select class="form-control" id="sel1" name="roll" required> 
                            <option value="Invitado">Invitado</option> 
                            <option value="Alumno">Alumno</option> 
                            <option value="Administrador">Administrador</option> 
                        </select>

                        <strong>  Nombre: </strong> <input type="text"  class="form-control" name="nombre" required><br> 

                        <strong>Password:</strong> <input type="password"  class="form-control" name="password" required><br> 

                        <div class="form-group">

                        </div>
                        <input type="submit" value="Enviar"  class="myButton"> 
                    </form> 
                </div>
            </div>



        </div>

        </div>
    <!--pie de pagina contenedora-->
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Desarrolladores</p>
            <li>Freddy Eduardo Chable Bolon</li>
            <li>Blanca Araceli Matias Mendez</li>
        </div>
    </footer>

    <script src="bootstrap/jquery/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>