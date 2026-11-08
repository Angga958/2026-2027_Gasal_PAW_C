<?php
include 'koneksi.php';

$query_master = mysqli_query($conn, "SELECT * FROM transaksi");
$id_terpilih = isset($_GET['id']) ? $_GET['id'] : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Master Detail Sederhana</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { border-collapse: collapse; width: 80%; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #007bff; color: white; }
        .master-row:hover { background-color: #f1f1f1; }
        .active { background-color: #d1ecf1; } 
        .btn { padding: 5px 10px; background: #28a745; color: white; text-decoration: none; border-radius: 3px;}
    </style>
</head>
<body>

    <h2>Daftar Transaksi (Master)</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($query_master)) : ?>
            <tr class="master-row <?= ($id_terpilih == $row['id']) ? 'active' : '' ?>">
                <td><?= $row['id'] ?></td>
                <td><?= $row['waktu_transaksi'] ?></td>
                <td><?= $row['pelanggan_id'] ?></td>
                <td>Rp <?= number_format($row['total']) ?></td>
                <td><a href="index.php?id=<?= $row['id'] ?>">Lihat Detail</a></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <?php if ($id_terpilih) : ?>
        <h2>Detail Barang untuk Transaksi #<?= $id_terpilih ?></h2>
        <a href="tambah_detail.php?id=<?= $id_terpilih ?>" class="btn">+ Tambah Barang</a>
        <br><br>
        <table>
            <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </tr>
            <?php
            $query_detail = mysqli_query($conn, "
                SELECT barang.nama_barang, transaksi_detail.harga, transaksi_detail.qty 
                FROM transaksi_detail 
                JOIN barang ON transaksi_detail.barang_id = barang.id 
                WHERE transaksi_detail.transaksi_id = '$id_terpilih'
            ");
            
            $grand_total = 0;
            while($detail = mysqli_fetch_assoc($query_detail)) :
                $subtotal = $detail['harga'] * $detail['qty'];
                $grand_total += $subtotal;
            ?>
                <tr>
                    <td><?= $detail['nama_barang'] ?></td>
                    <td>Rp <?= number_format($detail['harga']) ?></td>
                    <td><?= $detail['qty'] ?></td>
                    <td>Rp <?= number_format($subtotal) ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <td colspan="3" style="text-align: right; font-weight: bold;">Total:</td>
                <td style="font-weight: bold;">Rp <?= number_format($grand_total) ?></td>
            </tr>
        </table>
    <?php else : ?>
        <p style="color: gray;">Klik "Lihat Detail" pada salah satu transaksi untuk melihat barangnya.</p>
    <?php endif; ?>

</body>
</html>