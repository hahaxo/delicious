<?php
//参数：ULR地址，跳转到对应的地址，并且退出当前逻辑。不能在此之前输出内容；
function redirect($url)
{
	header("Location: $url");
	exit();
}


//参数：完整的Email地址，返回@前的字符串；
function preEmail($email){
    $preEmail = explode("@",$email);
    return $preEmail[0];
}
