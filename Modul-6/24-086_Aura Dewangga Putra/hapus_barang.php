<?php
include 'koneksi.php';

$id_barang = isset($_GET['id']) ? $_GET['id'] : die("ID Barang tidak ditemukan.");

$cek = mysqli_query($conn, "SELECT * FROM transaksi_detail WHERE barang_id = '$id_barang'");

if (mysqli_num_rows($cek) > 0) {
    echo "<script>
            alert('Barang ini tidak bisa dihapus karena masih digunakan pada transaksi!');
            window.history.back();
          </script>";
} else {
    $hapus = mysqli_query($conn, "DELETE FROM barang WHERE id = '$id_barang'");
    if ($hapus) {
        echo "<script>
                alert('Barang berhasil dihapus.');
                window.location.href = 'index.php'; 
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>