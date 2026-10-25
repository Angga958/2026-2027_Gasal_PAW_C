<form action="self_submission.php" method="POST">
    <p>
        <label>Surname:</label><br>
        <input type="text" name="surname" value="<?= isset($_POST['surname']) ? htmlspecialchars($_POST['surname']) : '' ?>">
    </p>
    <p>
        <label>Email address:</label><br>
        <input type="text" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
    </p>
    <p>
        <label>Password:</label><br>
        <input type="password" name="password">
    </p>
    <p>
        <label>Street Address:</label><br>
        <textarea name="street" rows="3"><?= isset($_POST['street']) ? htmlspecialchars($_POST['street']) : '' ?></textarea>
    </p>
    <p>
        <label>State:</label><br>
        <select name="state">
            <option value="NSW">New South Wales</option>
            <option value="VIC">Victoria</option>
            <option value="QLD">Queensland</option>
            <option value="WA">Western Australia</option>
        </select>
    </p>
    <input type="hidden" name="country" value="Australia">
    <p>
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Laki-laki"> Laki-laki
        <input type="radio" name="gender" value="Perempuan"> Perempuan
    </p>
    <p>
        <input type="checkbox" name="vegetarian" value="Ya"> Vegetarian?
    </p>
    <p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </p>
</form>