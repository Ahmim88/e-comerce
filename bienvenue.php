<!-- <?php
session_start();

//    require_once('config.php');
   
//    if (isset($_POST['submit'])){ 
//          header("Location: logout.php");   }
   
   ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome users</title>
    
   
   



       
       <link rel="stylesheet" href="style.css">
       
       <ul class="menu">
                <li> <a href="homepage.php">accueil</a></li>
                
                <li><a href="panier.php">panier</a></li>
                <li  name="register"><a href="ajoutproduit.php">ajouter un produit</a> </li>
                <li><a href="afficheproduit.php">afficher un produit</a></li>
                <li><a  href="logout.php">deconnection</a></li>
                
        </ul>
   
        </head>


<body>
    <p><b>WELCOME USERS</b></p> 
         
         
         
     <?php

require_once('config.php');

// controle php ajouter un produit
if($_POST){
    // $id = $_POST["id"];

    $title=$_POST['titre'];
    $description=$_POST['description'];
    $prix=$_POST['prix'];
    
    if(!empty($title) AND !empty($description)AND !empty($prix) ){
    $insert = "INSERT INTO `produits` ( `titre`, `description`, `prix`) VALUES ( '".$title."', '".$description."', '".$prix."' );";
    
    mysqli_query($con, $insert)or die ('Erreur: '.mysqli_erreur());

    echo"votre produit a été ajouter avec succé!";   
    

        
} else{
    echo'veuillez remplir tous les champs';
 }   
}
?>
         
  <body>
      
  
