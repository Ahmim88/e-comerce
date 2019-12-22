<?php
        require_once('./include/header.php');
        echo'<div class="boutiquecorp">';
        if(isset($_GET['show'])){
            $prduits = $_GET['show'];
            $select = $db->prepare("SELECT * FROM produits WHERE title='$prduits'" );
            $select->execute();
            $s = $select->fetch(PDO::FETCH_OBJ);
            $description = $s -> description;

            
        ?>
            <span>
            <img src="./img/<?php echo $s->title; ?>.jpg" alt="">
            <h1><?php echo $s->title; ?></h1>
            <h5><?php echo $s->description; ?></h5>
            <h4><?php echo $s->prix;?>euro</h4>
            <h3>stock<br/><?php echo $s->stock; ?></h3>
            </span>
        <?php
        }else{ 
        $select = $db->prepare("SELECT * FROM produits ");
        $select->execute();
        while($s = $select->fetch(PDO::FETCH_OBJ ))
        {
            $length=100;
            $description = $s->description;
            $new_description=substr($description,0,$length)."....";
            $description_finale=wordwrap($new_description,20,true);
?>
    <span>
            <a href="?show=<?php echo $s->title; ?>"><img src="./img/<?php echo $s->title; ?>.jpg" alt=""></br>
            <a href="?show=<?php echo $s->title; ?>"><h1><?php echo $s->title;?></h1>
            <h5><?php echo $new_description;?></h5>
            <h4><?php echo $s->prix;?>euro</h4>
            <?php 
                if($s->stock!==0){
              
            }
                else{
                    echo'<h5 style="color:red;">Stock épuisé !</h5>';
                }?>
    </span>   

<?php
    }
    }
    echo '</div>';
    
require_once('./include/footer.php');
?>