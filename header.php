<?php?
include_once 'utils/session.php'
?>

<?php echo $_SESSION['user_id']?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projektni teden</title>
        <meta charstet = "utf-8"/>
        <link href="design_main/css/design.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <h1 id="logo-text">Projektni teden</h1>
            </div>
            <div  id="menu">
                <ul>
                    <li id="current"><a href="#">Home</a></li>
                    <li><a href="#">Moj profil</a></li>
                    <li><a href="predmeti.php">Ogled predmetov</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="logic/logout.php">Log out</a></li>
                </ul>
            </div>
            <div id="content-wrap">
                <div id="sidebar">
                    <h1>Pozdravljeni!</h1>
                        <div class="left-box">
                            <p>Pristali ste na spletno stran za projektni teden, ki ga bo imela sredna šola na Šolskem Centru Velenja</p>
                        </div>
                    <h1>Support Styleshout</h1>
                        <div class="left-box">
                            <p>If you are interested in supporting my work and would like to contribute, you are welcome to make a small donation through the donate link on my website - it will be a great help and will surely be appreciated.</p>
                        </div>
                </div>
                    <div id="main"> <a name="TemplateInfo"></a>
                        
                    </div>
            
