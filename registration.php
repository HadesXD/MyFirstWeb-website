<?php 
    include_once 'utils/database.php';
    include_once 'utils/session.php';
 ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link href="design_user/design_user.css" type="text/css" rel="stylesheet" />

    </head>
    <body>
        <?php include_once 'templates/alert.php'; ?>
        <h1 class="boi">Registracija</h1>
        <div class="container_register">
            <img src="design_user/images/user.png"/>
            <form action="logic/user_insert.php" method="post">
                <input type="text" name="ime" placeholder="Vnesi ime ..." /><br />
                <input type="text" name="priimek" placeholder="Vnesi priimek ..." required="required" /><br />
                <input type="email" name="email" placeholder="Vnesi e-pošto ..."  required="required" /><?php if(isset($error)){ echo $error;} ?><br />
                <input type="password" name="pass" placeholder="Vnesi geslo ..."  required="required" /><br />
                <input type="password" name="pass2" placeholder="Ponovno nesi geslo ..." required="required" /><br />
                <input type="submit" value="Vnesi" />
            </form>
            <form action="login.php"/>
                <input type="submit" value="Log in"/>
            </form>
        </div>
    </body>
</html>


    </body>
</html>