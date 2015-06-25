<?php

//create_cat.php
include_once (__DIR__ . '/header.php');
if (login_check($mysqli) == true) {
    $stmt = "SELECT
            cat_id,
            cat_name,
            cat_description
        FROM
            categories";
    if(!$result = $mysqli->query($stmt)){
        echo 'The categories could not be displayed, please try again later.';
    } else {
        if ($result->num_rows === 0) {
            echo 'No categories defined yet.';
        } else {
            //prepare the table
            echo '
              
              <table border="1">
              <tr>
                <th>Category</th>
                <th>Last topic</th>
              </tr>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td class="leftpart">';
                echo '<h3><a href="category.php?id">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
                echo '</td>';
                echo '<td class="rightpart">';
                echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
                echo '</td>';
                echo '</tr>';
                echo "\n";
            }
            echo '</table>';
        }
    }
} else {
    echo <<<error
    <p>
    <span class="error">You are not authorized to access this page.</span> Please <a href="../index.php">login</a>.
    </p>
error;
}
include_once (__DIR__ . '/footer.php');
?>