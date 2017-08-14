<?php include('header.php');?>
<?php
$GLOBALS['login']['form']='';

if (isset($_GET['action'])&&$_GET['action']=='login') {

if (empty($_POST['username'])||empty($_POST['password'])) {
  $GLOBALS['login']['form'] = '请填写完整';
} else {
  $u = User::getByUsername($_POST['username']);

  if ($u->password) {
      if ($u->password == sha1($_POST['password'])) {
        # code...
        echo "ok";
      } else {
        # code...
        $GLOBALS['login']['form'] = '密码错误';
      }
  } else {
    $GLOBALS['login']['form'] = '用户名不存在';
  }

}

}
//注销登录状态
if (isset($_GET['action'])&&$_GET['action']=='logout') {
  session_start();
  session_unset();//free all session variable
  session_destroy();//销毁一个会话中的全部数据
}

?>



  <div class="container">
    <div class="card">

      <form action="?action=login " method="post">


      <ul class="form"><h2>Login</h2>
      <div><?php if (isset($_POST['submit'])) {echo $GLOBALS['login']['form'];} ?></div>
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
