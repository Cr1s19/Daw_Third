<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
    
    <head>
        <title>QPET</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>

    <body background="../../images/background.jpg">
        
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <?php $this->load->helper('url');?>
                    <a href="<?= base_url().'index.php/Welcome/index'?>" class="navbar-brand" role="button">QPET</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <?php $this->load->helper('url');?>
                        <li class="active">
                            <a href="<?= base_url().'index.php/Welcome/index'?>" role="button">Home</a>

                        </li>
                        <?php
                            if (isset($_SESSION["Session"])) {
                        ?>
                                <?php $this->load->helper('url');?>
                                <li>
                                    <a href="<?= base_url().'index.php/Welcome/map'?>" role="button">Map</a>
                                </li>
                                <?php $this->load->helper('url');?>
                                <li>
                                    <a href="<?= base_url().'index.php/Welcome/logout'?>" role="button">Log out</a>
                                </li>
                        <?php 
                            } else { 
                        ?>
                            <?php $this->load->helper('url');?>
                            <li>
                                <a href="<?= base_url().'index.php/Welcome/login'?>" role="button">Login</a>
                            </li> 
                            <?php $this->load->helper('url');?>
                            <li>
                                <a href="<?= base_url().'index.php/Welcome/register'?>" role="button">Register</a>
                            </li>
                        <?php 
                            } 
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container">
            
            <div class="jumbotron">
                <h1>QPET</h1>
                <p> Localización de huertos</p> 
            </div>
            
            <div class="well" align="center">
                Los huertos escolares pueden ser una poderosa herramienta para mejorar la calidad de la nutrición y la formación de los niños y sus familias en las zonas rurales y urbanas de los países en desarrollo.
El principal beneficio de los huertos escolares es que los niños aprenden a producir alimentos sanos y cómo emplearlos en una nutrición adecuada. Además, los huertos escolares también contribuyen a la educación medioambiental y al desarrollo individual y social, al añadir una dimensión práctica. También sirven para reforzar materias básicas del aprendizaje como la lectura, la escritura. la biología y la aritmética. * sin dejar de mencionar algo sumamente importante como son los valores y trabajo en equipo.
Nuestros índices de obesidad, desnutrición, malnutrición en nuestros niños y jóvenes mexicanos es algo a lo cual tenemos que poner atención generando herramientas atractivas que les permita el establecimiento y operación sencilla de huertos.
Es por ello que nuestra propuesta es hacer una plataforma en la cual se pueda documentar los huertos escolares activos.
                            <p><img src="../../images/casos.png"></p>
            </div> 
        
              
            
        </div>

    </body>
</html>