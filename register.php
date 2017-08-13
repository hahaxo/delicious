<?php include('header.php');require 'user.class.php';?>
<?php

if (!empty($_POST["username"])&&!empty($_POST["password"])) {
  $u = new User($_POST["username"],$_POST["password"]);
  if ($u->register()) {
    $fb= "注册成功";
    redirect('/delicious/index.php');
  } else {
    $fb = '注册失败，用户名重复';

  }
} else {
  $fb =  "请填写完整表单";
}
?>

  <div class="container">
    <div class="card">

      <form action="" method="post">


      <ul class="form"><h2>Register</h2><div><?php
      if (isset($_POST['submit'])) {
        # code...
        echo $fb;
      }
       ?> </div>
        <li>
          <div class="form_item">
          <input type="text" name="username" value="<?php if (isset($_POST['submit'])) {echo $_POST["username"];} ?>" placeholder="Username" class="ant_input">
          </div>
          <div class="form_item">
          <input type="password" name="password" value="" placeholder="Password" class="ant_input">
          </div>
        </li>


        <li>
          <div class="form_item">
            <input type="submit" name="submit" value="Submit" class="ant_btn ant_btn_primary">
          </div>
        </li>
      </ul>
      </form>
    </div>
  </div>



<?php include('footer.php') ?>
