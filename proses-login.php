<?php
session_start();
include '../Pertemuan9/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT username, password FROM user WHERE username = '$username' AND password = '$password'";
$query = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($query);
if ($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header('location:tampil-data.php');
}else{
    header('location:login.php?pesan=Login Gagal');
}