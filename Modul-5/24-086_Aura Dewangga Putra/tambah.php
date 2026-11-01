<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Master Supplier Baru</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h2 { color: #337ab7; }
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 100px; font-weight: bold; }
        input[type="text"] { padding: 8px; width: 300px; border: 1px solid #ccc; border-radius: 4px; }
        .btn { padding: 8px 15px; text-decoration: none; border-radius: 4px; color: white; border: none; cursor: pointer; }
        .btn-simpan { background-color: #5cb85c; }
        .btn-batal { background-color: #d9534f; }
    </style>
</head>
<body>

    <h2>Tambah Data Master Supplier Baru</h2>

    <form action="proses_tambah.php" method="POST">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama" required>
        </div>
        <div class="form-group">
            <label>Telp</label>
            <input type="text" name="telp" placeholder="telp" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" placeholder="alamat" required>
        </div>
        
        <div style="margin-left: 105px;">
            <button type="submit" class="btn btn-simpan">Simpan</button>
            <a href="index.php" class="btn btn-batal">Batal</a>
        </div>
    </form>

</body>
</html>