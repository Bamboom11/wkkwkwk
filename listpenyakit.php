
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
    td{
        text-align: center;
    }
    th {
        text-align: center;
    }

    .btn-primary{
        margin-top: 10px;
    }

</style>
    <div align="center">
    <h2> DATA PENYAKIT SISTEM PAKAR PENYAKIT PARU</h2>


    <a href="formtambahpenyakit.php" class="btn btn-primary">Tambah Data Penyakit</a>
    <br><br>
    <table class="table table-bordered" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Penyakit</th>
        <th>Aksi</th>
    </tr>
    
    <?php 
    include 'koneksi2.php';
    $no = 1;
    $data = mysqli_query($koneksi2, "SELECT * FROM penyakit");
    while($d = mysqli_fetch_array($data)){
        ?>
        
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $d['nama']; 
            ?></td>
      
            
        
            <td>
                <a href="editpenyakit.php?id=<?php echo $d['id']; ?>" type="button" class="btn btn-warning">EDIT</a>
                <a href="hapuspenyakit.php?id=<?php echo $d['id']; ?>" type="button" class="btn btn-danger" onclick=" return confirm('Hapus Data?')">HAPUS</a>
            </td>
        </tr>
        <?php 
    }
    ?>
    

    
    
    
</body>
</html>