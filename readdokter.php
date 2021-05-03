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
        <center>
        <div class="p-3 mb-2 bg-secondary text-white"></div>
            <pre>
        <h1 style = "font-family: Lucida Console,monospace"
        style = "font-weight: normal">Tabel Dokter</h1>
</pre>
       
        <font face="Courier New">   
        <table border="1" class="text-center">
        <table class="table">
        <thead class="table-dark">

            <tr>
               <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap" >Kode Dokter</th>
               <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap">Nama Dokter</th>
               <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap">Alamat</th>
               <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap">No Handphone</th>
               <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap">Spesialis</th>
                <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap">Aksi</th>
            </tr>
            <tbody>
            <?php
            include 'koneksi.php';
            $data=mysqli_query($koneksi, "SELECT * From dokter") or die(mysqli_error($koneksi));
            foreach($data as $baris){ ?>
            <tr>
                <td style="background-color:#DCDCDC"><?php echo $baris['kode'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['nama'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['alamat'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['nohp'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['spesialis'] ?></td>
                <td style="background-color:#DCDCDC">
                    <a href="update.php?kode=<?php echo $baris['kode'] ?>" class="btn btn-outline-dark">Update Data</a>
                    <a href="delete.php?kode=<?php echo $baris['kode'] ?>" class="btn btn-outline-dark">Hapus Data</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <p><a href="tambah.php">+ Tambah Data</a></p>
    </div>
    
</body>
</html>