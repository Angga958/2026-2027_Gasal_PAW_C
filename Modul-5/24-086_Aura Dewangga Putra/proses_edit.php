<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$query = "UPDATE supplier SET nama='$nama', telp='$telp', alamat='$alamat' WHERE id='$id'";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
?>