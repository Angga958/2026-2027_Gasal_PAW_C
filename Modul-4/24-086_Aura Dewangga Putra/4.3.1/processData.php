<!DOCTYPE html>
<html>
<head>
    <title>Hasil Validasi</title>
</head>
<body>
    <?php
    require 'validate.inc';

    // Cek validasi
    if (validateName($_POST, 'surname')) {
        echo '<h3 style="color:green;">Data OK!</h3>';
    } else {
        echo '<h3 style="color:red;">Data invalid!</h3>';
    }
    ?>
    <br>
    <!-- Kembali ke form di folder 4.3 -->
    <a href="../4.3/processData_form.html">Kembali ke Form</a>
</body>
</html>