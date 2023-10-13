<?php 

$conn=mysqli_connect("localhost","root","","mahasiswa");

function query($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while( $row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function tambah($data){
    // var_dump($_POST);
    // ambil data tiap element form
    $npm = htmlspecialchars ($data["npm"]);
    $nama= htmlspecialchars($data["nama"]);
    $email=htmlspecialchars($data["jurusan"]);
    $jurusan=htmlspecialchars($data["jurusan"]);
    $gambar=htmlspecialchars($data["gambar"]);
    $query="INSERT INTO mhs VALUES
        ('','$nama','$npm','$jurusan','$email','$gambar')
         ";
    global $conn;
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}
function hapus($id){
    global $conn;   
    mysqli_query($conn,"DELETE FROM mhs WHERE id=$id");
    return mysqli_affected_rows($conn);
}

?>