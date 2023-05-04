<html>
    <head>
        <title>Data Mata Kuliah</title>
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

        .table table {  
        border-collapse: collapse;
        }

        .table th {
        text-align: center;
        padding: 8px;
        background-color: #FCC8D1;
        color: black;
        }

        .table td {
        text-align: left;
        padding: 8px;
        }

        .button {
        background-color: #FCC8D1;
        border: none;
        color: black;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
        margin: 4px 2px;
        cursor: pointer;
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
            <legend>Form Input Data Mata Kuliah</legend>
        <form action="proses-matkul.php" method="POST">
        <table>
            <b>lengkapi data dengan benar</b><br>
            <tr>
                <td>Kode Matakuliah</td>
                <td>:</td>
                <td><input type="text" name="kode_matkul"></td>
            </tr>
            <tr>
                <td>Nama Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="nama_matkul"></td>
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
                <td><input type="number" name="semester"></td>
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
        </fieldset><br>

        <div class="table">
            <table border="1">
                <tr>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>

                <?php
                    include "koneksi.php";
                    $qry = "SELECT * FROM matkul";
                    $exec = mysqli_query($con, $qry);
                    while($data = mysqli_fetch_assoc($exec))
                    {
                ?>
                <tr>
                    <td><?= $data['kode_matkul']?></td>
                    <td><?= $data['nama_matkul']?></td>
                    <td><?= $data['sks']?></td>
                    <td><?= $data['semester']?></td>
                    <td><?= $data['jurusan']?></td>
                    <td><a href="edit-matkul.php?kode_matkul=<?= $data['kode_matkul']?>">
                            <button class="button">Edit</button>
                        </a>
                        <a href="delete-matkul.php?kode_matkul=<?= $data['kode_matkul']?>">
                            <button class="button">Hapus</button>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>