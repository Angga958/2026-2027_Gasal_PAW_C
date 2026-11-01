<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM supplier WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Master Supplier</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h2 { color: #337ab7; }
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 100px; font-weight: bold; }
        input[type="text"] { padding: 8px; width: 300px; border: 1px solid #ccc; border-radius: 4px; }
        .btn { padding: 8px 15px; text-decoration: none; border-radius: 4px; color: white; border: none; cursor: pointer; }
        .btn-update { background-color: #5cb85c; }
        .btn-batal { background-color: #d9534f; }
    </style>
</head>
<body>

    <h2>Edit Data Master Supplier</h2>

    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $row['nama'] ?>" required>
        </div>
        <div class="form-group">
            <label>Telp</label>
            <input type="text" name="telp" value="<?= $row['telp'] ?>" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?= $row['alamat'] ?>" required>
        </div>
        
        <div style="margin-left: 105px;">
            <button type="submit" class="btn btn-update">Update</button>
            <a href="index.php" class="btn btn-batal">Batal</a>
        </div>
    </form>

</body>
</html>