<?php
    include '../Pertemuan9/koneksi.php';
    error_reporting(1);

    $kode = htmlspecialchars($_POST['kode']);
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);
    $stok = htmlspecialchars($_POST['stok']);

    $sql = "Select * FROM barang WHERE kode_barang = '$kode'";
    $query = mysqli_query($koneksi, $sql);
    $baris = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);
    if ($row > 0){
        // echo "Data Sudah Ada";
        header("location:tambah-data.php?pesan=Kode <b>$baris[kode_barang]</b> Sudah Ada 😜😜😜");
    }else{
        $sql_insert = "INSERT INTO barang VALUES('$kode', '$nama', '$harga', '$stok')";
    $query_insert = mysqli_query($koneksi, $sql_insert);

    if ($query_insert) {
        header('Location:tampil-data.php?pesan=tambah');
    }else{
        echo "Gagal Menyimpan Data";
        header('Location:tambah-data.php');
    }
    }