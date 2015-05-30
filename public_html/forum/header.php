<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Rancho&effect=fire-animation">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--<script src="../js/site.js"></script>-->
<script src="../js/debug.js"></script>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
(__DIR__.include_once '../includes/db_connect.php');
(__DIR__.include_once '../includes/functions.php');
sec_session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
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
            <li class="active"><a href=#>Discussion</a></li>
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
          <a href="http://www.markoritachka.com" class="btn btn-default btn-lg btn-block" role="button">Games</a>
          <a href="http://www.markoritachka.com" class="btn btn-default btn-lg btn-block" role="button">Movies</a>
          <a href="http://www.markoritachka.com" class="btn btn-default btn-lg btn-block" role="button">Books</a>
          <a href="http://www.markoritachka.com" class="btn btn-default btn-lg btn-block" role="button">Music</a>
          <a href="http://www.markoritachka.com" class="btn btn-default btn-lg btn-block" role="button">Shrekt</a>
          <a href="http://www.markoritachka.com" class="btn btn-default btn-lg btn-block" role="button">Fan</a>
      </ul>
    </div>
        