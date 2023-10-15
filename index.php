<?php 
require 'function.php';

$mahasiswa=query("SELECT * FROM mhs ORDER BY id ");
// var_dump($mahasiswa);
if ( isset($_POST["cari"])) {
    $mahasiswa= cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar menggunakan database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-secondary-subtle">
    <div class="bg-info bg-gradient ">
        <h1 class="text-center">Table mahasiswa</h1>
        <div class="caridata container align-middle rounded-pill">
            <a href="tambah.php" ><p class="text-center bg-warning" >Tambah data</p></a>
        </div>
    </div>
    <div class="rounded-2 container ">
    <form action="" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="cari data mahasiswa" aria-label="keyword" aria-describedby="button-addon2" name="keyword" autofocus autocomplete="off">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="cari">Cari</button>
    </div>

    </form>

    <table class=" table table-striped base text-center align-middle " >
    <tr>
        <th>id</th>
        <th>aksi</th>
        <th>nama</th>
        <th>NPM</th>
        <th>Jurusan</th>
        <th>email</th>
        <th>gambar</th>
    </tr>

    <tr>
        <?php $i=1;?>
        <?php foreach ($mahasiswa as $row) :?> 
            <td><?= $i ?></td>
        <td>
        <a href="ubah.php?id=<?= $row['id']?>">ubah</a> |
        <a href="hapus.php?id=<?= $row['id']?>"onclick="return confirm('yakin bro mau dihapus ?')">hapus</a>
        </td>
        <td>
            <?= $row["nama"] ?>
        </td>
        <td>
            <?= $row["npm"] ?>
        </td>
        <td>
            <?= $row["jurusan"] ?>
        </td>
        <td>
            <?= $row["email"] ?>
        </td>
        <td>
            <img src="img/<?= $row["gambar"]?>" alt="">
        </td>
    </tr>
        <?php $i++?>
        <?php endforeach?>

    </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>