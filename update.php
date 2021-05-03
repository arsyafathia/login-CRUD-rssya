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
        <h1 >Update Data Dokter</h1>
        <?php
            include 'koneksi.php';
            $kode=$_GET['kode'];
            $data=mysqli_query($koneksi, "SELECT * FROM dokter WHERE kode='$kode' ") or die(mysqli_error($koneksi));
            $baris=mysqli_fetch_array($data);
        ?>
        <div class="col-md-6">
        <font face="Courier New">   
        <form action="prosesupdate.php?kode=<?php echo $kode ?>" method="post">
        <label for="kode"
        <font face="Courier New">Kode Dokter</label>
                <input type="number" class="form-control" name="kode">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Dr.xxx">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat">
                <label for="nohp">No Handphone</label>
                <input type="number" class="form-control" name="nohp">
                <label for="spesialis">Spesialis</label>
                <select class="form-select" name="spesialis"><br>
                <option selected>Pilihan</option>
                <option value="Jantung">Umum</option>
                <option value="Otak">Jantung</option>
                <option value="Gigi">Gigi</option>
                <option value="THT">THT</option>
                <option value="Otak">Otak</option>
                <option value="Bedah">Bedah</option>
                <option value="Tulang">Tulang</option>
                </select>
                <button class="btn btn-primary" type="submit" name="button">Simpan Data</button>
        </form>
        </div>
    </div>
    
</body>
</html>