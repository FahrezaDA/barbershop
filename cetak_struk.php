<?php
require("koneksi.php");
session_start();
if (!empty($_SESSION['id']));
$query = "SELECT*FROM pemesanan where id_pemesanan = '$_SESSION[id]'";

$result = mysqli_query($koneksi, $query); 
       
$row = mysqli_fetch_array($result);
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
                <td><?php echo $row['id_user'] ?></td>
            </tr>
            <tr>
                <td>Customer</td>
                <td>:</td>
                <td><?php echo $row['nama_customer'] ?></td>
            </tr>
            <tr>
                <td>Pelayanan</td>
                <td>:</td>
                <td><?php echo $row['jenis_pelayanan'] ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><?php echo $row['harga'] ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><?php echo $row['tanggal_pemesanan'] ?></td>
            </tr>
            <tr>
                <td>Antrian</td>
                <td>:</td>
                <td><?php echo $row['no_antrian'] ?></td>
            </tr>
        </tbody>
    </table>
</body>