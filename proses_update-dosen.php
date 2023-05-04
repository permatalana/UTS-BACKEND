<?php

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['nohp'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];
$almamater = $_POST['almamater'];

include "koneksi.php";

$qry = "UPDATE dosen SET 
        nama_dsn = '$nama',
        gender = '$gender',
        alamat = '$alamat',
        no_hp = '$no_hp',
        email = '$email',
        jurusan = '$jurusan',
        almamater = '$almamater'
        WHERE nidn = '$nidn'
        ";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil diupdate'); 
    window.location = 'formulir-dosen.php';</script>";
}else{
    echo "<script>alert('Data gagal diupdate');</script>";
}
