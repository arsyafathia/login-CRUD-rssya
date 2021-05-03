<?php
include 'koneksi.php';
$kode=$_GET ['kode'];

$query=mysqli_query($koneksi, "DELETE FROM dokter WHERE kode='$kode' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index.php");
} else{
    echo "Gagal hapus data";
}
?>