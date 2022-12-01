<?php
require ('koneksi.php');
if(isset($_POST['update'])){
    $userId   = $_POST['txt_id'];
    $userName   = $_POST['txt_nama_karyawan'];
    $userAlamat   = $_POST['txt_alamat'];
    $userNoTelpon = $_POST['txt_no_telpon'];
    $userEmail = $_POST['txt_email'];
    $userPosisi= $_POST['txt_posisi'];
    $userGaji = $_POST['txt_gaji'];


    $query = "UPDATE karyawan SET nama_karyawan='$userName', alamat='$userAlamat', no_telpon='$userNoTelpon', email='$userEmail', posisi='$userPosisi', gaji='$userGaji' WHERE karyawanID='$userId'";
    echo $query;
    $result = mysqli_query($koneksi, $query);
    header('Location: dashboardKaryawan.php');
}
$id = $_GET['id'];
$query = "SELECT * FROM karyawan WHERE karyawanID='$id'";
$result = mysqli_query($koneksi, $query)or die(mysql_error());
//$nomor = 1;
while ($row =mysqli_fetch_array($result)){
    $id     = $row['karyawanID'];
    $userName = $row['nama_karyawan'];
    $userAlamat = $row['alamat'];
    $userNoTelpon = $row['no_telpon'];
    $userEmail= $row['email'];
    $userPosisi = $row['posisi'];
    $userGaji = $row['gaji'];

    
?>
<html>
<head>
    <title>Update</title>
</head>
<body>
    <form class="user" action="editKaryawan.php" method="POST">
        <p><input type="hidden" name="txt_id" value="<?php echo $id; ?>"></p>
        <p>Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_nama_karyawan" value="<?php echo $userName; ?>"></p>
        <p>Alamat : <input type="text" name="txt_alamat" value="<?php echo $userAlamat; ?>"></p>
        <p>No Telpon: <input type="text" name="txt_no_telpon" value="<?php echo $userNoTelpon; ?>"></p>
        <p>email : <input type="text" name="txt_email" value="<?php echo $userEmail ; ?>"></p>
        <p>posisi : <input type="text" name="txt_posisi" value="<?php echo $userPosisi; ?>"></p>
        <p>Gaji &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_gaji" value="<?php echo $userGaji; ?>"></p>
        <button type="submit" name="update" aria-activedescendant="">Update</button>
    </form>
    <p><a href="index.php">Kembali</p>
</body>
</html> 
<?php } ?>   
