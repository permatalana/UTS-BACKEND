<html>
    <head>
        <title>Data Dosen</title>
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
            <li><a class="active" href="formulir-dosen.php">Data Dosen</a></li>
            <li><a href="formulir-matkul.php">Data Mata Kuliah</a></li>
        </ul><br>
        <fieldset>
            <legend>Form Input Biodata Dosen</legend>
        <form action="proses-dosen.php" method="POST">
        <table>
            <b>lengkapi Biodata dengan benar</b><br>
            <tr>
                <td>NIDN (Nomer Induk Dosen Nasional)</td>
                <td>:</td>
                <td><input type="text" name="nidn"></td>
            </tr>
            <tr>
                <td>Nama Dosen</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><label><input type="radio" name="gender" value="1">Laki-laki</label>
                <label><input type="radio" name="gender" value="2">Perempuan</label></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>:</td>
                <td><input type="text" name="nohp"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>Almamater</td>
                <td>:</td>
                <td><input type="text" name="almamater"></td>
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
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Almamater</th>
                    <th>Aksi</th>
                </tr>

                <?php
                    include "koneksi.php";
                    $qry = "SELECT * FROM dosen";
                    $exec = mysqli_query($con, $qry);
                    while($data = mysqli_fetch_assoc($exec))
                    {
                ?>
                <tr>
                    <td><?= $data['nidn']?></td>
                    <td><?= $data['nama_dsn']?></td>
                    <td><?= $data['gender']?></td>
                    <td><?= $data['alamat']?></td>
                    <td><?= $data['no_hp']?></td>
                    <td><?= $data['email']?></td>
                    <td><?= $data['jurusan']?></td>
                    <td><?= $data['almamater']?></td>
                    <td><a href="edit-dosen.php?nidn=<?= $data['nidn']?>">
                            <button class="button">Edit</button>
                        </a>
                        <a href="delete-dosen.php?nidn=<?= $data['nidn']?>">
                            <button class="button">Hapus</button>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>