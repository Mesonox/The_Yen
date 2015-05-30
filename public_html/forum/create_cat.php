<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//create_cat.php
include_once (__DIR__.'../includes/db_connect.php');
include_once (__DIR__.'../includes/functions.php');

include_once (__DIR__.'/header.php');
if (login_check($mysqli) == true) {         
    echo '  <tr>
                <td class="leftpart">
                    <h3><a href="category.php?id=">Category name</a></h3> Category description goes here
                </td>
                <td class="rightpart">
                     <a href="topic.php?id=">Topic subject</a> at 10-10
                </td>
            </tr>';
    include 'footer.php';
} else {  
    echo '<p>
    <span class="error">You are not authorized to access this page.</span> Please <a href="../index.php">login</a>.
    </p>';
    include 'footer.php';
}
?>
