<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM supplier";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Master Supplier</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h2 { color: #337ab7; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #d9edf7; color: #31708f; }
        .btn { padding: 6px 12px; text-decoration: none; border-radius: 4px; color: white; font-size: 14px; }
        .btn-tambah { background-color: #5cb85c; float: right; margin-bottom: 10px; }
        .btn-edit { background-color: #f0ad4e; }
        .btn-hapus { background-color: #d9534f; }
    </style>
</head>
<body>

    <h2>Data Master Supplier</h2>
    
    <a href="tambah.php" class="btn btn-tambah">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            // Looping data dari database
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['telp'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>
                        <a href='edit.php?id=" . $row['id'] . "' class='btn btn-edit'>Edit</a>
                        <a href='hapus.php?id=" . $row['id'] . "' class='btn btn-hapus' onclick='return confirm(\"Anda yakin akan menghapus supplier ini?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>