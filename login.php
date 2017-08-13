<?php
include('header.php');
?>
<?php

if (!empty($_POST["username"])&&!empty($_POST["password"])) {
  $u = new User($_POST["username"],$_POST["password"]);
  if ($u->login()) {
    $fb= "登录成功";
    redirect('/delicious/index.php?username='.$_POST["username"]);
  } else {
    $fb = '登录失败，请检查用户名或密码';

  }
} else {
  $fb =  "请填写完整表单";
}

//注销登录状态
 if(@$_GET['action'] == "logout"){
  session_start();
  session_unset();//free all session variable
  session_destroy();//销毁一个会话中的全部数据

}

?>



  <div class="container">
    <div class="card">

      <form action="" method="post">


      <ul class="form"><h2>Login</h2><div>
        <?php
        if (isset($_POST['submit'])) {
          # code...
          echo $fb;
        }
         ?>
      </div>
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
