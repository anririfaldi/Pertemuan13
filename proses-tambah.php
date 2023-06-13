<?php
    include '../Pertemuan9/koneksi.php';
    error_reporting(1);

    $kode = htmlspecialchars($_POST['kode']);
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);
    $stok = htmlspecialchars($_POST['stok']);

    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $extallow = ['jpg', 'jpeg', 'png'];
    $validext = explode(".", $namafile);
    $extvalid = strtolower(end($validext));
    $tmpname = ['gambar']['tmp_name'];

    if($ukuranfile < 2000){
        if (in_array($extvalid, $extallow)){
            echo "Extension Sesuai";
        }echo "Extension Sesuai";
    }else{
        echo "Aneh";
    }
    die();

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