<?php
session_start();
require_once "../database/connection.php";

if (isset($_POST["login"])) {
  $username = $_POST["username"] ?? "";
  $password = $_POST["password"] ?? "";


  // Sanitize input data if needed

  $query = "SELECT * FROM users WHERE email = ? AND password = ?";
  $statement = $db->prepare($query);
  $statement->bind_param("ss", $username, $password);
  $statement->execute();
  $result = $statement->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["id"] = $row["id"];
    $_SESSION["username"] = $row["username"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["role"] = $row["role"];
    $_SESSION["message"] = "Login Berhasil";
    header("Location: ../dashboard.php");
    exit(); // Ensure script stops execution after redirection
  } else {
    header("Location: ../login.php?message=Username atau password salah");
    exit(); // Ensure script stops execution after redirection
  }
}
