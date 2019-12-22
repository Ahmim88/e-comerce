<?php

require_once('config.php');


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body  style="background-color:#D2E3EB">

    <form method="POST" class="formadmin" action="">
    <h4>ADMINISTRATION</h4> 
    <label for="username">Username</label><br/>   
    <input type="text" name="username" placeholder="admin" required><br/>
    <label for="password">Password</label><br/>
    <input type="password" placeholder="admin" name="password" required><br/>
    <input type="submit" name="submit"></br>
</body>
<img src="login.png" alt="">
</html>
<?php
$user='massil';
$truepassword='massil92';



if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];

if($username&&$password){
    if($username==$user&&$password==$truepassword){
        $_SESSION['username']=$username;
        header('location:login.php');
    }
else{
    echo"identifiants éronés";
}

}else{ 
    header('location:index.php');
}
}
?>



