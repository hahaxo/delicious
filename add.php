<?php include('header.php');
User::auth();
@$title=$_GET["title"];
@$url=$_GET["url"];
@$desc=$_GET["description"];

?>
  <div class="container">
    <div class="card">
      <form class="" action="save.php" method="post">


      <ul class="form">
        <li>
          <div class="form_item bmtitle">
            <?php echo $title; ?>
          </div>

        </li>
        <li>

          <div class="form_item">
            <input type="text" name="description" value="<?php echo $desc; ?>" placeholder="Description" class="ant_input">
            <input type="hidden" name="title" value="<?php echo $title; ?>"  class="ant_input">
            <input type="hidden" name="url" value="<?php echo $url; ?>"  class="ant_input">
          </div>
        </li>
        <li>
          <div class="form_item">
            <input type="submit" name="submit" value="Submit" class="ant_btn ant_btn_primary">
          </div>
        </li>
      </ul>
      </form>
    </div>
  </div>



<?php include('footer.php') ?>
