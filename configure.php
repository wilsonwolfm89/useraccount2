<?php 

$db_user = "root";
$db_pass = "";
$db_name = "useraccounts44wilson";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,