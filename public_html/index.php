<?php
include_once (__DIR__ . '/includes/db_connect.php');
include_once (__DIR__ . '/includes/functions.php');
sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
    header('Location: /forum/index.php');
} else {
    $logged = 'out';
}
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link href="css/login.css" rel="stylesheet" media="screen" rel="stylesheet" type="text/css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/JavaScript" src="js/logoanimation.js"></script>
    </head>

    <body onload="animate()">
        <link media="screen" rel="stylesheet" type="text/css">
        <?php
        /* @var $_GET type */
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?>
        <div class="logo">
            <img id="logoImg" src="img/logoOpen.gif" alt="The Yen"/>
        </div>
        <div class="loginform" style="margin-top: 750px;">
            <form action="includes/process_login.php" 
                  method="post" 
                  name="login_form">
                <p1>
                    <input type="text" 
                           name="email" 
                           id="loginfield" 
                           placeholder="email" />
                </p1>
                <p1>
                    <input type="password" 
                           name="password" 
                           placeholder="Password"
                           id="loginfield"/>
                </p1>
                <br />
                <input type="image" 
                       src="img/enter_button.png"
                       onMouseOver="this.src='img/enter_button_hover.png'"
                       onMouseOut="this.src='img/enter_button.png'"
                       alt="Enter"
                       value="Login" 
                       onclick="formhash(this.form, this.form.password);" /> 
            </form>
        </div>

<?php

/*        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
         } else {
 */
                        echo '<p>Currently logged ' . $logged . '.</p>';
                        echo "<p><a href='register.php'>Register</a></p>";
#                }
?>
</div>
        
    </body>
</html>
