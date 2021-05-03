<?php
include 'koneksi.php';

$kode=$_POST['kode'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$spesialis=$_POST['spesialis'];

$query=mysqli_query($koneksi,"INSERT INTO dokter(kode, nama, alamat, nohp, spesialis) VALUES ('$kode', '$nama','$alamat', '$nohp','$spesialis')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: tambah.php");
}else{
    echo"Gagal Input Data";
}

?>