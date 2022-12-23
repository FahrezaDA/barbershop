<?php
require('koneksi.php');
$id= $_GET['id'];
mysqli_query($koneksi,"DELETE FROM booking WHERE id_booking='$id'") or die (mysql_error());
header("location:dashboardBooking.php");
