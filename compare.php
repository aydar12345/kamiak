<?php

$a=$_GET['num1'];
$b=$_GET['num2'];

$c = $a - $b;
$d = $b - $a;
  
if ($a > $b) {
  echo "$a is greater than $b because $a is greater than $b by $c ";
} elseif ($a < $b) {
  echo "$b is greater than $a because $b is greater than $a by $d";
} else {
  echo "$a is equal to $b ";
} 

?>
