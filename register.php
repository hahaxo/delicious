<?php include('header.php');?>
<?php
$GLOBALS['register']['form']='';

if (empty($_POST['username'])||empty($_POST['password'])) {
  $GLOBALS['register']['form'] = '请填写完整';
} else {
  $u = User::getByUsername($_POST['username']);

  if ($u->password) {
    $GLOBALS['register']['form'] = '用户名已存在';
  } else {
    $u->username=$_POST['username'];
    $u->password=$_POST['password'];
    $u->save();
    $GLOBALS['register']['form'] = '注册成功';
  }

}
?>

<?php
?>


  <div class="container">
    <div class="card">

      <form action="" method="post">


      <ul class="form"><h2>Register</h2>
        <div><?php if (!empty($_POST['submit'])) {echo $GLOBALS['register']['form'];} ?></div>
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
