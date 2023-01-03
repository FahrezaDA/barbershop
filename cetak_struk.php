<?php
require("koneksi.php");
session_start();

$id = $_GET['id'];
$query = "SELECT * FROM pemesanan WHERE id_pemesanan='$id'";
$result = mysqli_query($koneksi, $query)or die(mysql_error());
//$nomor = 1;
while ($row =mysqli_fetch_array($result)){
    $id     = $row['id_pemesanan'];
    $userCustomer = $row['nama_customer'];
    $userJenis = $row['jenis_pelayanan'];
    $userHarga = $row['harga'];
    $userAntri = $row['no_antrian'];
    $userTanggal = $row['tanggal_pemesanan'];
    $userKasir = $row['kasirID'];
 
}
?>

<script>


    window.print();
    window.onfocus=function(){window.closed();}
      
</script>

<html>
<head>
    <title></title>
<style>
 
#tabel
{
font-size:15px;
border-collapse:collapse;
}
#tabel  td
{
padding-left:5px;
border: 1px solid black;
}
</style>
</head>

<script>


    window.print();
    window.onfocus=function(){window.closed();}
      
</script>

<body style='font-family:tahoma; font-size:8pt;' onload="window.print()">
<center><table style='width:350px; font-size:12pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='CENTER' vertical-align:top'>
<span style='color:black;'><b>CUT LUCK BARBERSHOP</b>
<br>Jl.Mastrip, Krajan Timur, Kec.Sumbersari</br>
Jember, Jawa Timur, 68121
<br>WA.085632572546</br></span>
</td>
</table>
</style>

<table style='width:350; font-size:12pt;' cellspacing='2'><tr></br><td align='center'>============================</br></td></tr></table></center>

<style>
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
} 
</style>
<br>
<center><table cellspacing='0' cellpadding='0' style='width:350px; font-size:12pt; font-family:calibri;  border-collapse: collapse;' border='0'>            
        <tr>
                <td>Kasir</td>
                <td>:</td>
                <td><?php echo $userKasir?></td>
            </tr>
            <tr>
                <td>Customer</td>
                <td>:</td>
                <td><?php echo $userCustomer ?></td>
            </tr>
            <tr>
                <td>Pelayanan</td>
                <td>:</td>
                <td><?php echo $userJenis ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><?php echo $userHarga ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><?php echo $userTanggal ?></td>
            </tr>
            <tr>
                <td>Antrian</td>
                <td>:</td>
                <td><?php echo $userAntri ?></td>
            </tr>
            <center><table style='width:350; font-size:12pt;' cellspacing='2'><tr></br><td align='center'>------------------------------------------------------</br></td></tr></table></center>
            <center><table>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td><?php echo $userHarga ?></td>
            </tr></table></center>
    </table></center>
    <br>
    <center><table style='width:350; font-size:12pt;' cellspacing='2'><tr></br><td align='center'>****** TERIMAKASIH ******</br></td></tr></table></center>
</body>
</html>