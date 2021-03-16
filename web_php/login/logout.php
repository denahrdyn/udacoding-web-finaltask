<?php
session_start();

// fungsi untuk menghapus seluruh session
session_destroy();

// redirect ke halaman login.php (halaman login)
header('Location: index.php');

?>