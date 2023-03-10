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
        <nav class="navbar navbar-expand-lg navbar-dark " id="Nav">
            <a class="navbar-brand" href="#"><font color ="White" size="3">SERVICIOS DE TI</a>
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
                            <a class="dropdown-item" href="#" id="menuLuisC1"><i class="fas fa-bookmark"></i> Luis Antonio de Jes??s L??pez </a>
                            <a class="dropdown-item" href="#" id="menuLaloC1"><i class="fas fa-bookmark"></i> Eduardo F??lix Alba </a>
                            <a class="dropdown-item" href="#" id="menuChoryC1"><i class="fas fa-bookmark"></i> David Gonz??lez Mart??nez </a>
                            <a class="dropdown-item" href="#" id="menuAlexC1"><i class="fas fa-bookmark"></i> Jos?? Alex Reyes Juar??z </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style="color: white;">
                            <i class="fas fa-pen-alt"></i>Segundo Corte
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
                            <a class="dropdown-item" href="#" id="menuTrabajdosEquipoC2"><i class="fas fa-book-open"></i> Trabajos en equipo </a>
                            <a class="dropdown-item" href="#" id="menuLuisC2"><i class="fas fa-bookmark"></i> Luis Antonio de Jes??s L??pez </a>
                            <a class="dropdown-item" href="#" id="menuLaloC2"><i class="fas fa-bookmark"></i> Eduardo F??lix Alba </a>
                            <a class="dropdown-item" href="#" id="menuChoryC2"><i class="fas fa-bookmark"></i> David Gonz??lez Mart??nez </a>
                            <a class="dropdown-item" href="#" id="menuAlexC2"><i class="fas fa-bookmark"></i> Jos?? Alex Reyes Juar??z </a>
                        </div>
                    </li>
                    </li>
                        <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style="color: white;">
                            <i class="fas fa-user-graduate"></i> Tercer Corte
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
                            <a class="dropdown-item" href="#" id="menuTrabajdosEquipoC3"><i class="fas fa-book-open"></i> Trabajos en equipo </a>
                            <a class="dropdown-item" href="#" id="menuLuisC3"><i class="fas fa-bookmark"></i> Luis Antonio de Jes??s L??pez </a>
                            <a class="dropdown-item" href="#" id="menuLaloC3"><i class="fas fa-bookmark"></i> Eduardo F??lix Alba </a>
                            <a class="dropdown-item" href="#" id="menuChoryC3"><i class="fas fa-bookmark"></i> David Gonz??lez Mart??nez </a>
                            <a class="dropdown-item" href="#" id="menuAlexC3"><i class="fas fa-bookmark"></i> Jos?? Alex Reyes Juar??z </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" style="color: white;">
                            <i class="fas fa-pen-alt"></i> Conferencias
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" id="menuConferencias"><i class="fas fa-book-open"></i> Resumenes Conferencias </a>
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
                <h1 class="animate__animated animate__backInLeft"><font color="#121116" size="6" >
                    <b>Tecnol??gico De Estudios Superiores de San Felipe del Progreso </b> <br> <br>
                    <b>Repositorio de trabajos</b> <br>
                    <b>Ing. Luis Angel Gonz??lez Flores</b> <br>
                    <b>Luis Antonio de Jes??s L??pez</b> <br>
                    <b>Eduardo F??lix Alba</b> <br> 
                    <b>David Gonz??lez Mart??nez</b> <br>
                    <b>Jose Alex Reyes Juarez</b> <br><br>
                    <b>Carrera: Ingenieria Inform??tica  </b> <br>
                    <b>Grupo: 701</b> <br> <br>
                    <b>Objetivo de la p??gina</b> <br>
                    <font color="#121116" size="4" > Dar a conocer los trabajos que se han realizado a lo largo del semestre para poder acceder a ellos 
                        con mayor fcilidad y dar un seguimiento a la materia subiendo los trabajos realizados en equipo e individuales.
                    </font>  <br> <br>
                    <b>Objetivo de la materia</b> <br>
                    <font color="#121116" size="4" > El estudiante deber?? tomar un rol activo en cada tema de aprendizaje que le permitan 
                        desarrollar capacidades tanto espec??ficas como gen??ricas a trav??s de actividades de investigaci??n principalmente documental
                        y donde sea posible de campo, que lo conduzcan a un an??lisis, argumentaci??n, evaluaci??n, valoraci??n, integraci??n e  
                        interpretaci??n de informaci??n que lo lleven a comprender la importancia de gestionar y alinear estrat??gicamente los 
                        servicios de TI que generen valor agregado a los procesos, productos y servicios de una organizaci??n. </font>  <br> <br>
                    <b>Conclusiones</b> <br> <br>                   
                </font></h1> 
            </div>
        </div>
        <div class="row" id="divtrabajosequipoC1" style="display: none;">
            <h1><font color="#121116" size="6" ><b>Objetivo de la unidad</b></font><br>
                <font color="#121116" size="4" >Identifica la estructura de la organizaci??n y el impacto de las tecnolog??as de informaci??n en sus procesos de negocio.
                </font></h1>
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3 text-align: center;"><font color="black" size="6">Trabajos en equipo del primer corte </font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators3" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" href="trabajos_equipo/Casos_de_estudio.pdf"  width="900" height="8000" alt="500%x180" src="img/casos.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Casos de estudio</h4>
                                                        <p class="card-text" style="color:black;">En este trabajo se sacaron 10 ideas de dos casos de estudio para poder realizar la actividad.</p>
                                                        <a href="trabajos_equipo/Casos_de_estudio.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/glosario.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Glosario</h4>
                                                        <p class="card-text" style="color:black;">Glosario de 15 palabras, donde en este mismo documento encontraremos la mision, vision y objetivos del TESSFP.</p>
                                                        <a href="trabajos_equipo/Glosario.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/cuadro_com.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Cuadro Comparativo</h4>
                                                        <p class="card-text" style="color:black;">Se realizo un cuadro comparativo para poder ver las diferiencias de los sistemas vistos en clase, esto se hizo para poder conocerlos mejor, como pueden ayudar y perjudicar.</p>
                                                        <a href="trabajos_equipo/Cuadro_comparativo.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/caso_practico.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Caso Pr??ctico</h4>
                                                        <p class="card-text" style="color:black;">Hicimos el caso practico en la ferreteria fama, con todo el conocimiento que tuvimos durante el primer corte.</p>
                                                        <a href="trabajos_equipo/caso practico.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosLuisC1" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3"><font color="black" size="6">Trabajos individuales de Luis Antonio de Jesus Lopez </font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" href="" alt="100%x280" src="img/fotos_luis/alineacion.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Alineacion de los objetivos de las tecnologias</h4>
                                                        <p class="card-text" style="color:black;">Estrategia del servicio que define directrices para el dise??o, desarrollo e implementaci??n de la gestion del servicio  como un recurso estrategico (ITIL).</p>
                                                        <a href="trabajos_indi/individual_luis/1.4 alineaci??n de los objetivos de las tecnolog??as en la informaci??n.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_luis/bpm.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Fundamentos de gestion de negocios</h4>
                                                        <p class="card-text" style="color:black;">Su objetivo es mejorar el desempe??o de la organizaci??n a trav??s de la gesti??n de los procesos de negocio.</p>
                                                        <a href="trabajos_indi/individual_luis/Fundamentos de gesti??n de negocios (BPM).pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_luis/mapa.jpg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Mapa Conceptual</h4>
                                                        <p class="card-text" style="color:black;">Se trata sobre los modelos de negocio que implementas las empresas as?? como sus sistemas de informaci??n y sus tecnolog??as actuales y como influye en sus ventas, clientes, control de inventario etc.</p>
                                                        <a href="trabajos_indi/individual_luis/mapa conceptual.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_luis/video.jpg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Reportes de videos</h4>
                                                        <p class="card-text" style="color:black;">Se da a conocer sobre las TICS, que son, para que sirven, de que se componen de los cuales pueden ser el software, el hardware y el internet, as?? como la descripci??n de los tipos de software, la clasificaci??n del hardware y unos conceptos acerca de que es el internet y a web.</p>
                                                        <a href="trabajos_indi/individual_luis/reporte de videos.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img/fotos_luis/vs.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Compra tradicional vs e-commerce</h4>
                                                    <p class="card-text" style="color:black;">Comparaci??n del antes y el despu??s de la implementan de las TICS en empresas en como era antes su gestion con el ahora.</p>
                                                    <a href="trabajos_indi/individual_luis/Compra tradicional vs e-commerce.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img/fotos_luis/ti.png">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Evaluacion de los servicios de TI</h4>
                                                    <p class="card-text" style="color:black;">Consiste en los m??todos y t??cnicas para evaluar los sistemas de Ti ya se a a nivel personal o empresarial y como hacerlo.</p>
                                                    <a href="trabajos_indi/individual_luis/Apunte 1.5 Evaluacion de los servicios de TI" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosLaloC1" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3"><font color="black" size="6">Trabajos individuales de Eduardo Felix Alba </font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators4" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_eddy/mapa.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Tecnologias de la informacion</h4>
                                                        <p class="card-text" style="color:black;">las tecnolog??as de la informaci??n son t??cnicas m??todos y procesos que se usan para la producci??n de bienes o servicios o en el logro de objetivos, como la investigaci??n cient??fica enfocado a los modelos de negocios.</p>
                                                        <a href="trabajos_indi/individual_eddy/Tecnolog??as de la Informaci??n.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_eddy/vs.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Compra tradicional vs e-commerce</h4>
                                                        <p class="card-text" style="color:black;">la innovaci??n del uso de las tecnolog??as nos permite avanzar creando o innovando servicios de comunicaci??n o de captura de informaci??n para hacer m??s f??cil la comunicaci??n.</p>
                                                        <a href="trabajos_indi/individual_eddy/Actividad.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_eddy/fundamentos.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Fundamentos de gesti??n de negocios</h4>
                                                        <p class="card-text" style="color:black;">se le llama as?? por el proceso de negocio que se enfoca a mejorar el desempe??o eficacia y eficiencia de la organizaci??n a trav??s de la gesti??n de proceso de negocio</p>
                                                        <a href="trabajos_indi/individual_eddy/Fundamentos de gesti??n de negocios.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_eddy/ti.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Evaluaci??n de los Servidores de TI</h4>
                                                        <p class="card-text" style="color:black;">en esta evaluaci??n puede enfocarse en 2 puntos: los personales y empresarial donde ambos llevan una serie de paso para llegar a un objetivo especifico para una evaluaci??n de las necesidades de TI.</p>
                                                        <a href="trabajos_indi/individual_eddy/Evaluaci??n de los Servidores de TI.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/fotos_eddy/alineacion.png">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Alineaci??n de los servicios de tecnolog??as</h4>
                                                    <p class="card-text" style="color:black;">hace referencia a las estrategias, objetivos y puntos para determinar oportunidades de crecimiento as?? como desarrollar planes que garanticen el procedimiento a las competencias futuras.</p>
                                                    <a href="trabajos_indi/individual_eddy/Alineaci??n de los servicios de tecnolog??as.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/fotos_eddy/reportes.png">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Reportes de lectura</h4>
                                                    <p class="card-text" style="color:black;">el contenido y resumen de los videos nos da un enfoque explicito de los conocimientos b??sicos que debemos de saber acerca de la malater??a dado que en ambos nos menciona el enfoque que se le da al sector empresaria.</p>
                                                    <a href="trabajos_indi/individual_eddy/reportes.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosChoryC1" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3"><font color="black" size="6">Trabajos individuales de David Gonzalez Martinez </font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators5" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators5" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" href="trabajos_equipo/Casos_de_estudio.pdf" alt="100%x280" src="img/fotos_dav/1.4 alineacion.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Alineacion de los objetos de las tecnologias de la informacion</h4>
                                                        <p class="card-text" style="color:black;">El  resumen que se realizo donde encontramos las fases del Ti, y mas esecificaciones del mismo.</p>
                                                        <a href="trabajos_indi/individual_dav/1.4 alineaci??n de los objetivos de las tecnolog??as en la informaci??n.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_dav/compras.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Compra tradicional vs e-commerce</h4>
                                                        <p class="card-text" style="color:black;">Se esta mostrando un antes y un despues de los negocios usando los TI.</p>
                                                        <a href="trabajos_indi/individual_dav/Compra tradicional vs e-commerce.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_dav/BPM.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Fundamentos de gesti??n de negocios (BPM)</h4>
                                                        <p class="card-text" style="color:black;">Se da los fundamentos de los negocios del BPM dado que en esta investigacion se abarca este tema.</p>
                                                        <a href="trabajos_indi/individual_dav/Fundamentos de gesti??n de negocios (BPM).pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_dav/mapa_con.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Mapa conceptual</h4>
                                                        <p class="card-text" style="color:black;">Se nos da la introduccion al tema de las tecnologias de la informacion (TI).</p>
                                                        <a href="trabajos_indi/individual_dav/mapa conceptual.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img/fotos_dav/reportes_vid.png">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Reportes de los videos</h4>
                                                    <p class="card-text" style="color:black;">Descripcion.</p>
                                                    <a href="trabajos_indi/individual_dav/Reportes de videos.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img/fotos_dav/evaluacion.png">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Evaluacion de los servicios</h4>
                                                    <p class="card-text" style="color:black;">En este tema se vio lo que se tendria que evaluar en las empresas a la cual ivamos a evaluar.</p>
                                                    <a href="trabajos_indi/individual_dav/evaluacion de los servicios.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosAlexC1" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3"><font color="black" size="6">Trabajos individuales de Jose Alex Reyes Juarez </font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators6" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators6" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_alex/vs.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Comparacion</h4>
                                                        <p class="card-text" style="color:black;">Comaparamos como eran las cosas tecnologicas antes y despues de la herramientas TI. En particular el cambio del radio y el banco.</p>
                                                        <a href="trabajos_indi/individual_alex/comparacion.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_alex/informacion.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">tecnologias de informacion.pdf</h4>
                                                        <p class="card-text" style="color:black;">Trabajamos con un cuadro en el cual describimos todas las herramientas para la obtenci??n de informaci??n escribiendo as?? componentes f??sicos y digitales..</p>
                                                        <a href="trabajos_indi/individual_alex/tecnologias de informacion.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_alex/ti.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">evaluacion de las ti</h4>
                                                        <p class="card-text" style="color:black;">En este peque??o diagrama hablamos de todas las funciones que nosotros necesitamos como usuarios de las herramientas ti y que hacer para evaluar las necesidades..</p>
                                                        <a href="trabajos_indi/individual_alex/evaluacion de las ti.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_alex/fundamentos.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Fundamentos de gestion</h4>
                                                        <p class="card-text" style="color:black;">Describimos la definici??n de fundamentos de gesti??n de procesos de negocio adem??s hablamos de los ejemplos y todos los procesos que se tienen que llevar a cabo para la gesti??n de un negocio correcto.</p>
                                                        <a href="trabajos_indi/individual_alex/Fundamentos de gestion.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                        </div>
                                    </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_alex/alineacion.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">alineacion de los servidores.pdf</h4>
                                                        <p class="card-text" style="color:black;">Resumen hecho con la finalidad de saber cu??les son los objetivos de implementar las herramientas de TI.</p>
                                                        <a href="trabajos_indi/individual_alex/Fundamentos de gestion.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosequipoC2" style="display: none;">
            <h1><font color="#121116" size="6" ><b>Objetivo de la unidad</b></font><br>
                <font color="#121116" size="4" >Conocer y comprender la funcion de las TI vigentes para una competividad empresarial para
                    una competiviad empresarial, anuado a esto conocer el marco de gobierno dentro de una empresa.
                </font></h1>
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3 text-align: center;"><font color="black" size="6">Trabajos en equipo del segundo corte </font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators10" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators10" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators10" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/Linea del tiempo.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Linea del Tiempo</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Evoluci??n de la infraestructur de la TI considerando las microcomputadoras,
                                                        las computadoras en general, la era cliente/servidor y computacion empresarial adem??s de la computaci??n en la nube</p>
                                                        <a href="trabajos_equipo/corte_dos/Linea del tiempo.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/computacion en la nube.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;"> Caso de estudio - Es el momento de la computaci??n en la nube</h4>
                                                        <p align="justify" class="card-text" style="color:black;">En este trabajo se sacaron 10 ideas de dos casos de estudio para poder realizar la actividad.</p>
                                                        <a href="trabajos_equipo/corte_dos/ES EL MOMENTO DE LA COMPUTACION EN LA NUBE.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/las computadoras usables.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Caso de estudio - Las computadoras usables van a trabajar</h4>
                                                        <p align="justify" class="card-text" style="color:black;">La computaci??n usable est?? popularizarse prometiendo cambiando la forma de nuestro diario 
                                                        comportamiento y la manera de hacer nuestro trabajo.</p>
                                                        <a href="trabajos_equipo/corte_dos/LAS COMPUTADORAS USABLES VANA ATRABAJAR.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/Competencia con la ayuda de la tecnolog??a de la informaci??n.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Competencia con la ayuda de la tecnolog??a de la informaci??n</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Estas pueden estar combinadas en la que compiten los negocios los sistemas de 
                                                        informaci??n para proporcionar el apoyo efectivo de las estrategias de una empresa</p>
                                                        <a href="trabajos_equipo/corte_dos/Competencia con la ayuda de la tecnolog??a de la informaci??n.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/Impulso de la Gesti??n de flotillas de ARI.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;"> Impulso de la Gesti??n de flotillas de ARI</h4>
                                                        <p align="justify" class="card-text" style="color:black;">se observa que cada uno de los escalones  que ARI sub??a se deb??a a que identificaba las fallas en la estructura 
                                                        para los clientes y en el negocios para crear estrategias que beneficiaran su crecimiento</p>
                                                        <a href="trabajos_equipo/corte_dos/ES EL MOMENTO DE LA COMPUTACION EN LA NUBE.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/Inteligencia de negocios centralizada en el trabajo.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Inteligencia de negocios centralizada en el trabajo</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Nos da a entender como influyen en gran medida en los negocios para el mejoramiento de 
                                                        su infraestructura y mejorar su administraci??n y desarrollo de actividades..</p>
                                                        <a href="trabajos_equipo/corte_dos/Inteligencia de negocios centralizada en el trabajo.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosLuisC2" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3"><font color="black" size="6">Trabajos individuales de Luis Antonio de Jesus Lopez 2do Corte</font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators11" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators11" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators11" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" href="" alt="100%x280" src="img/2do_corte/Individual/Luis/Reportes videos Luis.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Reportes de videos</h4>
                                                        <p align = "justify" class="card-text" style="color:black;">Reportes de Introducci??n a Infraestructura de TI y INFRAESTRUCTURA TI EN LA EMPRESA en donde
                                                    nos hablan sobe las infraestructuras de las TI en las empresas que son servicios que proporcionan un conjunto de dispositivos f??sicos y de 
                                                    aplicaciones de software que son requeridos para operar en una empresa.</p>
                                                        <a href="trabajos_indi/individual_luis/2doCorte/Reportes de videos.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Luis/Apunte 1 Luis.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Apunte Tecnol??gias de la informaci??n y estrategias empresariales</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Impulsores y estandares que establecen la compatibilidad de los productos y 
                                                        la habilidad de comunicaciones en la bd</p>
                                                        <a href="trabajos_indi/individual_luis/2doCorte/Apunte Tecnol??gias de la informaci??n y estrategias empresariales.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Luis/Apunte 2 Luis.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Apunte Aplicaciones empresariales de sw</h4>
                                                        <p align="justify" class="card-text" style="color:black;">SAP y Middleware que son software empresariales responsables de organizar y administrar la 
                                                    informaci??n de la empresa.</p>
                                                        <a href="trabajos_indi/individual_luis/2doCorte/Apunte Aplicaciones empresariales de sw.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Luis/Apunte 3 Luis.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Apunte Apoyo a la toma de desiciones en los negocios</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Los S.I. de apoyo proporcionan apoyo de informaci??n interactiva a administradores
                                                        y profesionales de negocios durante el proceso.</p>
                                                        <a href="trabajos_indi/individual_luis/2doCorte/" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Luis/CISC y RISC Luis.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">CISC y RISC</h4>
                                                    <p align="justify" class="card-text" style="color:black;">CISC: Son micropocesadores que tienen un amplio conjunto de intruccines que amplian 
                                                    operaciones mas complejas</p>
                                                    <p align="justify" class="card-text" style="color:black;">RISC: Procesadores dise??ados para ejecta un numero de instrucciones reducidas.</p>
                                                    <a href="trabajos_indi/individual_luis/2doCorte/CISC y RISC.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Luis/Gobierno TI.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Gobierno TI</h4>
                                                    <p align="justify" class="card-text" style="color:black;">Sistema por el cual se rige y se controla la utilizaci??n de las TI actuales y futuras y
                                                supone la direccion y la evolucion de los planes que utilizan las TI</p>
                                                    <a href="trabajos_indi/individual_luis/2doCorte/Gobierno de TI.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosLaloC2" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3"><font color="black" size="6">Trabajos individuales de Eduardo Felix Alba </font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators12" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators12" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators12" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Eduardo/INTORDUCCION A INFRESTRUCTURA DE TI.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">INTRODUCCION A INFRESTRUCTURA DE TI</h4>
                                                        <p class="card-text" style="color:black;">Las tecnolog??as de la informaci??n son t??cnicas m??todos y procesos que se usan para 
                                                        la producci??n de bienes o servicios o en el logro de objetivos, como la investigaci??n cient??fica enfocado a los modelos de negocios.</p>
                                                        <a href="trabajos_indi/individual_eddy/2doCorte/INTORDUCCION A INFRESTRUCTURA DE TI.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Eduardo/INFRESTRUCTURA DE TI EN LA EMPRESA.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">INFRESTRUCTURA DE TI EN LA EMPRESA</h4>
                                                        <p class="card-text" style="color:black;">La evoluci??n de la estructura de TI a trav??s de las etapas hasta llegar su 
                                                        proceso industrial hasta aplicaciones m??viles que hoy en d??a se usan</p>
                                                        <a href="trabajos_indi/individual_eddy/2doCorte/" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Eduardo/Apoyo a la toma de decisiones en los negocios_Eduardo F??lix Alba.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Apoyo a la toma de decisiones en los negocios</h4>
                                                        <p class="card-text" style="color:black;">Los sistemas de apoyo a la toma de decisiones son sistemas de informaci??n basados en la 
                                                        computadora que proporcionan combinaci??n de pr??cticas, capacidades y tecnolog??as usadas por las compa????as</p>
                                                        <a href="trabajos_indi/individual_eddy/2doCorte/Apoyo a la toma de decisiones en los negocios_Eduardo F??lix Alba.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Eduardo/Gobierno de las TI_Eduardo F??lix Alba.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Gobierno TI</h4>
                                                        <p class="card-text" style="color:black;">El Gobierno de TI es una responsabilidad del m??s alto nivel directivo 
                                                        y se encuentra en lo m??s alto de las operaciones de TI y la gesti??n de TI.</p>
                                                        <a href="trabajos_indi/individual_eddy/2doCorte/Gobierno de las TI_Eduardo F??lix Alba.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Eduardo/Infraestructura de TI y tecnolog??as emergentes_Eduardo F??lix Alba.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Infraestructura de TI y tecnolog??as emergentes</h4>
                                                    <p class="card-text" style="color:black;">Podemos saber que la infraestructura de TI  son el conjunto de dispositivos f??sicos y aplicaciones 
                                                    de software que son necesarios para que opere una empresa</p>
                                                    <a href="trabajos_indi/individual_eddy/2doCorte/Infraestructura de TI y tecnolog??as emergentes_Eduardo F??lix Alba.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosChoryC2" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3"><font color="black" size="6">Trabajos individuales de David Gonzalez Martinez 2do Corte</font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators13" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators13" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators13" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/David/2.3 fundamentos de inteligencia de negocio.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">2.3 fundamentos de inteligencia de negocio</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Aqui podras encontrar infortmacion del tema donde claro se puede encontrar las calidades 
                                                        de informacion, su estructura y lo que son los sistemas de apoyo, asi poder entender este tema.</p>
                                                        <a href="trabajos_indi/individual_dav/2doCorte/2.3 fundamentos de inteligencia de negocio.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/David/Arquitectura CISC Y RISC.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Arquitectura CISC Y RISC</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Aqui podemos ver como es que funciona el gobierno Ti, gracias a la investigacion 
                                                        que se realizo, vemos como puede ayudar a las empresas su infrestructura del gobierno de ti</p>
                                                        <a href="trabajos_indi/individual_dav/2doCorte/Arquitectura CISC Y RISC.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/David/Gobierno TI.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Gobierno TI</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Se da los fundamentos de los negocios del BPM dado que en esta investigacion se abarca este tema.</p>
                                                        <a href="trabajos_indi/individual_dav/2doCorte/Gobierno TI.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/David/Infraestructura de TI y tecnologias emergentes.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Infraestructura de TI y tecnologias emergentes</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Se nos da la introduccion al tema de las tecnologias de la informacion (TI).</p>
                                                        <a href="trabajos_indi/individual_dav/2doCorte/Infraestructura de TI y tecnologias emergentes.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/David/Captura de pantalla 2022-10-26 090426.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Reporte de Lectura Infraestructura TI en la empresa</h4>
                                                        <p align="justify" class="card-text" style="color:black;">En este reporte de la infrestructura Ti podemos encontrar ideas principales sobre como funciona y como ayuda a
                                                         las empresas asi como sus elementos y comentarios sobre nosotros sobre que realmente entendimos.</p>
                                                        <a href="trabajos_indi/individual_dav/2doCorte/Reporte de Lectura Infraestructura TI en la empresa.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/David/introduccion.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Reporte de Lectura Introducci??n a Infraestructura de TI</h4>
                                                        <p align="justify" class="card-text" style="color:black;">nos demuestra lo que hace un administrador de datos as?? como herramientas, 
                                                        componentes para diferentes arias de una red LAN</p>
                                                        <a href="trabajos_indi/individual_dav/2doCorte/Reporte de Lectura Introducci??n a Infraestructura de TI.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosAlexC2" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mb-3" style="text-align:center;"><font color="black" size="6">Trabajos individuales de Jose Alex Reyes Juarez 2do corte</font></h3>
                        </div>
                        
                        <div class="col-12">
                            <div id="carouselExampleIndicators14" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Alex/Comprensi??n de la funci??n de tecnolog??as de la investigaci??n.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Comprensi??n de la funci??n de tecnolog??as de la investigaci??n</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Conocer las estrategias para la implementaci??n de tecnolog??as 
                                                                en los negocios y tener en cuenta su evaluaci??n y evoluci??n del negocio.</p>
                                                        <a href="trabajos_indi/individual_alex/2doCorte/Comprensi??n de la funci??n de tecnolog??as de la investigaci??n.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Alex/Funciones de administraci??n de datos alex2.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Funciones de administraci??n de datos, extracci??n, relaci??n, integraci??n y recopilaci??n de datos.</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Se cuestiona la forma de tomar decisiones en cuanto al desarrollo de los negocios adem??s de la implementaci??n
                                                                            de la tecnolog??a para su mejora en ventas, desarrollo, etc.</p>
                                                        <a href="trabajos_indi/individual_alex/2doCorte/Funciones de administraci??n de datos, extracci??n, relaci??n, integraci??n y recopilaci??n de datos..pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Alex/Gobierno de las TI.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Gobierno de las TI</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Documento en el que se habla del gobierno de de las TI el 
                                                        cual se encarga de liderar todos los procesos de implementaci??n de tecnolog??a en los negocios.</p>
                                                        <a href="trabajos_indi/individual_alex/2doCorte/Gobierno de las TI.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/David/Infraestructura de TI y tecnologias emergentes.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Formato de reporte de lectura INFRAESTRUCTURA TI EN LA EMPRESA</h4>
                                                        <p align="justify" class="card-text" style="color:black;">la infraestrucutura nos habla del desarrollo de la estrucutura de neogcio de una empresa en una lectura</p>
                                                        <a href="trabajos_indi/individual_dav/2doCorte/Formato de reporte de lectura INFRAESTRUCTURA TI EN LA EMPRESA.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/David/Infraestructura de TI y tecnologias emergentes.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Formato de reporte de lectura Introducci??n a Infraestructura de TI.</h4>
                                                        <p align="justify" class="card-text" style="color:black;">En la lectura hablamos de como se implementa la tecnologia en los negocios y la estrucutura de ellos.</p>
                                                        <a href="trabajos_indi/individual_dav/2doCorte/Formato de reporte de lectura Introducci??n a Infraestructura de TI.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divConferencias" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mb-3" style="text-align:center;"><font color="black" size="6">Conferencias</font></h3>
                        </div>
                        
                        <div class="col-12">
                            
                        <iframe src="conferencias/Conferencia 1.pdf" style="width:215%; height:700px;" frameborder="0" ></iframe>
                            
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosequipoC3" style="display: none;">
            <h1><font color="#121116" size="6" ><b>Objetivo de la unidad</b></font><br>
                <font color="#121116" size="4" >Conocer y comprender la funcion de las TI vigentes para una competividad empresarial para
                    una competiviad empresarial, anuado a esto conocer el marco de gobierno dentro de una empresa.
                </font></h1>
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3 text-align: center;"><font color="black" size="6">Trabajos en equipo del tercer corte </font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators10" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators10" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators10" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/Linea del tiempo.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Linea del Tiempo</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Evoluci??n de la infraestructur de la TI considerando las microcomputadoras,
                                                        las computadoras en general, la era cliente/servidor y computacion empresarial adem??s de la computaci??n en la nube</p>
                                                        <a href="trabajos_equipo/corte_dos/Linea del tiempo.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/computacion en la nube.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;"> Caso de estudio - Es el momento de la computaci??n en la nube</h4>
                                                        <p align="justify" class="card-text" style="color:black;">En este trabajo se sacaron 10 ideas de dos casos de estudio para poder realizar la actividad.</p>
                                                        <a href="trabajos_equipo/corte_dos/ES EL MOMENTO DE LA COMPUTACION EN LA NUBE.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/las computadoras usables.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Caso de estudio - Las computadoras usables van a trabajar</h4>
                                                        <p align="justify" class="card-text" style="color:black;">La computaci??n usable est?? popularizarse prometiendo cambiando la forma de nuestro diario 
                                                        comportamiento y la manera de hacer nuestro trabajo.</p>
                                                        <a href="trabajos_equipo/corte_dos/LAS COMPUTADORAS USABLES VANA ATRABAJAR.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/Competencia con la ayuda de la tecnolog??a de la informaci??n.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Competencia con la ayuda de la tecnolog??a de la informaci??n</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Estas pueden estar combinadas en la que compiten los negocios los sistemas de 
                                                        informaci??n para proporcionar el apoyo efectivo de las estrategias de una empresa</p>
                                                        <a href="trabajos_equipo/corte_dos/Competencia con la ayuda de la tecnolog??a de la informaci??n.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/Impulso de la Gesti??n de flotillas de ARI.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;"> Impulso de la Gesti??n de flotillas de ARI</h4>
                                                        <p align="justify" class="card-text" style="color:black;">se observa que cada uno de los escalones  que ARI sub??a se deb??a a que identificaba las fallas en la estructura 
                                                        para los clientes y en el negocios para crear estrategias que beneficiaran su crecimiento</p>
                                                        <a href="trabajos_equipo/corte_dos/ES EL MOMENTO DE LA COMPUTACION EN LA NUBE.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Equipo/Inteligencia de negocios centralizada en el trabajo.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Inteligencia de negocios centralizada en el trabajo</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Nos da a entender como influyen en gran medida en los negocios para el mejoramiento de 
                                                        su infraestructura y mejorar su administraci??n y desarrollo de actividades..</p>
                                                        <a href="trabajos_equipo/corte_dos/Inteligencia de negocios centralizada en el trabajo.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosLuisC3" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3"><font color="black" size="6">Trabajos individuales de Luis Antonio de Jesus Lopez 3er Corte</font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators11" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators11" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators11" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" href="" alt="100%x280" src="img/2do_corte/Individual/Luis/Reportes videos Luis.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Reportes de videos</h4>
                                                        <p align = "justify" class="card-text" style="color:black;">Reportes de Introducci??n a Infraestructura de TI y INFRAESTRUCTURA TI EN LA EMPRESA en donde
                                                    nos hablan sobe las infraestructuras de las TI en las empresas que son servicios que proporcionan un conjunto de dispositivos f??sicos y de 
                                                    aplicaciones de software que son requeridos para operar en una empresa.</p>
                                                        <a href="trabajos_indi/individual_luis/2doCorte/Reportes de videos.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Luis/Apunte 1 Luis.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Apunte Tecnol??gias de la informaci??n y estrategias empresariales</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Impulsores y estandares que establecen la compatibilidad de los productos y 
                                                        la habilidad de comunicaciones en la bd</p>
                                                        <a href="trabajos_indi/individual_luis/2doCorte/Apunte Tecnol??gias de la informaci??n y estrategias empresariales.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Luis/Apunte 2 Luis.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Apunte Aplicaciones empresariales de sw</h4>
                                                        <p align="justify" class="card-text" style="color:black;">SAP y Middleware que son software empresariales responsables de organizar y administrar la 
                                                    informaci??n de la empresa.</p>
                                                        <a href="trabajos_indi/individual_luis/2doCorte/Apunte Aplicaciones empresariales de sw.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Luis/Apunte 3 Luis.jpeg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Apunte Apoyo a la toma de desiciones en los negocios</h4>
                                                        <p align="justify" class="card-text" style="color:black;">Los S.I. de apoyo proporcionan apoyo de informaci??n interactiva a administradores
                                                        y profesionales de negocios durante el proceso.</p>
                                                        <a href="trabajos_indi/individual_luis/2doCorte/" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Luis/CISC y RISC Luis.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">CISC y RISC</h4>
                                                    <p align="justify" class="card-text" style="color:black;">CISC: Son micropocesadores que tienen un amplio conjunto de intruccines que amplian 
                                                    operaciones mas complejas</p>
                                                    <p align="justify" class="card-text" style="color:black;">RISC: Procesadores dise??ados para ejecta un numero de instrucciones reducidas.</p>
                                                    <a href="trabajos_indi/individual_luis/2doCorte/CISC y RISC.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img/2do_corte/Individual/Luis/Gobierno TI.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Gobierno TI</h4>
                                                    <p align="justify" class="card-text" style="color:black;">Sistema por el cual se rige y se controla la utilizaci??n de las TI actuales y futuras y
                                                supone la direccion y la evolucion de los planes que utilizan las TI</p>
                                                    <a href="trabajos_indi/individual_luis/2doCorte/Gobierno de TI.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>



</div>


    <!-- pie de pagina -->
    <div class="container">
        <footer  style="width:82%; margin-left: 0px;"  >
        <div class="copyright" style="background-color: #0d47a1;">
        <div class="container-fluid" style="background-color: #0d47a1; color: #bbdefb;">
        ??  Copyright: Equipo 7, Contacto: trabajos123@gmail.com Facebook:Trabajos equpo 7, Youtube: Trabajos_TI
        </div>
        </div>
    </div>

</div>
    
</body>
</html>