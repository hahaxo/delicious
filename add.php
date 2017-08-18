<?php include('header.php');
User::auth();
@$title=$_GET["title"];
@$url=$_GET["url"];
@$desc=$_GET["description"];
?>



  <div class="container">

  <!-- page hd -->
  <header class="page_hd"><a href="index.php"><img src="img/logo.svg" alt="logo"></a></header>
  <!-- page bd -->
  <div class="page_bd">

    <div class="weui-media-box weui-media-box_text">
                  <h4 class="weui-media-box__title"><?php echo $title; ?></h4>
                  <p class="weui-media-box__desc"><?php echo $url; ?></p>
    </div>
<form class="" action="save.php" method="post">
    <div class="weui-cells weui-cells_form">
        <div class="weui-cell">
                    <div class="weui-cell__bd">
                        <textarea class="weui-textarea" placeholder="Description" rows="3" name="description"><?php echo $desc; ?></textarea>
                        <input type="hidden" name="title" value="<?php echo $title; ?>">
                        <input type="hidden" name="url" value="<?php echo $url; ?>">
                    </div>
        </div>
    </div>

    <div class="weui-btn-area">
          <input type="submit" name="submit" value="Save" class="weui-btn weui-btn_primary">
    </div>
</form>
  </div>


  </div>







<?php include('footer.php') ?>
