<?php 
// modular / kepingan lego untuk satukan
// menghubungkan ke function ...
require 'function.php';


// koneksi ke dbms
$conn=mysqli_connect("localhost","root","","mahasiswa");

// cek tombol sudah di klik atau belum
// superglobal varible post metodenya asosiatif 
if ( isset($_POST["submit"])) {
    if( tambah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil ditambahkan')
            document.location.href='index.php'
        </script>        
        ";
    }else{
        echo "
        <script>
            alert('data gagal ditambahkan')
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
    <h1>tambah mahasiswa</h1>
    <a href="index.php">balik lagi ke tabel utama</a>

    <form action="" method="post">
    <ul class="form">
        <li>
            <label for="npm">NPM</label>
            <input type="text" name="npm" id="npm" required>
        </li>
        <li>
            <label for="nama">nama :</label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="email">email :</label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label for="jurusan">jurusan :</label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
            <label for="gambar">gambar :</label>
            <input type="text" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Tambah data</button>
        </li>
    </ul>



    </form>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>