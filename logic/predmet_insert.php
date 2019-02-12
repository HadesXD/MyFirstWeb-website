<?php
    include_once '../utils/database.php';
    include_once '../utils/session.php';
    
    $radio = $_POST['predmet'];
    
        if ($radio = "meditacija") 
            {
            $query = sprintf("UPDATE uporabniki SET predmet_id =" $meditacija WHERE (ime = '$ime')";
            mysqli_query($query);
        //(SELECT id FROM predmet WHERE (ime = 'Meditacija')
            //preusmeritev na prijavo
            header("Location: ../index.php");
            }
        if ($radio = "skiing") 
            {
            $error = true;
            array_push($_SESSION['alert'], "Napačno geslo ali e-pošto ste vnesli");
            header("Location: ../registration.php");
            } 
 


