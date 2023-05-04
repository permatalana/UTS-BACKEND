<?php

$kode = $_GET['kode_matkul'];
include "koneksi.php";
$qry = "SELECT * FROM matkul WHERE kode_matkul = '$kode'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Matkul</title>
  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover:not(.active) {
      background-color: #111;
    }

    .active {
      background-color: #FCC8D1;
      color: black;
    }
  </style>
</head>
<body>
  <ul>
    <li><a href="formulir.php">Data Mahasiswa</a></li>
    <li><a href="formulir-dosen.php">Data Dosen</a></li>
    <li><a class="active" href="formulir-matkul.php">Data Mata Kuliah</a></li>
  </ul><br>
    <fieldset>
      <legend>Form Edit Data Mata Kuliah</legend>
        <form action="proses_update-matkul.php" method="POST">
        <table>
          <b>lengkapi data dengan benar</b><br>
          <tr>
            <td>Kode Matakuliah</td>
            <td>:</td>
            <td><input type="text" name="kode_matkul" value="<?= $data['kode_matkul'] ?>"></td>
          </tr>
          <tr>
            <td>Nama Mata Kuliah</td>
            <td>:</td>
            <td><input type="text" name="nama_matkul" value="<?= $data['nama_matkul'] ?>"></td>
          </tr>
          <tr>
            <td>Jumlah SKS</td>
            <td>:</td>
            <td><select name="sks">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select></td>
          </tr>
          <tr>
            <td>Semester</td>
            <td>:</td>
            <td><input type="number" name="semester" value="<?= $data['semester'] ?>"></td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><select name="jurusan">
              <option value="001">Sistem Komputer</option>
              <option value="002">Manajemen Informatika</option>
              <option value="003">Sistem Informasi</option>
              <option value="004">Teknologi Informasi</option>
              <option value="005">Bisnis Digital</option>
            </select></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
          </tr>
        </table>
      </form>
    </fieldset>
</body>
</html>