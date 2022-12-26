<?php
require ('koneksi.php');
if(isset($_POST['update'])){
    $userId   = $_POST['txt_id_customer'];
    $userName   = $_POST['txt_nama_customer'];
    $userAlamat   = $_POST['txt_alamat'];
    $userNoTelpon = $_POST['txt_no_telpon'];
    $userEmail = $_POST['txt_email'];


    $query = "UPDATE customer SET nama_customer='$userName', alamat='$userAlamat', email='$userEmail', no_telpon='$userNoTelpon' WHERE id_customer='$userId'";
    echo $query;
    $result = mysqli_query($koneksi, $query);
    header('Location: dashboardCustomer.php');
}
$id = $_GET['id'];
$query = "SELECT * FROM customer WHERE id_customer='$id'";
$result = mysqli_query($koneksi, $query)or die(mysql_error());
//$nomor = 1;
while ($row =mysqli_fetch_array($result)){
    $id     = $row['id_customer'];
    $userName = $row['nama_customer'];
    $userAlamat = $row['alamat'];
    $userEmail= $row['email'];
    $userNoTelpon = $row['no_telpon'];
?>

<html>
<head>
    <title>Update</title>
</head>
<body>
    <form class="user" action="editCustomer.php" method="POST">
        <p><input type="hidden" name="txt_id" value="<?php echo $id; ?>"></p>
        <p>Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_nama_customer" value="<?php echo $userName; ?>"></p>
        <p>Alamat : <input type="text" name="txt_alamat" value="<?php echo $userAlamat; ?>"></p>
        <p>No Telpon: <input type="text" name="txt_no_telpon" value="<?php echo $userNoTelpon; ?>"></p>
        <p>email : <input type="text" name="txt_email" value="<?php echo $userEmail ; ?>"></p>
        <button type="submit" name="update" aria-activedescendant="">Update</button>
    </form>
    <p><a href="index.php">Kembali</p>
</body>
</html> 
<?php } ?>   
