<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//create_cat.php
include_once (__DIR__ . '/../includes/db_connect.php');
include_once (__DIR__ . '/../includes/functions.php');

include_once (__DIR__ . '/header.php');
if (login_check($mysqli) == true) {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        //the form hasn't been posted yet, display it
        echo "
        <div class='category'>
        <form method='post' action=''>
        Category name:
        <br>
        <input type='text' name='cat_name' />
        <br>
        Category description:
        <br>
        <textarea name='cat_description' /></textarea>
        <br>
        <input type='submit' value='Add category' />
        </form>
        </div>
        ";
    } else {
        //the form has been posted, so save it
        $cat_name = filter_input(INPUT_POST, 'cat_name', FILTER_SANITIZE_STRING);
        $cat_description = filter_input(INPUT_POST, 'cat_description', FILTER_SANITIZE_STRING);
        $insert_stmt = $mysqli->prepare("INSERT INTO categories(cat_name, cat_description) VALUES (?, ?)");
        $insert_stmt->bind_param('ss', $cat_name, $cat_description);
        if (! $insert_stmt->execute()) {
            echo 'Error' . mysql_error();
        } else {
            echo 'New category successfully added.';
        }
    }
} else {
    echo <<<error
    <p>
    <span class="error">You are not authorized to access this page.</span> Please <a href="../index.php">login</a>.
    </p>';
error;
}
include_once (__DIR__ . '/footer.php');
?>
