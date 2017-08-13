<?php
require('common.php');
// $u = new User();
// $u->username = 'admin';
// var_dump($u);


$username = 'admin0';
$u=User::getByUsername($username);
var_dump($u).'<br />';

if ($u->password) {
  # code...
  echo 'username is already';

} else {
  # code...
  echo $database->last_query();


}
