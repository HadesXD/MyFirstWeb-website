<?php 
    include_once 'utils/database.php';
    include_once 'utils/session.php';
 ?>
    
<html>
    <head>
        <meta charset="utf-8">
        <title>Prijava</title>
        <link href="design_user/design_user.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <?php include_once 'templates/alert.php'; ?>
        <h1 class="boi">Prijava</h1>
        <div class="container_login">
            <img src="design_user/images/user.png"/>
            <form action="logic/login_check.php" method="post">
            <input type="email" name="email" text-size placeholder="Vnesi email ..."/></br>
            <input type="password" name="pass" placeholder="Vnesi geslo ..." /></br>
                <input type="submit" value="Prijava" />
            </form>
        <form action="registration.php">
                <input type="submit" value="Register"/>
        </form>
        </div>
    </body>
</html>
