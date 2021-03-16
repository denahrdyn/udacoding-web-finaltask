<?php
session_start();

// check apakah session email sudah ada atau belum.
// jika belum maka akan diredirect ke halaman index (login)
if (empty($_SESSION['username'])) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Menampilkan isi session username -->
    <div class="limiter">
        <div class="container">
            <div class="wrapper">
                <div class="wrap wrap-profil">
                    <h3>Halo Selamat Datang, <?php echo $_SESSION['username']; ?>!</h3>
                    <a href="logout.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>