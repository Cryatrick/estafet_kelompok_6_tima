<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$npm = $_POST['npm'];

// Query cek user
$query = "SELECT * FROM mahasiswa WHERE username='$username' AND npm='$npm'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    echo "Login berhasil! Selamat datang, $username";
} else {
    echo "Login gagal! Username atau NPM salah.";
}
?>