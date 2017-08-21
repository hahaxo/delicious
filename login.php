<?php include('header.php'); ?>
<?php
$GLOBALS['login']['form'] = '';

//登录,设置 session，跳转首页
if (isset($_GET['action']) && $_GET['action'] == 'login') {

    if (empty($_POST['username']) || empty($_POST['password'])) {
        $GLOBALS['login']['form'] = '请填写完整';
    } else {
        $u = User::getByUsername($_POST['username']);

        if ($u->password) {
            if ($u->password == sha1($_POST['password'])) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['access'] = true;
                //密码验证通过，设置cookies，把用户名和密码保存在客户端
                setcookie('username', $_POST['username'], time() + 60 * 60 * 24 * 30 * 6);//设置时效6个月,6个月后这个cookie失效
                setcookie('password', sha1($_POST['password']), time() + 60 * 60 * 24 * 30 * 6);

                if (isset($_SESSION['redirectpath'])){
                  redirect(urldecode($_SESSION['redirectpath']));
                }else{
                    redirect('index.php');
                }
            } else {
                $GLOBALS['login']['form'] = '密码错误';
            }
        } else {
            $GLOBALS['login']['form'] = '用户名不存在';
        }

    }

}
//注销登录状态,跳转首页
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_unset();//free all session variable
    session_destroy();//销毁一个会话中的全部数据
    setcookie('password');
    redirect('index.php');
}

?>

<!-- container -->
<div class="container">

    <!-- page hd -->
    <header class="page_hd"><a href="index.php"><img src="img/logo.svg" alt="logo"></a></header>
    <!-- page bd -->
    <div class="page_bd">
        <form action="?action=login" method="post">
            <div class="weui-cells__title"><?php if (isset($_POST['submit'])) {
                    echo $GLOBALS['login']['form'];
                } ?></div>
            <div class="weui-cells">
                <div class="weui-cell">
                    <div class="weui-cell__bd">
                        <input class="weui-input" type="text" placeholder="Email" name="username"
                               value="<?php if (isset($_POST['submit'])) {
                                   echo $_POST['username'];
                               } ?>">
                    </div>
                </div>
                <div class="weui-cell">
                    <div class="weui-cell__bd">
                        <input class="weui-input" type="password" placeholder="Password" name="password">
                    </div>
                </div>
            </div>
            <div class="weui-btn-area">
                <input type="submit" name="submit" value="Login" class="weui-btn weui-btn_primary">
            </div>

            <div class="weui-loadmore"><span class="weui-loadmore__tips"><a href="register.php">Register</a></span>
            </div>
        </form>
    </div>

</div>


<?php include('footer.php') ?>
