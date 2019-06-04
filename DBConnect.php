<?php

$db = new mysqli('remotemysql.com', 'tVSnj2iHnW', 'NpuwrBG6vT', 'tVSnj2iHnW');

if ($db->connect_errno !== 0) {
  die ('We are down at the moment, please try again later');
}

//echo "Connected Successfully!";
?>
