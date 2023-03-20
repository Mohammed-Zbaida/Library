<?php
include('config.php');
if (isset($_POST['login'])){
    $EMAIL = $_POST['email'];
    $PASSWORD = $_POST['password'];                                            
    $login = $database->prepare("SELECT * FROM members WHERE email = :email AND password = :password ");
    $login->bindParam("email", $EMAIL);
    $login->bindParam("password", $PASSWORD); 
    $login->execute();  

    if ($login->rowCount()===1){
        session_start();
        $user =  $login->fetchObject();
        $_SESSION['user'] = $user;
        // Store user data in session
        echo $user->Full_name;
        if ($user->Id_member) {
            header("Location: accueil.php"); 
        }  } else {
        // Display error message if login fails
        session_start();
        $_SESSION['error'] = "<p id='error'> Not registered or the information is incorrect </p>";
        header("Location: login.php");
    }
}
?> 
