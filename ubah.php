<?php 
// modular / kepingan lego untuk satukan
// menghubungkan ke function ...
require 'function.php';

// ambiol data url

$id =$_GET["id"];

$mhs=query("SELECT * FROM mhs WHERE id = $id")[0];
// var_dump($mhs["nama "]);



// koneksi ke dbms
// $conn=mysqli_connect("localhost","root","","mahasiswa");

// cek tombol sudah di klik atau belum
// superglobal varible post metodenya asosiatif 
if ( isset($_POST["submit"])) {
    if( ubah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil diubah')
            document.location.href='index.php'
        </script>        
        ";
    }else{
        echo "
        <script>
            alert('data gagal diubah')
            document.location.href='index.php'
        </script>        
        ";
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tambah mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <h1>UBAH DATA</h1>
    <a href="index.php">balik lagi ke tabel utama</a>

    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
    <ul class="form">
        <li>
            <label for="npm">NPM</label>
            <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"] ?>">
        </li>
        <li>
            <label for="nama">nama :</label>
            <input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>">
        </li>
        <li>
            <label for="email">email :</label>
            <input type="text" name="email" id="email" value="<?= $mhs["email"]?>">
        </li>
        <li>
            <label for="jurusan">jurusan :</label>
            <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>">
        </li>
        <li>
            <label for="gambar">gambar :</label>
            <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"] ?>">
        </li>
        <li>
            <button type="submit" name="submit">Ubah data</button>
        </li>
    </ul>



    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>