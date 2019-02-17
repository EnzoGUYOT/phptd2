<?php
    session_start();

    $user = $_SESSION['username'];
    $password = $_SESSION['password'];
    
    if ($user !== "crepo" || $password !== "nutella")
    {
        header("Location: login.php");  
    }

    print("Bienvenue $user");
?>

<input type="button" name="deco" value="Deconnexion" onclick="window.location='deconnexion.php';">
