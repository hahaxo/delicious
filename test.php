<?php require('header.php');require('nav.php');

function test($u='*')
{
  # code...
  if ($u=='*') {
    # code...
    echo "set *";
  } else {
    echo "no *";
  }

  echo $u;
}

if (isset($_GET['u'])) {
test($_GET['u']);
} else {
test();
}
