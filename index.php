<?php
// require_once('config.php');
session_start();
include "config.php";


if(isset($_POST['login-btn'])){

  $uname = mysqli_real_escape_string($con,$_POST['username']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
  if ($uname != "" && $password != ""){
$sql_query = "select count(*) as cntUser from client where prenom='".$uname."' and password='".$password."'";
      $result = mysqli_query($con,$sql_query);
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];

      if($count > 0){
          $_SESSION['uname'] = $uname;
          header('Location: bienvenue.php');
      }else{
          echo "Invalid username and password";
      }

  }
}
  
  
  
  
  
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ecommerce</title>
   
   
    <link rel="stylesheet" href="style.css">
    
    <ul class="menu">
             <li> <a href="homepage.php">accueil</a></li>
             <!-- <li><a href="bienvenue.php">boutique</a></li> -->
             <li><a href="panier.php">panier</a></li>
             <!-- <li  name="register"><a href="register.php">register</a> </li> -->
             <!-- <li><a  href="index.php">connexion</a></li> -->
             
     </ul>

</head>

<body  style="background-color:#D2E3EB">
    <div id="main-wrapper">
 <center> <h1>login form</h1>
 <img src="./img/images.png" class="image">
</center>
 
 <form class="myform" action="#" method="POST"> 
  <label><br>username</label><br> 
<input name="username" type="text" class="inputvalues" placeholder="type your username" required/><br>
<label> <br>password</label ><br>
<input name="password" type="password" class="inputvalues"  placeholder="type your password"  required/><br>
<button  id="login-btn" name="login-btn">login </button>
<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>


</form>
</div>


</body>

</html>

<!--  
if(!isset($_SESSION))  {      session_start();     
     if(!isset($_SESSION['nom']))     {      
            header('location: index.html');    
        
        } }  -->
            <!-- // le reste du code de la page ?
            // session_start(); session_destroy(); header('Location: register.php'); 
             -->











