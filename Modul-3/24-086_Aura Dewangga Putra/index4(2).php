<?php
$weight = array("Andy"=>"70", "Barry"=>"65", "Charlie"=>"75");

echo "weight = (";
$temp = [];
foreach ($weight as $nama => $berat) {
    $temp[] = "\"$nama\"=>\"$berat\"";
}
echo implode(", ", $temp) . ")<br><br>";

$kunci = array_keys($weight);
$jumlah = count($weight);

for ($i = 0; $i < $jumlah; $i++) {
    $nama = $kunci[$i];
    $berat = $weight[$nama];
    echo "$nama is $berat kg.<br>";
}
?>