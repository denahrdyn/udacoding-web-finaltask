<?php

// fungsi untuk memulai session
session_start();

// variabel kosong untuk menyimpan pesan error
$form_error = '';

// cek apakah tombol sumit sudah di klik atau belum
if (isset($_POST['submit'])) {

    // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
    $username = $_POST['username'];
    $password = $_POST['password'];
    $captcha = $_POST['kodecaptcha'];

    // validasi login benar atau salah
    if ($username == 'udacodingid' && $password == 'udacodingJaya2021' && $_SESSION["code"] == $captcha) {

         // jika login benar maka email akan disimpan ke session kemudian akan di redirect ke halaman profil
         $_SESSION['username'] = $username;
         header('Location: home.php');
    } else {
        $form_error = '<p style="color: red;">Password, username atau captcha yang kamu masukan salah</p>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="limiter">
        <div class="container">
            <div class="wrapper">
                <form class="login-form" action="index.php" method="POST">
                    <h3 class="form-title">Silahkan Login</h3>
                    <div class="wrap">
                        <div class="wrap-input">
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                        </div>
                        <div class="wrap-input">
                            <input class="form-control" type="password" name="password" title="Minimal 6 Karakter" pattern="(?=^.{6,}$).*$" placeholder="Password" required>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="captcha.php" alt="gambar">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control input-captcha" name="kodecaptcha" placeholder="Captcha" maxlength="5">
                            </div>
                        </div>
                        <?php echo $form_error; ?>
                        <input class="btn" type="submit" name="submit" value="Login">
                    </div>
                </form>
            </div>  
        </div>
    </div>
</body>
</html>