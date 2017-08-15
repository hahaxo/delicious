<?php
require 'common.php';
session_start();
User::auth();
if (isset($_POST['submit'])) {
  # code...
  $description=$_POST["description"];
  $title=$_POST["title"];
  $url=$_POST["url"];
  $author=$_SESSION['username'];

  $database->insert("bookmark", [
  "URL" => $url,
  "TITLE" => $title,
  "DESCRIPTION" => $description,
  "AUTHOR" => $author
  ]);

  echo ' <script type="text/javascript">window.close()</script>';

} else {
  # code...
  echo 'submit is false';
}
