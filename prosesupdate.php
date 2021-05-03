<?php
include 'koneksi.php';
$kodelama=$_GET['kode'];
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$spesialis=$_POST['spesialis'];

$query=mysqli_query($koneksi, "UPDATE dokter SET kode='$kode', nama='$nama', alamat='$alamat', nohp='$nohp', spesialis='$spesialis' WHERE kode='$kodelama' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index.php");
} else{
    echo "Data Gagal di Update";
}
?>