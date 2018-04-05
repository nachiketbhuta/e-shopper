<?php

$db = new mysqli('127.0.0.1', 'root', '', 'fashion');

if ($db->connect_errno !== 0) {
  die ('We are down at the moment, please try again later');
}

//echo "Connected Successfully!";
?>
