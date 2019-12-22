<?php

require_once('config.php');



   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home page </title>
    <link rel="stylesheet" href="style.css">

</head>
<body  style="background-color:#D2E3EB">
    <img  src="./img/backround.jpg" class= "img-b">
 

    <header class="menu" action="homepage.php" method="POST">
    
             
     <ul class="menu">
             <li> <a href="homepage.php">accueil</a></li>
             <!-- <li><a href="boutique.php">boutique</a></li> -->
             <li><a href="panier.php">panier</a></li>
             <li  name="register"> <a href="register.php">register</a> </li>
             <li><a  href="index.php">connexion</a></li>
             
     </ul>

    </header>





    
 
</body>

</html>