<?php
include_once (__DIR__.'/includes/register.inc.php');
include_once (__DIR__.'/includes/functions.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="/css/login.css" />
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Register with us</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
       
        <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one uppercase letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
        <div class="loginform">
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="registration_form"
                id= "loginfield">
            Username: <input type='text' 
                name='username' 
                 id="loginfield" /><br>
            Email: <input type="text" name="email" id="loginfield" /><br>
            Password: <input type="password"
                             name="password" 
                              id="loginfield"/><br>
            Confirm password: <input type="password" 
                                     name="confirmpwd" 
                                      id="loginfield" /><br>
             Invite Code : <input type="text"
                                name="invtcode"
                                 id="loginfield" /><br>
            <input type="image" 
                   src="img/enter_button.png"
                   onMouseOver="this.src='img/enter_button_hover.png'"
                   onMouseOut="this.src='img/enter_button.png'"
                   alt="Enter" 
                   value="Register" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd,
                                   this.form.invtcode);" /><br> 
        </form>
        </div>
        <br>
        <p>Return to the <a href="index.php">login page</a>.</p>
    </body>
</html>