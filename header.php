<?php require 'common.php';session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Delicious Bookmark</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<header class="main_header">
  <div class="nav">
    <div class="logo"><a href="/delicious"><img src="img/logo.svg" alt="delicious" ></a></div>
    <div class="menu">
      <?php
        if (isset($_SESSION['username'])) {
          # code...
          echo $_SESSION['username'];
          echo "<a href='login.php?action=logout'>logout</a>";
        } else {
          # code...
          echo "<a href='login.php'>log in</a>";
        }

      ?>

    </div>
  </div>
</header>
