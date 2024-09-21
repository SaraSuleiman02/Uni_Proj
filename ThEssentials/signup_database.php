<?php
require 'connect.php';


if(isset($_POST['submit'])){

    $sql="INSERT INTO login_info(email,pass) values (:email,:pass)";
    $statement=$pdo->prepare($sql);
    $email=$_POST['email'];
    $password=$_POST['password'];
    $statement->bindParam(":email",$email,PDO::PARAM_STR);
    $statement->bindParam(":pass",$password,PDO::PARAM_STR);
    $statement->execute();

    $sql2 = "INSERT INTO prod (email) values (:email)";
    $statement2 = $pdo->prepare($sql2);
    $statement2->bindParam(":email",$email,PDO::PARAM_STR);    
    $statement2->execute();

    $pdo=null;
    }



?>