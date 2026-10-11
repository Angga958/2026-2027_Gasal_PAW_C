<?php
$weight = array("Andy"=>"70", "Barry"=>"65", "Charlie"=>"75");

echo "weight = (";
$temp = [];
foreach ($weight as $nama => $berat) {
    $temp[] = "\"$nama\"=>\"$berat\"";
}
echo implode(", ", $temp) . ")<br>";

$kunci = array_keys($weight);
echo "Data kedua: " . $weight[$kunci[1]];
?>