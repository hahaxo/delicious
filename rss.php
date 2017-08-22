<?php
require 'common.php';
require 'rss.class.php';//引入RSS PHP类


$b = new Bookmark();
if (isset($_GET['u'])) {
  $username=$_GET['u'];
  $bookmaks=$b->getBookmark($username);
} else {
  $bookmaks=$b->getBookmark();
}

//$bookmaks=$b->getBookmark($username);

$RSS= new RSS("My Delicious Bookmarks","http://hahaxo.com","Bookmark Feeds","RSS频道图标");
// $RSS->AddItem("日志的标题","日志的地址","日志的摘要","2017-08-21 14:56:03");



foreach($bookmaks as $data){
  $RSS->AddItem($data["TITLE"],$data["URL"],$data["DESCRIPTION"],$data["TIME"]);
}

$RSS->Display();//输出RSS内容
