

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>HALAMAN EDIT PENYAKIT</title>
</head>
<body>
<?php 
		include 'koneksi2.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi2,"SELECT * FROM penyakit WHERE id =$id" );
        while($d = mysqli_fetch_array($data))
        
        {
             
           ?>
            <form method="POST" action="updatepenyakit.php">
            <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']?>">            
            <div class="form-group">
                <label for="nama">Nama Penyakit</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']?>">
            </div>
            <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
            
            </form>
			<?php 
        }
		?>

</body>
</html>