<!DOCTYPE html>
<html>
<head>
    <title>Hasil Data</title>
</head>
<body>
    <h2>Data yang Dikirim:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p><strong>Surname:</strong> " . $_POST['surname'] . "</p>";
        echo "<p><strong>Email:</strong> " . $_POST['email'] . "</p>";
        echo "<p><strong>Password:</strong> " . $_POST['password'] . "</p>";
        echo "<p><strong>Street Address:</strong> " . $_POST['street'] . "</p>";
        echo "<p><strong>State:</strong> " . $_POST['state'] . "</p>";
        echo "<p><strong>Country:</strong> " . $_POST['country'] . "</p>";
        
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '-';
        echo "<p><strong>Gender:</strong> " . $gender . "</p>";
        
        $vege = isset($_POST['vegetarian']) ? "Ya" : "Tidak";
        echo "<p><strong>Vegetarian:</strong> " . $vege . "</p>";
    }
    ?>
    <br>
    <a href="processData_form.html">Kembali ke Form</a>
</body>
</html>