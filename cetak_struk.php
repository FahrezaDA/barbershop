<?php
require("koneksi.php");
session_start();
if (!empty($_SESSION['id']));
$query = "SELECT*FROM pemesanan where id_pemesanan = '$_SESSION[id]'";
$result = mysqli_query($koneksi, $query);       
$row = mysqli_fetch_array($result);

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
    $userId = $row['id_user'];
    $userLayanan = $row['id_pelayanan'];
    
    
}
?>

<script>


    window.print();
    window.onfocus=function(){window.closed();}
      
</script>

<body onload="window.print()">
    


    <table>

    <tbody>
        <tr>
            <td>CUT LUCK BARBERSHOP</td>
        </tr>
        <tr>
        <td>Jl.Mastrip, Krajan Timur
                Kec.Sumbersari
            <br>    
                Jember, Jawa Timur, 68121</td>
        </tr>
        <tr>
            <td>WA.085632572546</td>
        </tr>
    </tbody>
    </table>

    <hr width="30%" align="left">

    <table>
        <tbody>
            
        <tr>
                <td>Kasir</td>
                <td>:</td>
                <td><?php echo $id?></td>
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
        </tbody>
    </table>
</body>