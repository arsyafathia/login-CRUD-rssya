<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <font face="Courier New"> 
        <center>
        <h1>Tambah Data Dokter</h1>
        <font face="Courier New"> 
        <div class="col-md-6">
            <form action="prosestambah.php" method="post">
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