         
         
         
         
         
<?php
require_once("panier.php");
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
         
          <head>
       
    <link rel="stylesheet" href="style.css">
    
    <ul class="menu">
             <li> <a href="homepage.php">accueil</a></li>
             <!-- <li><a href="admin.php">boutique</a></li> -->
             <li><a href="panier.php">panier</a></li>
             <li  name="register"><a href="register.php">register</a> </li>
             <li><a  href="index.php">connexion</a></li>
             
     </ul>
</head>






 <!-- actions -->

            

        <!-- Formulaire pour ajouter un produit-->
        <form action="" method="POST" enctype="multipart/form-data" class="formm">

            <h5>Nom du produit</h5><input type="text" name="titre" required>
            <h5>Description du produit</h5><textarea name="description" required></textarea>
            <h5>Prix</h5><input type="text" name="prix" required></br>
            <input type="file" name="img" require>
            <input type="submit" name="submit">
        </form>
<br>
<br>
<!-- 





    autres
 -->
