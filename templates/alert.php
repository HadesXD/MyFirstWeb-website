<?php

if (isset($_SESSION['alert']) )
{
    $sporocila = $_SESSION['alert']; // string[] sporocila = [ "sporočilo 1" ,"sporočilo 2"]
    
    if( count($sporocila) > 0 ) 
    {    
        for($i = 0; $i < count($sporocila); $i ++) 
        {
            ?>
            <p class="alert">
                <?php echo $sporocila[$i]; ?>
            </p>     
            <?php
        }
        $_SESSION['alert'] = [];
    } 
}


        




