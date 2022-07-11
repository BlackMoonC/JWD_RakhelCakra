<?php
    include('koneksi.php');
    $id = $_GET['id'];
    $delete = mysqli_query($koneksi, "DELETE FROM books WHERE books.id = '$id'");
    if ($delete) {
        header('Location:dashboard.php');
    } else {
        echo "File tidak ada";
    }
?>