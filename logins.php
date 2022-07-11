<?php
    include('koneksi.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usernameDatabase = mysqli_query($koneksi, "SELECT admin.username");
    $passwordDatabase = mysqli_query($koneksi, "SELECT admin.password");
    if ($username == $usernameDatabase && $password == $passwordDatabase) {
        header('Location:dashboard2.php');
    } else {
        echo "File tidak ada";
    }
?>