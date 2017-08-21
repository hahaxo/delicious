<?php require('header.php');require('nav.php');?>

<?php
if (isset($_SESSION['access']) && $_SESSION['access']==true) {
  require('index-mylist.php');
}else {
  require('index-home.php');
}
?>

<?php require('index-copyright.php');require('footer.php') ?>
