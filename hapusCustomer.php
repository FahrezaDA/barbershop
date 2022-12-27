<?php
require('koneksi.php');
$id= $_GET['id'];
mysqli_query($koneksi,"DELETE FROM customer WHERE id_customer='$id'") or die (mysql_error());
header("location:dashboardCustomer.php");
