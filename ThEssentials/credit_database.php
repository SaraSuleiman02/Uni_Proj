<?php
require 'connect.php';

if(isset($_POST['submit'])){

    $sql="INSERT INTO credit(name,no,exp_date,cvv) values (:name,:no,:exp_date,:cvv)";
    $statement=$pdo->prepare($sql);
    $name=$_POST['name'];
    $no=$_POST['no'];
    $exp_date=$_POST['exp_date'];
    $cvv=$_POST['cvv'];
    $statement->bindParam(":name",$name,PDO::PARAM_STR);
    $statement->bindParam(":no",$no,PDO::PARAM_STR);
    $statement->bindParam(":exp_date",$exp_date,PDO::PARAM_STR);
    $statement->bindParam(":cvv",$cvv,PDO::PARAM_STR);
    $statement->execute();

    $pdo=null;
    }

    header("Location: home2.php");
    exit();

?>