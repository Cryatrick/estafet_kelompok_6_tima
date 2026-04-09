<?php
include "conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    $result = mysqli_query($conn, "INSERT INTO mahasiswa (nim, password, nama) VALUES ('$nim', '$password', '$nama')");
    if ($result) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Proses Login Mahasiswa</title>
        <link href="style.css" rel="stylesheet">
</head>
<body>

<h2>edit Mahasiswa</h2>

<from method="POST" action="proses_edit.php">
    <label>NIM:</label><br>
    <input type="text" name="nim" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <button type="submit">Simpan Perubahan</button>
</from>

<a href="index.php">Kembali ke Halaman Utama</a>

</body>
</html>
