<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
    <font face="Courier New">
    <center> 
        <h1>Update Data Pasien</h1>
        <?php
            include 'koneksi.php';
            $nomor=$_GET['nomor'];
            $data=mysqli_query($koneksi, "SELECT * FROM pasien WHERE nomor='$nomor' ") or die(mysqli_error($koneksi));
            $baris=mysqli_fetch_array($data);
        ?>
        <div class="col-md-6">
        <font face="Courier New">   
        <form action="prosesupdatepas.php?nomor=<?php echo $nomor ?>" method="post">
        <label for="nomor"
        <font face="Courier New">Nomor Pasien</label>
                <input type="nomor" class="form-control" name="nomor">
                <label for="namapas">Nama</label>
                <input type="text" class="form-control" name="namapas">
                <label for="alamatpas">Alamat</label>
                <input type="text" class="form-control" name="alamatpas">
                <label for="nopas">No Handphone</label>
                <input type="number" class="form-control" name="nopas">
                <label for="sakit">Sakit yang Diderita</label>
                <input type="text" class="form-control" name="sakit">
                <button class="btn btn-primary" type="submit" name="button">Simpan Data</button>
        </form>
        </div>
    </div>
    
</body>
</html>