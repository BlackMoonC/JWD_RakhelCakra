<?php
header('Content-Type: application/json; charset=utf8');
//panggil koneksi.php
include("koneksi.php");

$sql = "SELECT * FROM books";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

$array = array();
while ($data = mysqli_fetch_array($query))
    $array[] = $data;

echo json_encode($array);
