<?php
$a = ["A"];
echo "Array awal: (" . implode(", ", $a) . ")<br>";
array_push($a, "B");
echo "Hasil array_push: " . implode(" ", $a) . "<br><br>";

$b = ["A", "B"];
$c = ["C"];
echo "Array awal: (" . implode(", ", $b) . ") digabung dengan (" . implode(", ", $c) . ")<br>";
$merge = array_merge($b, $c);
echo "Hasil array_merge: " . implode(" ", $merge) . "<br><br>";

$d = ["x" => 1, "y" => 2];
echo "Array awal: (\"x\" => 1, \"y\" => 2)<br>";
$values = array_values($d);
echo "Hasil array_values: " . implode(" ", $values) . "<br><br>";

$e = ["A", "B", "C"];
echo "Mencari \"B\" pada array: (" . implode(", ", $e) . ")<br>";
echo "Hasil array_search: " . array_search("B", $e) . "<br><br>";

$f = [0, 1, false, 2, " ", 3, "array"];
echo "Array awal: (0, 1, false, 2, \" \", 3, \"array\")<br>";
$filter = array_filter($f);
echo "Hasil array_filter: " . implode(" ", $filter) . "<br><br>";

$g = [3, 1, 2];
echo "Array awal: (" . implode(", ", $g) . ")<br>";
sort($g);
echo "Hasil sort: " . implode(" ", $g) . "<br>";
rsort($g);
echo "Hasil rsort: " . implode(" ", $g) . "<br><br>";

$h = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
echo "Array awal: (\"Peter\"=>35, \"Ben\"=>37, \"Joe\"=>43)<br>";

asort($h);
echo "Hasil asort: ";
foreach ($h as $k => $v) echo "$k=> $v, ";
echo "<br>";

ksort($h);
echo "Hasil ksort: ";
foreach ($h as $k => $v) echo "$k=> $v, ";
echo "<br>";

arsort($h);
echo "Hasil arsort: ";
foreach ($h as $k => $v) echo "$k=> $v, ";
echo "<br>";

krsort($h);
echo "Hasil krsort: ";
foreach ($h as $k => $v) echo "$k=> $v, ";
?>