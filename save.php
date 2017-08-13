<?php
require 'vendor/autoload.php';
require 'db.php';

if (isset($_POST['submit'])) {
  # code...
  $description=$_POST["description"];
  $title=$_POST["title"];
  $url=$_POST["url"];

  $database->insert("bookmark", [
  "URL" => $url,
  "TITLE" => $title,
  "DESCRIPTION" => $description,
  "AUTHOR" => 'yangpeiyuan'
  ]);

  echo ' <script type="text/javascript">window.close()</script>';

} else {
  # code...
  echo 'submit is false';
}
