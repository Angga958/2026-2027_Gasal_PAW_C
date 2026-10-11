<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// Tambah 5 data baru
$fruits[] = "Durian";
$fruits[] = "Elderberry";
$fruits[] = "Fig";
$fruits[] = "Grape";
$fruits[] = "Honeydew";

// Tampilkan array
echo "fruits = (" . implode(", ", $fruits) . ")<br>";

// Ambil indeks tertinggi
$indeks_terakhir = array_key_last($fruits);
echo "Nilai dengan indeks tertinggi: " . $fruits[$indeks_terakhir];
?>