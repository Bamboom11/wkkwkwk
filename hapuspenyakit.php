<?php

// koneksi kedatabase
include 'koneksi2.php';

// menangkap id yang dikirimkan
$id = $_GET['id'];

// menghapus data

$sql = mysqli_query($koneksi2, "DELETE FROM penyakit WHERE id=$id");

// kembali kehalaman index
header("Location:listpenyakit.php");


?>