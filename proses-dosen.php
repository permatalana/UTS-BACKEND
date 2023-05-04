<?php

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$jk = $_POST['gender'];
$alamat = $_POST['alamat'];
$no = $_POST['nohp'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];
$almamater = $_POST['almamater'];

include "koneksi.php";

$qry = "INSERT INTO dosen VALUE (
    '$nidn', '$nama', '$jk', '$alamat', '$no', '$email', '$jurusan', '$almamater'
)";

$exec = mysqli_query($con, $qry) or die (mysqli_error($con));

if($exec){
    echo "<script>alert('Data Berhasil Disimpan');
    window.location = 'formulir-dosen.php';</script>";
}
else{
    echo "<script>alert('Data Gagal Disimpan');</script>";
}

?>