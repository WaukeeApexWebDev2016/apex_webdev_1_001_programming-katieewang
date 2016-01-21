<?php
  //step 1: ask user for shape.

$shape = readline("enter you shape: ");

if ($shape == "square")
{
  $side = readline("enter side length: ");
  echo $side * $side . "\n";
}



if ($shape == "triangle")
{
  $base = readline("enter base: ");
  $width = readline("enter width: ");
  echo .5 * $base * $width . "\n";
}




if ($shape == "rectangle")
{
  $length = readline("enter length: ");
  $height = readline("enter height: ");
  echo $length * $height . "\n";
}




if ($shape == "circle")
{
  $radius = readline("enter radius: ");
  echo 3.14 * ($radius*$radius) . "\n";
}




?>
