<!DOCTYPE html>
<?php 
include_once 'utils/database.php';
include_once 'utils/session.php';
include_once 'header.php';
?>       
<table>
    <form action="" method="post" >  
        <tr>
            <?php 
            $meditacija = ("SELECT id FROM predmeti WHERE ime = 'Meditacija'");
            ?>
            <td><img src="design_main/images_predmeti/meditation.jpg" width="300px" height="150px"/></td><td><input type="radio" name="predmet" value="meditation"/></td>
        </tr>
        <tr>
            <td><img src="design_main/images_predmeti/skiing.jpg" width="300px" height="150px"/></td><td><input type="radio" name="predmet" value="skiing"/></td>
        </tr>
        <tr>
            <td> <input type="submit" value="Vnesi" />
            <input type="reset" value="Prekliči" /></td>
        </tr>
    </form>
</table>    
<?php
include_once 'footer.php';
?> 
