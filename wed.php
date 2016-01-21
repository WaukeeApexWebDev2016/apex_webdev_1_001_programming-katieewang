<?php

echo var_dump(true and true);
echo var_dump(true and false);

echo var_dump(true or false);
echo var_dump(false or false);

echo var_dump(!false);

if (true) {
    echo "1) Yes\n";
}

if (false) {
    echo "2) Yes\n";
}

$username = readline("Enter your username: ");

if($username == "admin") {
    echo "you are admin. all access granted!";
  }else if ($username =="spencer") {
    echo "you are spencer";
  } else {
  echo "access denined";
}

function sub($first, $second) {
  return $first - $second;
}
echo sub(5,1);

echo $result = sub(10,9);

function superhardmath($x, $y, $z) {
    $b = $x + $y;

    return $b * $z;
}

echo superhardmath(1, 2, 9);

?>
