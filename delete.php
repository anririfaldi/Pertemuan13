<?php
include'../Pertemuan9/koneksi.php';

$kode = $_GET['kode'];

$sql ="DELETE FROM barang WHERE kode_barang ='$kode' ";
$query = mysqli_query($koneksi, $sql);

if ($query){
    header('location:tampil-data.php?pesan=hapus');
}else{
    echo "Data Gagal Dihapus";
}