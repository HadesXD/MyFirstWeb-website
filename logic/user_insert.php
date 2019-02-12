<?php
    include_once '../utils/database.php';
    include_once '../utils/session.php';

    $ime = $_POST['ime'];
    $priimek = $_POST['priimek'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    
        if (!empty($ime) && !empty($priimek) && !empty($email) && !empty($pass) && ($pass == $pass2)) 
        {
            /*$krneki="SELECT * FROM uporabniki WHERE email=$email";        
            $query = mysqli_query ($link, $krneki);
            $records = mysqli_fetch_array($link, $query);*/
                 
            $query = mysqli_query($link, "SELECT email FROM uporabniki WHERE email='$email'");
            
            
            if (mysqli_num_rows($query) != 0)
            {
                echo "email je že v bazi";
                //header("url: ../registration.php");
            }        
            
            else {
                $pass = sha1($pass); //zakodiram geslo
                $query = sprintf("INSERT INTO uporabniki (ime, priimek, email, pass)"
                         . "VALUES ('%s','%s','%s','$pass')",
                            mysqli_real_escape_string($link, $ime),
                            mysqli_real_escape_string($link, $priimek),
                            mysqli_real_escape_string($link, $email));
                mysqli_query($link, $query);

                //preusmeritev na prijavo
                header("Location: ../login.php");
            }
        }

        /*$pass = sha1($pass); //zakodiram geslo
                $query = sprintf("INSERT INTO uporabniki (ime, priimek, email, pass)"
                         . "VALUES ('%s','%s','%s','$pass')",
                            mysqli_real_escape_string($link, $ime),
                            mysqli_real_escape_string($link, $priimek),
                            mysqli_real_escape_string($link, $email));
                mysqli_query($link, $query);

                //preusmeritev na prijavo
                header("Location: ../login.php");*/
 ?> 