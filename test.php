<?php require('header.php');require('nav.php');

//$email = 'hahaxo@126.com'; $emailArr = explode("@",$email); echo $emailArr[0];
$email = '1212hahaxocom';
$p = preEmails($email);
echo $p;

//参数：完整的Email地址，返回@前的字符串；
function preEmails($email)
{
    $preEmail = explode("@", $email);
    return $preEmail[0];
}


$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

echo "<br />";
echo $_SERVER['PHP_SELF'];
echo "<br />";
echo $url;
echo "<br />";
echo $_SESSION['username'];
echo "<br />";


////echo $_SESSION['username'];
//echo "<br />";
//echo $_COOKIE['username'];