<?php
require('common.php');

//$email = 'hahaxo@126.com'; $emailArr = explode("@",$email); echo $emailArr[0];
$email = '1212hahaxocom';
$p=preEmails($email);
echo $p;

//参数：完整的Email地址，返回@前的字符串；
function preEmails($email){
$preEmail = explode("@",$email);
return $preEmail[0];
}