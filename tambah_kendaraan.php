<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
  $jenis_kendaraan = $_POST['jenis_kendaraan'];
  $merk = $_POST['merk'];
  $warna_kendaraan = $_POST['warna_kendaraan'];
  $tahun_kendaraan = $_POST['tahun_kendaraan'];
  $bahan_bakar = $_POST['bahan_bakar'];
  $nomor_polisi = $_POST['nomor_polisi'];
  $nomor_rangka = $_POST['nomor_rangka'];
  $nomor_mesin = $_POST['nomor_mesin'];
  $pemilik = $_POST['pemilik'];
  $alamat_pemilik = $_POST['alamat_pemilik'];

  $query = "INSERT INTO tb_kendaraan (jenis_kendaraan, merk, warna_kendaraan, tahun_kendaraan, bahan_bakar, nomor_polisi, nomor_rangka, nomor_mesin, pemilik, alamat_pemilik) VALUES ('$jenis_kendaraan','$merk','$warna_kendaraan','$tahun_kendaraan','$bahan_bakar','$nomor_polisi','$nomor_rangka','$nomor_mesin','$pemilik','$alamat_pemilik')";
  $sql = mysqli_query($conn, $query);

  if( $sql ) {
    echo "<script>alert('Data berhasil ditambahkan')</script>";
    header("Refresh:0; url=kendaraan.php");
  } else {
    echo "<script>alert('Data gagal ditambahkan')</script>";
    header("Refresh:0; url=kendaraan.php?status=gagal");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kendaraan</title>
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

        form {
            border-collapse: collapse;
            font-family: 'Rubik', sans-serif;
            margin-left: 500px;
        }
    </style>
</head>
<body>
    <div class="judul">
        <h1>SISTEM INFORMASI KEHILANGAN MOTOR</h1>
        <h1>SMK NEGERI 9 SEMARANG | SAMSAT SEMARANG</h1>
    </div><br>
    <p>Data Kendaraan</p>
    <form method="post" action="">
      <table border="1">
        <tr>
          <td>Jenis Kendaraan</td>
          <td>:</td>
          <td><input type="text" name="jenis_kendaraan" required autocomplete="off"></td>
        </tr>
        <tr>
          <td>Merk/Type</td>
          <td>:</td>
          <td><input type="text" name="merk" required autocomplete="off"></td>
        </tr>
        <tr>
          <td>Warna Kendaraan</td>
          <td>:</td>
          <td><input type="text" name="warna_kendaraan" required autocomplete="off"></td>
        </tr>
        <tr>
          <td>Tahun Kendaraan</td>
          <td>:</td>
          <td><input type="text" name="tahun_kendaraan" required autocomplete="off"></td>
        </tr>
        <tr>
          <td>Bahan Bakar</td>
          <td>:</td>
          <td><input type="text" name="bahan_bakar" required autocomplete="off"></td>
        </tr>
        <tr>
          <td>Nomor Polisi</td>
          <td>:</td>
          <td><input type="text" name="nomor_polisi" required autocomplete="off"></td>
        </tr>
        <tr>
          <td>Nomor Rangka</td>
          <td>:</td>
          <td><input type="text" name="nomor_rangka" required autocomplete="off"></td>
        </tr>
        <tr>
          <td>Nomor Mesin</td>
          <td>:</td>
          <td><input type="text" name="nomor_mesin" required autocomplete="off"></td>
        </tr>
        <tr>
          <td>Pemilik</td>
          <td>:</td>
          <td><input type="text" name="pemilik" required autocomplete="off"></td>
        </tr>
        <tr>
          <td>Alamat Pemilik</td>
          <td>:</td>
          <td><input type="text" name="alamat_pemilik" required autocomplete="off"></td>
        </tr>
      </table><br>
      <button type="submit" name="submit">Tambah</button>&nbsp;<button type="button"><a href="kendaraan.php">Kembali</a></button>
    </form>
</body>
</html>