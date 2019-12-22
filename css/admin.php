          <head>
    
    <link rel="stylesheet" href="style.css">
    
    <ul class="menu">
             <li> <a href="homepage.php">accueil</a></li>
             <li><a href="boutique.php">boutique</a></li>
             <li><a href="panier.php">panier</a></li>
             <li  name="register"><a href="register.php">register</a> </li>
             <li><a  href="index.php">connexion</a></li>
             
     </ul>
</head>

<!-- CSS -->
<link rel="stylesheet" href="style/style.css" type="text/css"/>




        <!-- Formulaire pour ajouter un produit-->
        <form action="" method="POST" enctype="multipart/form-data" class="formm">
            <h5>Nom du produit</h5><input type="text" name="title" require>
            <h5>Description du produit</h5><textarea name="description" require></textarea>
            <h5>Prix</h5><input type="text" name="prix" require></br>
            <input type="file" name="img" require>
            <input type="submit" name="submit">
        </form>

