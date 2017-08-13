<?php
function small_numbers()
{
    return array (false, 'adfaf', 2);
}
list($bool, $message) = small_numbers();



if ($bool=0) {
  echo $bool.'???';
} else {
  echo $bool.'xxx';
}
