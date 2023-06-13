<?php
include '../Pertemuan9/koneksi.php';

if (!isset($_GET['kode'])){
    header('Location:tampil-data.php');
}

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok= $_POST['stok'];

$sql ="UPDATE barang SET nama_barang='$nama', harga_barang=$harga, stok_barang=$stok WHERE kode_barang='$kode'";

$query = mysqli_query($koneksi,$sql);

if ($query) {
    header('Location:tampil-data.php?pesan=update');
}else{
    echo "Data Gagal Diupdate";
}