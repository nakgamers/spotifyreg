<?php

require "spfunc.php";

$spotify = new spotify();


echo "masukan email: ";
$email = trim(fgets(STDIN));
echo "masukan username: ";
$name = trim(fgets(STDIN));
echo "masukan password: ";
$pass = trim(fgets(STDIN));

var_dump($spotify->createAccount($email, $name, $pass));

?>
