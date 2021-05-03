<?php
include 'koneksi.php';
$nomor=$_GET ['nomor'];

$query=mysqli_query($koneksi, "DELETE FROM pasien WHERE nomor='$nomor' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index.php");
} else{
    echo "Gagal hapus data";
}
?>