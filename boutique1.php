
<?php
require_once('config.php');
session_start();
// controle php ajouter un produit
if(isset($_GET['action'])){
if($_GET['action']=='add'){
if(isset($_POST['submit'])){
    $title=$_POST['titre'];
    $description=$_POST['description'];
    $prix=$_POST['prix'];

if($title&&$description&&$prix){
 
    $insert = $db->prepare("INSERT INTO  `produits` ( `title`, `description`, `prix`)VALUES('$title','$description','$prix')");
    $insert->execute();

    // $dbINSERT INTO `article` (``, `titre`, `description`, `prix`) VALUES ('', '$title' , '$description', '$prix');
}else{
    echo'veuillez remplir tous les champs';
}
}

?>
        
        
             <!-- actions -->
             <h1>Binvenue, <?php echo $_SESSION['username']?></h1>
            <a href ="?action=add">Ajouter un produit</a>
            <a href ="?action=modifiersupprimer">Modifier ou supprimer un produit</a></br>
          
          
          <body>
              
         
          <!-- Formulaire pour ajouter un produit -->
        <form action="" method="POST" enctype="multipart/form-data">
            <h5>Nom du produit</h5><input type="text" name="title" require>
            <h5>Description du produit</h5><textarea name="description" require></textarea>
            <h5>Prix</h5><input type="text" name="prix" require></br>
            <input type="file" name="img" require>
            <input type="submit" name="submit">
        </form>




  
    <?php
    }else if($_GET['action']=='modify'){



}else if($_GET['action']=='delete'){



}else {
    die('une erreur s\'est produite');
}
}else {
    
}


    

?>

<br>

<a href="?action=add">ajouter un produit</a>
<a href="?action=modify">modifier le produit</a>
<a href="?action=delete">suprimer le  produit</a>
