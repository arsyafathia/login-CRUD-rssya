<?php
include 'koneksi.php';

$nomor=$_POST['nomor'];
$namapas=$_POST['namapas'];
$alamatpas=$_POST['alamatpas'];
$nopas=$_POST['nopas'];
$sakit=$_POST['sakit'];

$query=mysqli_query($koneksi,"INSERT INTO pasien (nomor, namapas, alamatpas, nopas, sakit) VALUES ('$nomor', '$namapas','$alamatpas', '$nopas','$sakit')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: tambahpas.php");
}else{
    echo"Gagal Input Data";
}

?>