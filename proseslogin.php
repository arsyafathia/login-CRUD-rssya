<?php
session_start();
$koneksibaru = mysqli_connect("localhost","root", "", "rssya");
$email = $_POST["email"];
$password = $_POST["password"];
$query = mysqli_query($koneksibaru, "SELECT*FROM user WHERE email='$email' AND password='$password'")
or die( mysqli_error($koneksibaru));

if ($data = mysqli_fetch_array($query)){
    $_SESSION["email"] = $data['email'];
    $_SESSION["alert"] = "anda berhasil login";
    header("Location:index.php");

}else{
    $_SESSION["alert"]="email atau password salah";
    header("Location:login.php");
}
?>