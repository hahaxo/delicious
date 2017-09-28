<?php
require 'common.php';
$username=$_SESSION['username'];
$b = new Bookmark();
$bookmaks=$b->getBookmark($username);
  header("Content-type:application/octet-stream");
  header("Accept-Ranges:bytes");
  header("Content-Disposition:attachment;filename=".'delicious_bookmark_'.date("YmdHis").".html");
  header("Expires: 0");
  header("Cache-Control:must-revalidate,post-check=0,pre-check=0");
  header("Pragma:public");


$backupstart = '<!DOCTYPE NETSCAPE-Bookmark-file-1>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<TITLE>Bookmarks</TITLE>
<H1>Bookmarks</H1>
<DL>';

$backupend = '</DL>';

echo $backupstart;
echo PHP_EOL;
foreach ($bookmaks as $data) {
  echo '<DT><A HREF="'.$data['URL'].'">'.$data["TITLE"].'</A></DT>';
  echo PHP_EOL;
}
echo $backupend;
