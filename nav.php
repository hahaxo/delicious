<header class="main_header">
  <div class="nav container">
    <div class="logo"><a href="index.php"><img src="img/logo.svg" alt=""></a></div>
    <div class="menu">
      <?php
        if (isset($_SESSION['username'])) {
          # code...
          echo "<a href='?username=".$_SESSION['username']."'>".$_SESSION['username'].'</a>' .'&nbsp;&nbsp;&nbsp;&nbsp;';
          echo "<a href='login.php?action=logout'>logout</a>";
        } else {
          # code...
          echo "<a href='login.php'>login</a>";
        }

      ?>

    </div>
  </div>
</header>
