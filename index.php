<?php include('header.php');

if (isset($_GET['username'])) {
  $username=$_GET['username'];

}else {
  $username='*';
}
$b = new Bookmark();
$bookmaks=$b->getBookmark($username);

?>
<div class="container">
<div class="card">
<ul class="items">
  <?php
  foreach($bookmaks as $data)
  {
    echo '<li><a href="'.$data["URL"].'" class="title" target="_blank">';
    echo $data["TITLE"];
    echo '</a>';
    echo '<div class="meta">';
    echo $data["TIME"].' | '.$data["AUTHOR"];
    echo '</div>';
    echo '<div class="summary">';
    echo $data["DESCRIPTION"];
    echo '</div>';
    echo '</li>';
  }
   ?>
</ul>
</div>
</div>
<?php include('footer.php') ?>
