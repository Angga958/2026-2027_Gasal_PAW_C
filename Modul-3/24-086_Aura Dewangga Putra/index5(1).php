<?php
$mahasiswa = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665")
);

$mahasiswa[] = array("David", "220404", "0812345699");
$mahasiswa[] = array("Ethan", "220405", "0812345700");
$mahasiswa[] = array("Frank", "220406", "0812345711");
$mahasiswa[] = array("George", "220407", "0812345722");
$mahasiswa[] = array("Harry", "220408", "0812345733");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table { border-collapse: collapse; width: 100%; max-width: 600px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #667eea; color: white; }
        tr:nth-child(even) { background: #f2f2f2; }
    </style>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table>
    <tr>
        <th>Name</th>
        <th>NIM</th>
        <th>Mobile</th>
    </tr>
    <?php
    foreach ($mahasiswa as $mhs) {
        echo "<tr>";
        echo "<td>" . $mhs[0] . "</td>";
        echo "<td>" . $mhs[1] . "</td>";
        echo "<td>" . $mhs[2] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>