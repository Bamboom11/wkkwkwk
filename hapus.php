<?php

// koneksi kedatabase
include 'koneksi.php';

// menangkap id yang dikirimkan
$id = $_GET['id'];

// menghapus data

$sql = mysqli_query($koneksi, "DELETE FROM keterangan WHERE id=$id");

// kembali kehalaman index
header("Location:index.php");


?>