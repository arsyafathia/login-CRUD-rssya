<?php
include 'koneksi.php';
$nomorlama=$_GET['nomor'];
$nomor=$_POST['nomor'];
$namapas=$_POST['namapas'];
$alamatpas=$_POST['alamatpas'];
$nopas=$_POST['nopas'];
$sakit=$_POST['sakit'];

$query=mysqli_query($koneksi, "UPDATE pasien SET nomor='$nomor', namapas='$namapas', alamatpas='$alamatpas', nopas='$nopas', sakit='$sakit' WHERE nomor='$nomorlama' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index.php");
} else{
    echo "Data Gagal di Update";
}
?>