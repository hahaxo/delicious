<header class="main_header">
  <div class="nav container">
    <div class="logo"><a href="index.php"><img src="img/logo.svg" alt=""></a></div>
    <div class="menu">
      <?php
        if (isset($_SESSION['username'])) {
          echo $_SESSION['username'].'&nbsp;&nbsp;&nbsp;&nbsp;';
          echo "<a href='login.php?action=logout'>logout</a>";
        } else {
          echo "<a href='javascript:void(0);'>Howto</a>".' &nbsp;&nbsp;&nbsp;&nbsp; '."<a href='register.php'>Register</a>".' &nbsp;&nbsp;&nbsp;&nbsp; '."<a href='login.php'>Login</a>";
        }

      ?>

    </div>
  </div>
</header>
