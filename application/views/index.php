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
                Esta es una página de prueba.
               
            </div> 
        
              
            
        </div>

    </body>
</html>