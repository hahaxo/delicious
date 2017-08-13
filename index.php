<?php
include('header.php');
?>
<div class="container">
<div class="card">
<ul class="items">
  <div class="">
    index
    <?php
// $u = new User('admin','password');
echo time().'<br>';

$userName = 'z';

echo 'cookie是：'.@$_COOKIE['username'].'<br>';
echo 'session是：'.@$_SESSION['username'].'<br>';

// if (User::check()) {
//   # code...
//   echo "s 存在".$_GET['username'];
// } else {
//   # code...
//   echo "s 不存在";
// }

     ?>
  </div>
</ul>
</div>
</div>
<?php include('footer.php') ?>
