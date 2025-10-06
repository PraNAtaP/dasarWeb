<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi & AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi & AJAX</h1>

    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="result" style="margin-top: 15px; font-weight: bold;"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // mencegah reload halaman

                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Reset error
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#result").text("");

                // Validasi sederhana di sisi client
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                }

                // Kalau masih ada error, hentikan submit
                if (!valid) return;

                // Kirim data ke server tanpa reload halaman
                $.ajax({
                    url: "proses_validasi.php",
                    type: "POST",
                    data: {
                        nama: nama,
                        email: email
                    },
                    success: function(response) {
                        $("#result").html(response);
                    },
                    error: function() {
                        $("#result").text("Terjadi kesalahan saat mengirim data.");
                    }
                });
            });
        });
    </script>
</body>

</html>