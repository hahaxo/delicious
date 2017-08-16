<?php include('header.php');

$datas = $database->select("bookmark", "*",["ORDER" => ["BID" => "DESC"]]);

?>
<div class="container">
<div class="card">
<ul class="items">
  <?php
  foreach($datas as $data)
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
   ?>
</ul>
</div>
</div>
<?php include('footer.php') ?>
