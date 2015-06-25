<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Rancho&effect=fire-animation">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../js/gaben.js"></script>
<!--<script src="../js/debug.js"></script>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include_once (__DIR__.'/../includes/db_connect.php');
include_once (__DIR__.'/../includes/functions.php');
sec_session_start();
ini_set('display_errors',1); ini_set('display_startup_errors',1); error_reporting(-1);
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="The Yen - Discussion" />
    <meta name="keywords" content="forum, discussion" />
    <title>The Yen - Discussion</title>
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>
<body>    
    <audio id="music" loop>
            <source src="../img/Gaben.mp3">
    </audio>
    
    <div class="navTabs">
        <div class="nav nav-tabs">
            <img src="../img/yen_logo_optimized.png" width="40pt" height="40pt">
                <li class="active"><a href="/forum/index.php">Discussion</a></li>
            <li><a href="/missions.php">Missions</a></li>
            <li><a href="/brokering.php">Brokering</a></li>
            
            <li class="pull-right">
                <?PHP
                    echo '<a href="../includes/logout.php">' . htmlentities($_SESSION['username']) . '</a>';
                ?></a></li>
        </div>
    </div>

    <div class="underNavTabs">
        <ul class="nav nav-tabs nav-justified">
            <li><a class="item" href="/forum/create_topic.php">Create a topic</a></li>
            <li><a class="item" href="/forum/create_cat.php">Create a category</a></li>
        </ul>
    </div>

    <div class="sideBar">
      <ul>
          <?php
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
            while ($row = $result->fetch_assoc()) {
                echo '<a href="category.php?id" class="btn btn-default btn-lg btn-block" role="button">' . $row['cat_name'] . '</a>' . "\n";
            }
        }
    }
          ?>
      </ul>
    </div>
        