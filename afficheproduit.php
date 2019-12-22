<?php
function executeRequete($req)
{
global $mysqli;
$resultat = $mysqli->query($req);
if(!$resultat)
{
                         die("Erreur sur la sql.<br>Message  " . $mysqli->error . "<br>code: " .$req) ;
}
return $resultat;
}





require_once("config.php");

echo '<a href="?action=affichage">Affichage des produits</a><br>';

if(isset($_GET['action']) && $_GET['action'] == "affichage")
{
    $resultat = executeRequete("SELECT * FROM produits");
     
    echo '<h2> Affichage des Produits </h2>';
    echo 'Nombre de produit(s) dans la boutique : ' . $resultat->num_rows;
    echo '<table border="1"><tr>';
     
    while($colonne = $resultat->fetch_field())
    {    
        echo '<th>' . $colonne->name . '</th>';
    }
    echo'<th>Modification</th>';
    echo '<th>Supression</th>';
    echo '</tr>';
 
    while ($ligne = $resultat->fetch_assoc())
    {
        echo '<tr>';
        foreach ($ligne as $indice => $information)
        {
            if($indice == "photo")
            {
                echo '<td><img src="' . $information . '" ="70" height="70"></td>';
            }
            else
            {
                echo '<td>' . $information . '</td>';
            }
        }
        echo '<td><a href="?action=modification&id_produit=' . $ligne['id_produit'] .'"><img src="../inc/img/edit.png"></a></td>';
        echo '<td><a href="?action=suppression&id_produit=' . $ligne['id_produit'] .'" OnClick="return(confirm(\'En êtes vous certain ?\'));"><img src="../inc/img/delete.png"></a></td>';
        echo '</tr>';
    }
    echo '</table><br><hr><br>';
    }
?>
<body>
<script>
<a href="panier.php?action=ajout&amp;l=LIBELLEPRODUIT&amp;q=QUANTITEPRODUIT&amp;p=PRIXPRODUIT" onclick="window.open(this.href, '', 
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
</script>
</body>