<?php
session_start();
require_once "../../database/connection.php";
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST["submit"])) {

  $topik = $_POST["topik"];
  $judul = $_POST["judul"];
  $desc = $_POST["desc"];
  $mahasiswa = $_SESSION["id"];
  $createdAt = date("Y-m-d H:i:s");
  $updateAt = $createdAt;

  $select_query = "SELECT * FROM skripsi WHERE mahasiswa = '$mahasiswa'";
  $datas = $db->query($select_query);

  if ($datas->num_rows > 0) {
    header("Location: ../../daftar_skripsi.php");
    $_SESSION['error'] = "Anda sudah mengajukan skripsi!, lihat pada halaman Daftar Ajuan";
    exit();
  }

  $insert_query = "INSERT INTO skripsi (topict, judul, deskripsi, mahasiswa, created_at, updated_at) VALUES ('$topik', '$judul', '$desc', '$mahasiswa', '$createdAt', '$updateAt')";
  $result = $db->query($insert_query);

  if (empty($topik) || empty($judul) || empty($desc)) {
    header("Location: ../../daftar_skripsi.php?error=Data Tidak Boleh Kosong!");
    exit();
  }

  if ($result) {
    header("Location: ../../daftar_ajuan.php");
    $_SESSION['message'] = "Skripsi Berhasil di Ajukan";
  } else {
    header("Location: ../../daftar_skripsi.php?error=Error! Gagal Skripsi Gagal Diajukan");
  }
}
