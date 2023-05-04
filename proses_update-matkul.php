<?php

$kode = $_POST['kode_matkul'];
$nama = $_POST['nama_matkul'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];
$jurusan = $_POST['jurusan'];

include "koneksi.php";

$qry = "UPDATE matkul SET 
        nama_matkul = '$nama',
        sks = '$sks',
        semester = '$semester',
        jurusan = '$jurusan'
        WHERE kode_matkul = '$kode'
        ";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil diupdate'); 
    window.location = 'formulir-matkul.php';</script>";
}else{
    echo "<script>alert('Data gagal diupdate');</script>";
}
