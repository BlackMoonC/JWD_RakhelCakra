<?php

    include('koneksi.php');
    $id = $_POST['id'];
    $title = $_POST['title'];
    $cover = $_POST['cover'];
    $description    = $_POST['description'];
    $harga = $_POST['harga'];

    $query = mysqli_query($koneksi, "UPDATE books set title='$title', cover='$cover',
    description='$description',
    harga='$harga' WHERE books.id = '$id'");

    if ($query) {
        header('Location:dashboard.php');
    }else {
        echo 'Input gagal';
    }