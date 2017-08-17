<?php
require('common.php');
$username='admin';
$b = new Bookmark();
$bookmaks=$b->getBookmark($username);

if (empty($bookmaks)) {
  # code...
  echo "没有数据！";
} else {
  # code...
  // var_dump($bookmaks);


foreach($bookmaks as $data)
{
  echo '<li><a href="'.$data["URL"].'" class="title" target="_blank">';
  echo $data["TITLE"];
  echo '</a>';
  echo '<div class="meta">';
  echo $data["TIME"];
  echo '</div>';
  echo '<div class="summary">';
  echo $data["DESCRIPTION"];
  echo '</div>';
  echo '</li>';
}


}
