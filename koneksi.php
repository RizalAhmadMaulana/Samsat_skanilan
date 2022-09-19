<?php
$conn = mysqli_connect("localhost","root","","db_samsat");
 
// cek koneksi apakah sudah berhasil apa blm
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>