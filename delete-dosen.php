<?php

$nidn = $_GET['nidn'];
include "koneksi.php";

$qry = "DELETE FROM dosen WHERE nidn = '$nidn'";
$exec = mysqli_query($con, $qry);
if($exec){
    echo "<script>alert('Data berhasil dihapus'); 
    window.location = 'formulir-dosen.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}