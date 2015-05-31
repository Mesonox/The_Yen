<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Rancho&effect=fire-animation">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/gaben.js"></script>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once (__DIR__.'/includes/db_connect.php');
include_once (__DIR__.'/includes/functions.php');
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        
        <audio class="music" autoplay loop>
            <source src="img/Gaben.mp3">
        </audio>
        
        <?php if (login_check($mysqli) == true) : ?>
        <?php echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>'; ?>
           <a href="/forum/header.php">Forum</a>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
    </div>
</html>