<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Task Web PHP Expression</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: sans-serif;
        }

        .content {
            width: 335px;
            background-color: #84c1a0;
            margin: 100px auto;
            padding: 10px 20px 50px 20px;
            border-radius: 5px;
            box-shadow: 0px 10px 20px 0px #d1d1d1;
        }

        .judul {
            text-align: center;
            color: #eee;
            font-weight: normal;
        }

        .form-control {
            width: 300px;
            margin: 6px;
            border: none;
            font-size: 16pt;
            border-radius: 5px;
            padding: 10px;
        }

        .tombol {
            background-color: #ec5159;
            border-top: none;
            border-right: none;
            border-left: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: #eee;
            font-size: 13pt;
            border-bottom: 4px solid #bf3d3d;
            align-items: center;
            margin: 0 auto;
            display: block;
        }

        footer {
            text-align: center;
            margin-top: -50px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h2 class="judul">Masukan Nilai</h2>
        <form action="expression.php" method="POST">
            <input class="form-control" type="text" name="nilai" placeholder="Nilai"><br><br>
            <input type="submit" name="submit" value="Kirim" class="tombol">
        </form>
        <?php

        $nilai = "";

        if(isset($_POST['submit'])) {
            $nilai = $_POST['nilai'];

            if ($nilai >= 60 && $nilai <= 80) {
                echo "<p style='color: white; text-align: center; margin-top: 2rem;'>Nilai memuaskan</p>";
            } elseif ($nilai > 80 && $nilai <= 90) {
                echo "<p style='color: white; text-align: center; margin-top: 2rem;'>Nilai sangat memuaskan</p>";
            } elseif ($nilai > 90 && $nilai <= 100) {
                echo "<p style='color: white; text-align: center; margin-top: 2rem;'>Nilai terpuji</p>";
            } elseif ($nilai < 60) {
                echo "<p style='color: white; text-align: center; margin-top: 2rem;'>Tidak Lulus</p>";
            } else {
                echo "<p style='color: white; text-align: center; margin-top: 2rem;'>Nilai tidak valid</p>";
            }
        }

        ?>
    </div>
    <footer>
        &copy; Web Basic Udacoding 2021
    </footer>
</body>
</html>
