<?php

$db = new PDO("mysql:host=127.0.0.1;dbname=nurkonush;", 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
session_start();

?>