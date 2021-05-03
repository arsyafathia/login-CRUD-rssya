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
        style = "font-weight: normal">Tabel Pasien</h1>
</pre>
       
        <font face="Courier New">   
        <table border="1" class="text-center">
        <table class="table">
        <thead class="table-dark">

            <tr>
               <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap" >Nomor Pasien</th>
               <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap">Nama Pasien</th>
               <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap">Alamat</th>
               <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap">No Handphone</th>
               <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap">Sakit yang Diderita</th>
               <th width="150px"
                style="background-color:#000000"
                style="white-space:nowrap">Aksi</th>
            </tr>
            <tbody>
            <?php
            include 'koneksi.php';
            $data=mysqli_query($koneksi, "SELECT * From pasien") or die(mysqli_error($koneksi));
            foreach($data as $baris){ ?>
            <tr>
                <td style="background-color:#DCDCDC"><?php echo $baris['nomor'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['namapas'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['alamatpas'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['nopas'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['sakit'] ?></td>
                <td style="background-color:#DCDCDC">
                    <a href="updatepas.php?nomor=<?php echo $baris['nomor'] ?>" class="btn btn-outline-dark">Update Data</a>
                    <a href="deletepas.php?nomor=<?php echo $baris['nomor'] ?>" class="btn btn-outline-dark">Hapus Data</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <p><a href="tambahpas.php">+ Tambah Data</a></p>
    </div>
    
</body>
</html>