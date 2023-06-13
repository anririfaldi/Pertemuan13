<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    error_reporting(1);
        echo $_GET['pesan'];
    ?>
    <h1>Form Tambah Data</h1>
        <form action="proses-tambah.php" method="post" enctype="multipart/form-data">
            <table>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kode" id=""></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" id=""></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stok" id=""></td>
            </tr>
            </table>
            <label for="">Gambar</label>
            <input type="file" name="Gambar" id="">
            <br>
            <input type="submit" id="simpan">
        </form>

    
</body>
</html>