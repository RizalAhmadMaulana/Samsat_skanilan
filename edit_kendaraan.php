<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM tb_kendaraan WHERE id=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql); 
if (mysqli_num_rows($sql) < 1) {
  echo "<script>alert('Data tidak ditemukan')</script>";
}

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

  $query = "UPDATE tb_kendaraan SET jenis_kendaraan='$jenis_kendaraan', merk='$merk', warna_kendaraan='$warna_kendaraan', tahun_kendaraan='$tahun_kendaraan', bahan_bakar='$bahan_bakar', nomor_polisi='$nomor_polisi', nomor_rangka='$nomor_rangka', nomor_mesin='$nomor_mesin', pemilik='$pemilik', alamat_pemilik='$alamat_pemilik' WHERE id=$id";
  $sql = mysqli_query($conn, $query);
  if ($sql)  {
    header('Location: kendaraan.php?edit=sukses.php');
  } else {
    echo "<script>alert('Data gagal diedit')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kendaraan</title>
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
          <td><input type="text" name="jenis_kendaraan" required autocomplete="off" value="<?php echo $data['jenis_kendaraan']; ?>"></td>
        </tr>
        <tr>
          <td>Merk/Type</td>
          <td>:</td>
          <td><input type="text" name="merk" required autocomplete="off" value="<?php echo $data['merk']; ?>"></td>
        </tr>
        <tr>
          <td>Warna Kendaraan</td>
          <td>:</td>
          <td><input type="text" name="warna_kendaraan" required autocomplete="off" value="<?php echo $data['warna_kendaraan']; ?>"></td>
        </tr>
        <tr>
          <td>Tahun Kendaraan</td>
          <td>:</td>
          <td><input type="text" name="tahun_kendaraan" required autocomplete="off" value="<?php echo $data['tahun_kendaraan']; ?>"></td>
        </tr>
        <tr>
          <td>Bahan Bakar</td>
          <td>:</td>
          <td><input type="text" name="bahan_bakar" required autocomplete="off" value="<?php echo $data['bahan_bakar']; ?>"></td>
        </tr>
        <tr>
          <td>Nomor Polisi</td>
          <td>:</td>
          <td><input type="text" name="nomor_polisi" required autocomplete="off" value="<?php echo $data['nomor_polisi']; ?>"></td>
        </tr>
        <tr>
          <td>Nomor Rangka</td>
          <td>:</td>
          <td><input type="text" name="nomor_rangka" required autocomplete="off" value="<?php echo $data['nomor_rangka']; ?>"></td>
        </tr>
        <tr>
          <td>Nomor Mesin</td>
          <td>:</td>
          <td><input type="text" name="nomor_mesin" required autocomplete="off" value="<?php echo $data['nomor_mesin']; ?>"></td>
        </tr>
        <tr>
          <td>Pemilik</td>
          <td>:</td>
          <td><input type="text" name="pemilik" required autocomplete="off" value="<?php echo $data['pemilik']; ?>"></td>
        </tr>
        <tr>
          <td>Alamat Pemilik</td>
          <td>:</td>
          <td><input type="text" name="alamat_pemilik" required autocomplete="off" value="<?php echo $data['alamat_pemilik']; ?>"></td>
        </tr>
      </table><br>
      <button type="submit" name="submit">Update</button>&nbsp;<button type="button"><a href="kendaraan.php">Kembali</a></button>
    </form>
</body>
</html>