<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO supplier (nama, telp, alamat) VALUES ('$nama', '$telp', '$alamat')";

if (mysqli_query($conn, $query)) {
    // Kalau berhasil, balik ke halaman index
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
?>