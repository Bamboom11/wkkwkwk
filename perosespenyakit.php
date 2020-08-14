<?php 
// koneksi database
include 'koneksi2.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];

 
// menginput data ke database
 $sql = mysqli_query($koneksi2,"insert into penyakit values('','$nama')");
 

 if($sql){
    echo 
"<script>alert('Sukses,Data Berhasil Ditambah');
window.location='listpenyakit.php'</script>";
}

?>