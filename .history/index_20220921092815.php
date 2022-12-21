<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/alertify.core.css" rel="stylesheet" type="text/css">
    <link href="css/alertify.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/funciones.js" type="text/javascript"></script>
    <script src="js/alertify.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <title>Equipo 7</title>
</head>
<style>
    body{
        background:url(img/fondo.jpg);
        background-repeat: no-repeat;
        background-size: cover; 
    }
</style>
<body>
    <br>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success" id="Nav">
            <a class="navbar-brand" href="#">SERVICIOS DE TI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>
            <!--apartado menu-->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <a class="nav-link" href="#" id="menuInicio" style="color: white;">
                    <span class="fas fa-home"></span>Inicio</a>
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" style="color: white;">
                            <i class="fas fa-pen-alt"></i> Primer corte
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" id="menuTrabajdosEquipoC1"><i class="fas fa-book-open"></i> Trabajos en equipo </a>
                            <a class="dropdown-item" href="#" id="menuLuisC1"><i class="fas fa-bookmark"></i> Luis Antonio de Jesús López </a>
                            <a class="dropdown-item" href="#" id="menuLaloC1"><i class="fas fa-bookmark"></i> Eduardo Félix Alba </a>
                            <a class="dropdown-item" href="#" id="menuChoryC1"><i class="fas fa-bookmark"></i> David González Martínez </a>
                            <a class="dropdown-item" href="#" id="menuAlexC1"><i class="fas fa-bookmark"></i> José Alex Reyes Juaréz </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style="color: white;">
                            <i class="fas fa-pen-alt"></i>Segundo Corte
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
                            <a class="dropdown-item" href="#" id="menuTrabajdosEquipoC1"><i class="fas fa-book-open"></i> Trabajos en equipo </a>
                            <a class="dropdown-item" href="#" id="menuLuisC1"><i class="fas fa-bookmark"></i> Luis Antonio de Jesús López </a>
                            <a class="dropdown-item" href="#" id="menuLaloC1"><i class="fas fa-bookmark"></i> Eduardo Félix Alba </a>
                            <a class="dropdown-item" href="#" id="menuChoryC2"><i class="fas fa-bookmark"></i> David González Martínez </a>
                            <a class="dropdown-item" href="#" id="menuAlexC2"><i class="fas fa-bookmark"></i> José Alex Reyes Juaréz </a>
                        </div>
                    </li>
                    </li>
                        <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style="color: white;">
                            <i class="fas fa-user-graduate"></i> Tercer Corte
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
                            <a class="dropdown-item" href="#" id="menuTrabajdosEquipoC3"><i class="fas fa-book-open"></i> Trabajos en equipo </a>
                            <a class="dropdown-item" href="#" id="menuLuisC3"><i class="fas fa-bookmark"></i> Luis Antonio de Jesús López </a>
                            <a class="dropdown-item" href="#" id="menuLaloC3"><i class="fas fa-bookmark"></i> Eduardo Félix Alba </a>
                            <a class="dropdown-item" href="#" id="menuChoryC3"><i class="fas fa-bookmark"></i> David González Martínez </a>
                            <a class="dropdown-item" href="#" id="menuAlexC3"><i class="fas fa-bookmark"></i> José Alex Reyes Juaréz </a>
                        </div>
                    </li>
                    
                </ul>
            </div>
            <!--Fin Menu-->   
        </nav>
        <br>
        <div class="row" id="divInicio">
            <div class="col-12" style="text-align: center;">
                <br>
                <h1 class="animate__animated animate__backInLeft"><font color="black" size="7" >
                    <b>Bienvenido </b></font></h1>
            </div>
        </div>
        <div class="row" id="divtrabajosequipoC1" style="display: none;">
            <h1>Trabajos de primer corte del equipo</h1>
        </div>
    </div>
</body>
</html>