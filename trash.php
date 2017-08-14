<?php
$url=$_GET["url"];
$description=$_GET["description"];
$title=$_GET["title"];
?>



<script>
  //open("http://www.w3school.com.cn","","toolbar=no,width=700,height=350")
  // location.href='http://www.hao123.com';
</script>


"<li><a href='#' class='title'>$data['TITLE']</a>
    <div class='meta'>$data['TIME']<span></div>
    <div class='summary'>$data['DESCRIPTION']</div>
</li>"



//register core php
<?php

if (!empty($_POST["username"])&&!empty($_POST["password"])) {
  $u = new User($_POST["username"],$_POST["password"]);
  if ($u->register()) {
    $fb= "注册成功";
    redirect('/delicious/index.php');
  } else {
    $fb = '注册失败，用户名重复';

  }
} else {
  $fb =  "请填写完整表单";
}
?>



<?php
if (isset($_POST['submit'])) {
  # code...
  echo $fb;
}
 ?>
