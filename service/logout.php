<?php
session_start();

date_default_timezone_set('Asia/Jakarta');

require_once "../database/connection.php";

$lastLoginTime = date("l, d-m-Y H:i:s");


$query = "UPDATE users SET last_login = ? WHERE id = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("si", $lastLoginTime, $_SESSION["id"]);
$stmt->execute();


session_unset();
session_destroy();
header('Location: ../index.php');
exit();
