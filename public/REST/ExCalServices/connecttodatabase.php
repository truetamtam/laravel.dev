<?php
$requesturi = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$pos = strpos($requesturi, "explorecalifornia");

$hostname_excal = "localhost";
$database_excal = "homestead";
$username_excal = "homestead";
$password_excal = "secret";

$excal = mysql_pconnect($hostname_excal, $username_excal, $password_excal) or trigger_error(mysql_error(),E_USER_ERROR);