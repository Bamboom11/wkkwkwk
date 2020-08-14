<?php

include 'koneksi2.php';

$id = $_POST['id'];
$nama = $_POST['nama'];

$sql = mysqli_query($koneksi2, "UPDATE penyakit SET nama='$nama' WHERE id='$id'");

if($sql){
    echo 
"<script>alert('Sukses,Data Berhasil Diubah');
window.location='listpenyakit.php'</script>";
}

?>