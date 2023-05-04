<?php

$nidn = $_GET['nidn'];
include "koneksi.php";
$qry = "SELECT * FROM dosen WHERE nidn = '$nidn'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Dosen</title>
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
<body>
  <ul>
    <li><a href="formulir.php">Data Mahasiswa</a></li>
    <li><a class="active" href="formulir-dosen.php">Data Dosen</a></li>
    <li><a href="formulir-matkul.php">Data Mata Kuliah</a></li>
  </ul><br>
    <fieldset>
      <legend>Form Edit Biodata Dosen</legend>
        <form action="proses_update-dosen.php" method="POST">
        <table>
          <b>lengkapi Biodata dengan benar</b><br>
          <tr>
            <td>NIDN (Nomer Induk Dosen Nasional)</td>
            <td>:</td>
            <td><input type="text" name="nidn" value="<?= $data['nidn'] ?>"></td>
          </tr>
          <tr>
            <td>Nama Dosen</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?= $data['nama_dsn'] ?>"></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php if($data['gender'] == 1) { ?>
                  <input type="radio" name="gender" value="1" checked> laki-laki
                  <input type="radio" name="gender" value="2"> Perempuan
                <?php } else { ?>
                  <input type="radio" name="gender" value="1"> laki-laki
                  <input type="radio" name="gender" value="2" checked> Perempuan
                <?php } ?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?= $data['alamat'] ?>"></td>
          </tr>
          <tr>
            <td>No. HP</td>
            <td>:</td>
            <td><input type="text" name="nohp" value="<?= $data['no_hp'] ?>"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" value="<?= $data['email'] ?>"></td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" value="<?= $data['jurusan'] ?>"></td>
          </tr>
          <tr>
            <td>Almamater</td>
            <td>:</td>
            <td><input type="text" name="almamater" value="<?= $data['almamater'] ?>"></td>
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