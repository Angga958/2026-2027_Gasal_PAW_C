<?php
include 'koneksi.php';

$transaksi_id = isset($_GET['id']) ? $_GET['id'] : die("ID Transaksi tidak ditemukan.");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $barang_id = $_POST['barang_id'];
    $qty = $_POST['qty'];
    
    $query_barang = mysqli_query($conn, "SELECT harga FROM barang WHERE id = '$barang_id'");
    $barang = mysqli_fetch_assoc($query_barang);
    $harga = $barang['harga'];

    $query_insert = "INSERT INTO transaksi_detail (transaksi_id, barang_id, qty, harga) 
                     VALUES ('$transaksi_id', '$barang_id', '$qty', '$harga')";
    
    if (mysqli_query($conn, $query_insert)) {
        $query_total = mysqli_query($conn, "
            SELECT SUM(harga * qty) as grand_total 
            FROM transaksi_detail 
            WHERE transaksi_id = '$transaksi_id'
        ");
        $total = mysqli_fetch_assoc($query_total)['grand_total'];
        
        mysqli_query($conn, "UPDATE transaksi SET total = '$total' WHERE id = '$transaksi_id'");

        header("Location: index.php?id=$transaksi_id");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

$query_dropdown = mysqli_query($conn, "
    SELECT * FROM barang 
    WHERE id NOT IN (
        SELECT barang_id FROM transaksi_detail WHERE transaksi_id = '$transaksi_id'
    )
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Detail Transaksi</title>
</head>
<body>
    <h2>Tambah Barang ke Transaksi #<?= $transaksi_id ?></h2>
    
    <form method="POST">
        <label>Pilih Barang:</label><br>
        <select name="barang_id" required>
            <option value="">-- Pilih Barang --</option>
            <?php while($b = mysqli_fetch_assoc($query_dropdown)) : ?>
                <option value="<?= $b['id'] ?>"><?= $b['nama_barang'] ?> (Rp <?= number_format($b['harga']) ?>)</option>
            <?php endwhile; ?>
        </select>
        <br><br>
        
        <label>Qty:</label><br>
        <input type="number" name="qty" min="1" value="1" required>
        <br><br>
        
        <button type="submit">Simpan</button>
        <a href="index.php?id=<?= $transaksi_id ?>">Batal</a>
    </form>
</body>
</html>