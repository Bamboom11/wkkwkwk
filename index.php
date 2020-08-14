
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>SISTEM PAKAR PENYAKIT</title>
</head>
<body>

<style>
    
    .btn-xs > .btn, .btn-xs {
  padding: .25rem .4rem;
  font-size: .875rem;
  line-height: .5;
  border-radius: .2rem;
}
    
    
    th {
        text-align: center;
    }

    .btn-primary{
        margin-top: 10px;
    }

</style>
    <div align="center">
    <h2>SISTEM PAKAR PENYAKIT PARU</h2>


    <a href="cekkondisi.php" class="btn btn-primary">Cek Diagnosa</a>
    <br><br>
    <table class="table table-bordered" cellspacing="0" width="500px">
    <tr>
        <th>Jenis Gejala</th>
        <th>Penyakit</th>
        <th>Aksi</th>
    </tr>
    
    <?php 
        include 'koneksi.php';
        
		$no = 1;
        $data = mysqli_query($koneksi,"SELECT * FROM keterangan");
        $p = mysqli_query($koneksi,"SELECT  nama FROM penyakit WHERE id = 1 " );
        $q = mysqli_query($koneksi,"SELECT  nama FROM penyakit WHERE id = 2" );
        $z = mysqli_query($koneksi,"SELECT  nama FROM penyakit WHERE id = 3" );
        $w = mysqli_query($koneksi,"SELECT  nama FROM penyakit WHERE id = 4" );
        $u = mysqli_query($koneksi,"SELECT  nama FROM penyakit WHERE id = 5" );
        
        $row = mysqli_fetch_array($p);
        $row2 = mysqli_fetch_array($q);
        $row3 = mysqli_fetch_array($z);
        $row4 = mysqli_fetch_array($w);
        $row5 = mysqli_fetch_array($u);

        
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
                <td><?php echo $d['nama']; 
                ?></td>
          
                <td>
                    <?php  if($d['nama'] == "Batuk sudah lebih dari 3 minggu".","." Batuk berdahak".","." Batuk berdarah"
                    .","." Nyeri di dada".","." Sesak napas ketika beraktivitas agak berat".","." Demam".","
                    ." Berkeringat di malam hari".","." Nafsu makan berkurang".","." Berat badan perlahan menurun".","." dan lelah"." secara"
                    ." tiba-tiba"." (malaise)"){
                        echo $row['nama'];    
                    }else if($d['nama'] == "Batuk sudah lebih dari 3 minggu".","." Sesak napas ketika beraktivitas agak berat".","." Ketika bernapas terdengar suara “ngik” alias mengi".","." Dahak bersifat mukoid (kental serta berwarna hijau)".
                    ","." Dahak bersifat purulen (kuning serta bernanah)" ){
                        echo $row2['nama'];
                    }else if($d['nama'] == "Batuk sudah lebih dari 3 minggu".","." Ketika bernapas terdengar suara “ngik” alias mengi".","." Dada terasa penuh/ketat (chest tightness)".","." Batuk timbul akibat paparan zat tertentu/aktivitas/gangguan emosi/virus".","." Batuk semakin parah pada malam hari".","." Ada riwayat keluarga yang mengidap asma"){
                        echo $row3['nama'];
                    }else if($d['nama'] == "Batuk sudah lebih dari 3 minggu".","." Batuk berdarah".","." Sesak napas ketika beraktivitas agak berat".","." Nafsu makan berkurang".","." Berat badan perlahan menurun".",".
                    " Pembengkakan di leher dan wajah".","." Sangat mudah lelah".","." Nyeri di dada/bahu/punggung".","." Suara parau (serak)"){
                        echo $row4['nama'];
                    }else if($d['nama'] == "Batuk berdahak".","." Batuk berdarah".","." Nyeri di dada".","." Sesak napas ketika beraktivitas agak berat".","." Demam".","." Dahak bersifat mukoid (kental serta berwarna hijau)".","." Dahak bersifat purulen (kuning serta bernanah)".","." Menggigil"){
                        echo $row5['nama'];
                    }
                    else{
                        echo "penyakit tidak diketahui";
                    }
                        ?>
                </td>
                
            </td>
				<td>
					<a href="hapus.php?id=<?php echo $d['id']; ?>" type="button" class="btn btn-danger btn-xs" style="display: inline;" onclick=" return confirm('Hapus Data?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>

    </table>
    
    </div>
</body>
</html>