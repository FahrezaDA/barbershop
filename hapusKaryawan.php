<?php
require('koneksi.php');
$id= $_GET['id'];
mysqli_query($koneksi,"DELETE FROM karyawan WHERE karyawanID='$id'") or die (mysql_error());
header("location:dashboard.php");
