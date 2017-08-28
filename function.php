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

//rss日期要符合 RFC-822 规范
function updateAtFormat($time)
{
	# code...
	date_default_timezone_set('PRC');//设置为中华人民共和国
	$time=strtotime($time);
	$updateAtFormat = date('D, d M Y H:i:s O', $time);
  return $updateAtFormat;
}
