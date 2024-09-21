<?php
session_start();
require 'connect.php';

function pass_verify($password1 , $password2 ){
    if ($password1 == $password2){
        return true;
    } else {
        return false;}
}

function authenticateUser($email, $password, $pdo)
{
    try {
        $query = "SELECT * FROM login_info WHERE email = :email LIMIT 1";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == NULL){
            echo "There is no account with this email , please sign up";
            header("Location: sign-up.php");
            exit();
        } else {
            return (pass_verify($password , $user['pass']));
        }
        
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user = authenticateUser($email, $password, $pdo);

    if ($user) {
        // Authentication successful, redirect to a secure page
        header("Location: home2.php");
        exit();
    } else {
        // Authentication failed, show an error message
        echo "Invalid email or password";
    }
}

if(isset($_POST['login'])){
    $sql="SELECT * from login where username=:username and password=:password";
    $statement=$pdo->prepare($sql);
    $username=$_POST['username'];
    $password=$_POST['password'];

    $statement->bindParam(":username",$username,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    $count=$statement->rowCount();
    if($count==1){
        $_SESSION['privilleged']=$username;
        header("location:home.php");
    }
}

?>