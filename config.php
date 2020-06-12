<?php

$db_user = "root";
$db_pass = "";
$dsn = 'mysql:host=localhost;dbname=useraccount';


$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);

$db = new PDO($dsn, $db_user, $db_pass, $options);
?>