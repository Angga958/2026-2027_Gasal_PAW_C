<?php
$fruits = array("Avocado", "Blueberry", "Cherry", "Durian", "Elderberry", "Fig", "Grape", "Honeydew");

unset($fruits[1]);

echo "Data Blueberry dihapus.<br>";
echo "fruits = (" . implode(", ", $fruits) . ")<br>";

$indeks_terakhir = array_key_last($fruits);
echo "Nilai dengan indeks tertinggi: " . $fruits[$indeks_terakhir];
?>