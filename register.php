<?php include('header.php'); ?>
<?php
$GLOBALS['register']['form'] = '';

if (empty($_POST['username']) || empty($_POST['password'])) {
    $GLOBALS['register']['form'] = '请填写完整';
} else {
    $u = User::getByUsername($_POST['username']);

    if ($u->password) {
        $GLOBALS['register']['form'] = '用户名已存在';
    } else {
        $u->username = $_POST['username'];
        $u->password = $_POST['password'];
        $u->save();
//        $GLOBALS['register']['form'] = '注册成功';
        setcookie('username', $_POST['username'], time() + 60 * 60 * 24 * 30 * 6);//设置时效6个月,6个月后这个cookie失效
        setcookie('password', sha1($_POST['password']), time() + 60 * 60 * 24 * 30 * 6);
        redirect('index.php');
    }

}
?>


<!-- container -->
<div class="container">
    <!-- page hd -->
    <header class="page_hd"><a href="index.php"><img src="img/logo.svg" alt="logo"></a></header>
    <!-- page bd -->
    <div class="page_bd">
        <form action="" method="post">
            <div class="weui-cells__title"><?php if (isset($_POST['submit'])) {
                    echo $GLOBALS['register']['form'];
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
                <input type="submit" name="submit" value="Register" class="weui-btn weui-btn_primary">
            </div>

            <div class="weui-loadmore"><span class="weui-loadmore__tips"><a href="login.php">Login</a></span></div>
        </form>
    </div>
</div>


<?php include('footer.php') ?>
