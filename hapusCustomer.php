<?php
require('koneksi.php');
$id= $_GET['id'];
mysqli_query($koneksi,"DELETE FROM user WHERE id_user='$id'") or die (mysql_error());
header("location:dashboardUser.php");
