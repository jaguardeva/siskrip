<?php

require_once "../database/connection.php";

if (isset($_POST["register"])) {

  $username = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $password = htmlspecialchars($_POST["password"]);
  $confirm_password = htmlspecialchars($_POST["confirm_password"]);
  $phone = htmlspecialchars($_POST["phone"]);
  $address = htmlspecialchars($_POST["address"]);
  $fakultas = htmlspecialchars($_POST["fakultas"]);
  $prodi = htmlspecialchars($_POST["prodi"]);
  $role = "mahasiswa";

  if ($password !== $confirm_password) {
    header("Location: ../register.php?error=password tidak sama");
    exit();
  }

  $query = "INSERT INTO users (username, email, password, phone, address, fakultas, prodi, role) VALUES ('$username', '$email', '$password', '$phone', '$address', '$fakultas', '$prodi', '$role')";

  $result = $db->query($query);

  if ($result) {
    header("Location: ../login.php");
  }
}
