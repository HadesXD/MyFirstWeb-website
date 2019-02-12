<?php

    include_once '../utils/database.php';
    include_once '../utils/session.php';
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
   
    $pass = sha1($pass); 
    
    $query = sprintf("SELECT * FROM uporabniki WHERE (email = '%s') AND (pass = '$pass')",
        mysqli_real_escape_string($link, $email));
    $result = mysqli_query($link, $query);
    
    if (mysqli_num_rows($result) == 1) 
        {
        $uporabniki = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $uporabniki['id'];
        $_SESSION['ime'] = $uporabniki['ime'];
        $_SESSION['priimek'] = $uporabniki['priimek'];
        $_SESSION['email'] = $uporabniki['email']; //SPREMEMBA!
        
        header("Location: ../index.php"); //preusmeritev na domov (index)
    }
    else 
    {
        array_push($_SESSION['alert']);
        header("Location: ../login.php"); //napaka v podatkih, preusmeritev nazaj        
    }
?>

