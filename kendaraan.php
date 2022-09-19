<?php 
include 'koneksi.php';

if (isset($_GET['jenis_kendaraan'])) {
    $jenis_kendaraan = $_GET['jenis_kendaraan'];
    $query = "DELETE FROM db_samsat WHERE jenis_kendaraan=$jenis_kendaraan";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('Location: kendaraan.php?hapus=sukses');
    } else {
        echo "<script>alert('Data gagal dihapus')</script>";
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendaraan</title>
    <style>
        html {
            background-color: limegreen;
        }

        .judul {
            text-align: center;
            position: relative;
            width: auto;
            height: 110px;
            background-color: yellow;
        }

        p {
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: bold;
            font-size: 20px;

        }

        input {
            padding-left: 5px;
        }

        label {
            padding-left: 10;
        }

        table,
        th,
        td {
            border: 2px solid black;
            border-collapse: collapse;
            font-family: 'Rubik', sans-serif;
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <div class="judul">
        <h1>SISTEM INFORMASI KEHILANGAN MOTOR</h1>
        <h1>SMK NEGERI 9 SEMARANG | SAMSAT SEMARANG</h1>
    </div><br>
    <center><a href="tambah_kendaraan.php">[+] Tambah Data</a></center>
    <p>Data Kendaraan</p>
    <table border="1">
            <tr>
                <th>Jenis Kendaraan</th>
                <th>Merk/Type</th>
                <th>Warna Kendaraan</th>
                <th>Tahun Kendaraan</th>
                <th>Bahan Bakar</th>
                <th>Nomor Polisi</th>
                <th>Nomor Rangka</th>
                <th>Nomor Mesin</th>
                <th>Pemilik</th>
                <th>Alamat Pemilik</th>
                <th>Aksi</th>
            </tr>
            <?php
                $query = mysqli_query($conn, "SELECT * FROM tb_kendaraan");
                    while ($data = mysqli_fetch_array($query)) {
                ?>
            <tr>
                <td><?php echo $data['jenis_kendaraan']; ?></td>
                <td><?php echo $data['merk']; ?></td>
                <td><?php echo $data['warna_kendaraan']; ?></td>
                <td><?php echo $data['tahun_kendaraan']; ?></td>
                <td><?php echo $data['bahan_bakar']; ?></td>
                <td><?php echo $data['nomor_polisi']; ?></td>
                <td><?php echo $data['nomor_rangka']; ?></td>
                <td><?php echo $data['nomor_mesin']; ?></td>
                <td><?php echo $data['pemilik']; ?></td>
                <td><?php echo $data['alamat_pemilik']; ?></td>
                <td><a href='edit_kendaraan.php?id=<?= $data['id'] ?>'>Edit | <a href='kendaraan.php?jenis_kendaraan="<?= $data['jenis_kendaraan'] ?>"'>Hapus</a></a></td>
            </tr>
                <?php
                }
                ?>
        </table>

    
</body>
</html>