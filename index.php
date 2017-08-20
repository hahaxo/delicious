<?php include('header.php');include('nav.php');

if (isset($_GET['username'])) {
  $username=$_GET['username'];

}else {
  $username='*';
}
$b = new Bookmark();
$bookmaks=$b->getBookmark($username);

?>





<div class="container">
 <div class="card">
  <div class="weui-panel">
    <div class="weui-panel__bd">
<?php foreach($bookmaks as $data){ ?>
      <div class="weui-media-box weui-media-box_text">
        <h4 class="weui-media-box__title"><a href="<?php echo $data['URL']; ?>" target="_blank"><?php echo $data["TITLE"]; ?></a></h4>
        <p class="weui-media-box__desc"><?php echo $data["DESCRIPTION"]; ?></p>
        <ul class="weui-media-box__info">
          <li class="weui-media-box__info__meta"><?php echo $data["TIME"]; ?></li>
          <li class="weui-media-box__info__meta"><?php echo preEmail($data["AUTHOR"]); ?></li>
          <!-- <li class="weui-media-box__info__meta weui-media-box__info__meta_extra"></li> -->
        </ul>
      </div>
<?php } ?>

    </div>
  </div>
 </div>
</div>

<footer class="main_footer">
  <p class="weui-footer__links">
    <a href="javascript:void(0);" class="weui-footer__link">hahaxo.com</a>
  </p>
  <p class="weui-footer__text">Copyright &copy; 2016-2017</p>
</footer>

<?php include('footer.php') ?>
