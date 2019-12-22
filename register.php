<
    \\?php
include "config.php";
 

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register form</title>
    <link rel="stylesheet" href="style.css">
    
    <ul class="menu">
             <li> <a href="homepage.php">accueil</a></li>
             <!-- <li><a href="admin.php">boutique</a></li> -->
             <li><a href="panier.php">panier</a></li>
             <!-- <li  name="register"><a href="register.php">register</a> </li> -->
             <li><a  href="index.php">connexion</a></li>
             
     </ul>

</head>
<body  style="background-color:#D2E3EB">
    <div id="main-wrapper">
    <center> <h1>registration form</h1>
 <img src="./img/images.png" class="image">
       </center>
 
 <form class="myform"  method="POST" >

 <!-- <label><br>name</label><br>
<input name="nom" type="text" class="inputvalues" placeholder="your name"required/><br> -->
  
<label><br>prenom</label><br>
<input name="prenom" type="text" class="inputvalues" placeholder="your prenom"required/><br>
  <label><br>username</label><br>
<input name="username" type="text" class="inputvalues" placeholder="your username"required/><br>
<label> <br>password</label><br>
<input name="password"   type="password" id="p1" placeholder="your password"class="inputvalues" required/><br>
<label> <br>confirm password</label><br>
<input name="cpassword" id="p2" onblur="comparer()" type="password" placeholder="confirm your password"class="inputvalues"required/><br>
<label><br>email</label><br>
<input name="email" placeholder="your-email@email.com"type="email" class="inputvalues" required/><br>
<button name="submit-btn"     id="signup-btn"> sign up</button><br>

<p id="erreur" class="cacher">mot de passe incorect </p>
 </form>
 

</div>



<script>
      
    function comparer()
    {
        let a = document.getElementById("p1").value;
        let b = document.getElementById("p2").value;
        if ( a!==b) {
            document.getElementById("p1").focus();
            // document.getElementById("erreur").innerHTML = "erreur";
            document.getElementById("erreur").setAttribute("class" , "affiche")
            return false;
        }
        else {
            // document.getElementById("erreur").innerHTML = "";
            document.getElementById("erreur").setAttribute("class" , "cacher")
            return true;
        }
        
    }
    </script>



    





</body>

</html>


<?php


if($_POST){
// $id = $_POST["id"];
$mdp = $_POST["password"];
$nom = $_POST["username"];
$prnm = $_POST["prenom"];

if(!empty($mdp) AND !empty($prnm)){
$insert = "INSERT INTO `client` ( `password`, `username`, `prenom`) VALUES ( '".$mdp."', '".$nom."', '".$prnm."' );";

mysqli_query($con, $insert)or die ('Erreur: '.mysqli_erreur());



echo "vous etes bien inscri ..";


}else echo " Erreur , un ou plusieur champs est vide..!";
        
}


?>

       
        
      