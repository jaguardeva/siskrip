<?php
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "db_skripsi";


$db = mysqli_connect($db_host, $db_username, $db_pass, $db_name);

if (mysqli_connect_errno()) {
  die("Connection failed: " . mysqli_connect_error());
}
