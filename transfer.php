<?php
    include('koneksi.php');
    $title = $_POST['title'];
    $cover = $_POST['cover'];
    $description    = $_POST['description'];
    $harga = $_POST['harga'];

    $query = mysqli_query($koneksi, "INSERT INTO books set title='$title', 
                                                            cover='$cover',
                                                            description='$description',
                                                            harga='$harga'");

    if ($query) {
        header('Location:dashboard.php');
    }else {
        echo 'Input gagal';
    }
?>