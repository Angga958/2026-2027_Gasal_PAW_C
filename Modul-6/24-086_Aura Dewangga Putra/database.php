<?php
$conn = mysqli_connect("localhost", "root", "");

$sql = "CREATE DATABASE IF NOT EXISTS db_master_detail;
        USE db_master_detail;
        
        DROP TABLE IF EXISTS transaksi_detail;
        DROP TABLE IF EXISTS transaksi;
        DROP TABLE IF EXISTS barang;
        DROP TABLE IF EXISTS pelanggan;
        DROP TABLE IF EXISTS supplier;

        CREATE TABLE supplier (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(100),
            telp VARCHAR(12),
            alamat TEXT
        );

        CREATE TABLE pelanggan (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(100),
            jenis_kelamin ENUM('L', 'P'),
            telp VARCHAR(12),
            alamat TEXT
        );

        CREATE TABLE barang (
            id INT AUTO_INCREMENT PRIMARY KEY,
            kode_barang VARCHAR(10),
            nama_barang VARCHAR(100),
            harga INT,
            stok INT,
            supplier_id INT,
            FOREIGN KEY (supplier_id) REFERENCES supplier(id)
        );

        CREATE TABLE transaksi (
            id INT AUTO_INCREMENT PRIMARY KEY,
            waktu_transaksi DATE,
            keterangan TEXT,
            total INT DEFAULT 0,
            pelanggan_id INT, 
            FOREIGN KEY (pelanggan_id) REFERENCES pelanggan(id)
        );

        CREATE TABLE transaksi_detail (
            transaksi_id INT,
            barang_id INT,
            harga INT,
            qty INT,
            PRIMARY KEY (transaksi_id, barang_id),
            FOREIGN KEY (transaksi_id) REFERENCES transaksi(id) ON DELETE CASCADE,
            FOREIGN KEY (barang_id) REFERENCES barang(id) ON DELETE RESTRICT
        );

        INSERT INTO supplier (nama, telp, alamat) VALUES 
        ('PT. Maju', '0811', 'Sby'), ('CV. Jaya', '0822', 'Mlg'), 
        ('PT. Makmur', '0833', 'Jkt'), ('UD. Sentosa', '0844', 'Bdg'), 
        ('CV. Karya', '0855', 'Smg');

        INSERT INTO pelanggan (nama, jenis_kelamin, telp, alamat) VALUES 
        ('Andi', 'L', '0811', 'Sby'), ('Budi', 'L', '0822', 'Mlg'), 
        ('Citra', 'P', '0833', 'Jkt'), ('Dewi', 'P', '0844', 'Bdg'), 
        ('Eka', 'L', '0855', 'Smg');

        INSERT INTO barang (kode_barang, nama_barang, harga, stok, supplier_id) VALUES 
        ('B01', 'Buku Tulis', 5000, 100, 1), ('B02', 'Pulpen', 4000, 50, 2),
        ('B03', 'Pensil', 2500, 80, 3), ('B04', 'Penghapus', 1500, 40, 4),
        ('B05', 'Penggaris', 3000, 60, 5);

        INSERT INTO transaksi (waktu_transaksi, keterangan, total, pelanggan_id) VALUES 
        ('2026-11-01', 'Belanja 1', 0, 1), ('2026-11-01', 'Belanja 2', 0, 2),
        ('2026-11-02', 'Belanja 3', 0, 3), ('2026-11-02', 'Belanja 4', 0, 4),
        ('2026-11-03', 'Belanja 5', 0, 5), ('2026-11-03', 'Belanja 6', 0, 1),
        ('2026-11-04', 'Belanja 7', 0, 2), ('2026-11-04', 'Belanja 8', 0, 3),
        ('2026-11-05', 'Belanja 9', 0, 4), ('2026-11-05', 'Belanja 10', 0, 5);

        INSERT INTO transaksi_detail (transaksi_id, barang_id, harga, qty) VALUES 
        (1, 1, 5000, 2), (1, 2, 4000, 1),
        (2, 3, 2500, 4), (3, 4, 1500, 2), (3, 5, 3000, 1),
        (4, 1, 5000, 1), (5, 2, 4000, 3), (6, 3, 2500, 1),
        (7, 4, 1500, 5), (8, 5, 3000, 2), (9, 1, 5000, 2),
        (10, 2, 4000, 1), (10, 3, 2500, 1);
        ";

if (mysqli_multi_query($conn, $sql)) {
    echo "Database dan data berhasil dibuat!";
} else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>