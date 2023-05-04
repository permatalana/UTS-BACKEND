<?php

$kode = $_POST['kode_matkul'];
$nama = $_POST['nama_matkul'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];
$jurusan = $_POST['jurusan'];

include "koneksi.php";

$qry = "INSERT INTO matkul VALUE (
    '$kode', '$nama', '$sks', '$semester', '$jurusan'
)";

$exec = mysqli_query($con, $qry) or die (mysqli_error($con));

if($exec){
    echo "<script>alert('Data Berhasil Disimpan');
    window.location = 'formulir-matkul.php';</script>";
}
else{
    echo "<script>alert('Data Gagal Disimpan');</script>";
}

?>