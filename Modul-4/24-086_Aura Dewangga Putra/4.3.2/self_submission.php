<!DOCTYPE html>
<html>
<head>
    <title>Self-Submission Form</title>
</head>
<body>
    <h2>Isi Data Pribadi (Self-Submission)</h2>
    
    <?php
    $errors = array();
    
    // Cek apakah form sudah disubmit
    if (isset($_POST['surname'])) {
        require 'validate.inc';
        
        // Panggil semua validasi
        validateName($errors, $_POST, 'surname');
        validateEmail($errors, $_POST, 'email');
        validateAddress($errors, $_POST, 'street');
        
        if ($errors) {
            // Kalau ada error, tampilkan pesan error
            echo '<h3 style="color:red;">Invalid, correct the following errors:</h3>';
            foreach ($errors as $field => $error) {
                echo "<p style='color:red;'>$field $error</p>";
            }
            // Tampilkan kembali form
            include 'form.inc';
        } else {
            // Kalau sukses
            echo '<h3 style="color:green;">Form submitted successfully with no errors</h3>';
            echo '<p><a href="self_submission.php">Isi Form Lagi</a></p>';
        }
    } else {
        // Kalau belum disubmit, tampilkan form kosong
        include 'form.inc';
    }
    ?>
</body>
</html>