<?php
    session_start();

    $user = $_POST['username'];
    $password  = $_POST['password'];
    
    if ($user == "crepo" && $password == "nutella")
    {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header("Location: recherche.php");
    }
    else
    {
        header("Location: login.php?erreur=true"); 
    }
?>
