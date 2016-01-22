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



if ($shape == "rhombus")
{
  $diagonallength1 = readline("enter length 1: ");
  $diagonallength2 = readline("enter length 2: ");
  echo ($diagonallength1 * $diagonallength2)/2 . "\n";
}



if ($shape == "trapezoid")
{
  $a = readline("enter base 1: ");
  $b = readline("enter base 2: ");
  $height = readline("enter height: ");
  echo (($a+$b)/2)*$height . "\n";
}



if ($shape == "ellipse" or $shape == "oval")
{
  $a = readline("enter a: ");
  $b = readline("enter b: ");
  echo 3.1415*$a*$b  . "\n";
}



if ($shape == "octagon" or $shape == "hectagon" or $shape == "decagon" or $shape == "hectagon")
{
  echo "unable to perform command" . "\n";
}


?>
