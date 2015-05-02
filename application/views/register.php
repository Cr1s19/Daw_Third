
<?php
	include_once("util.php");

    if (isset($_SESSION["Session"])) {
        header("HTTP/1.0 404 Not Found");
        echo "<br>";
        echo "<h1>Error 404: Not Found</h1>";
        echo "<br>";
        echo "<i>The requested URL was not found on this server, please go back and end the current session. </i> <br>";
        die();
    }
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
                        <?php $this->load->helper('url');?>
                        <li>
                            <a href="<?= base_url().'index.php/Welcome/login'?>" role="button">Login</a>
                        </li> 
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
                </br>
                <p>Insert your personal data to create a new profile</p>
                <br>
                <br>
                <?php $this->load->helper('url');?>
                <form class="block-form" method="post" action="<?= base_url().'index.php/Welcome/util'?>">
                    <input type="text"      name="name"             placeholder="Name"            id="name" required/>
                    <input type="text"      name="mail"             placeholder="E-Mail"            id="mail" required/>
                    <input type="password"  name="password"         placeholder="Password"          id="password" required/>
                    <input type="password"  name="checkPassword"    placeholder="Repeat password"   id="CheckPassword" required/>
                    <?php 
                        if (isset($_SESSION["Error"])) {
                            echo $_SESSION["Error"]; 
                            $_SESSION["Error"] = "";
                        }
                    ?>
                    <br>
                    <br>
                    <br>
                    <br>
                    <input type="submit" class="login centered-button" name="add" value="Register"/>
                    </br>
                </form>
            </div> 
            
        </div>

    </body>
</html>