<?php
$courses=array("c++" =>"1000" ,"java"=>" 1200" ,"php" =>"2000");
// echo $courses['c++'];

echo "<pre>";
print_r($courses); // array show
 ?> 
 
 <?php 
  foreach ($courses as $key )// all key print
  {
  	echo $key;
  }
 ?>

 <?php 
  foreach ($courses as $key => $value )
  {
  	echo "key is" .$key.  "value is" .$value.  "<br/>";
  }
 ?>