<?php
require 'connect.php';

if(isset($_POST['submit'])){

    $sql="INSERT INTO cash(loc,phone) values (:loc,:phone)";
    $statement=$pdo->prepare($sql);
    $loc=$_POST['loc'];
    $phone=$_POST['phone'];
    $statement->bindParam(":loc",$loc,PDO::PARAM_STR);
    $statement->bindParam(":phone",$phone,PDO::PARAM_STR);
    $statement->execute();

    $pdo=null;
    }
    header("Location: home2.php");
        exit();

?>