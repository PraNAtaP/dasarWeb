<!DOCTYPE html>
<html>

<body>

    <form method="post" action="">
        Masukkan teks :
        <input type="text" name="input"><br><br>
        Masukkan email :
        <input type="email" name="email"><br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<hr>";

        if (!empty($_POST['input'])) {
            $input = $_POST['input'];
            $safe_input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            echo "Hasil Teks Aman : " . $safe_input . "<br>";
        } else {
            echo "Hasil Teks : Teks tidak diisi.<br>";
        }

        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Hasil Email : Email valid ($email).<br>";
            } else {
                echo "Hasil Email : Format email tidak valid ($email).<br>";
            }
        } else {
            echo "Hasil Email : Email tidak diisi.<br>";
        }
    }
    ?>
</body>
</html>