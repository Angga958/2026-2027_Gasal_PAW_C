<?php
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";

echo "height = (";
$temp = [];
foreach ($height as $nama => $tinggi) {
    $temp[] = "\"$nama\"=>\"$tinggi\"";
}
echo implode(", ", $temp) . ")<br>";

$kunci_terakhir = array_key_last($height);
echo "Nilai dengan indeks terakhir: " . $height[$kunci_terakhir] . "<br><br>";

unset($height["Barry"]);

echo "height = (";
$temp = [];
foreach ($height as $nama => $tinggi) {
    $temp[] = "\"$nama\"=>\"$tinggi\"";
}
echo implode(", ", $temp) . ")<br>";

$kunci_terakhir = array_key_last($height);
echo "Nilai dengan indeks terakhir setelah dihapus: " . $height[$kunci_terakhir];
?>