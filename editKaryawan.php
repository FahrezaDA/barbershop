<?php
require('koneksi.php');

session_start();

if (!isset($_SESSION['id'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login.php');
}

$sesID = $_SESSION['id'];
$sesName = $_SESSION['name'];

if( isset($_POST['update']) ){
    $userName = $_POST['txt_name'];
    $userAlamat = $_POST['txt_alamat'];
    $userNoTelpon = $_POST['txt_no_telpon'];
    $userEmail = $_POST['txt_email'];
    $userPosisi = $_POST['txt_posisi'];
    $userGaji = $_POST['txt_gaji'];

    $query = "UPDATE user_detail SET user_password='$userPass', user_fullname='$userName' WHERE id='$userId'";
    echo $query;
    $result = mysqli_query($koneksi, $query);
    header('Location: tables.php');
}
$id = $_GET['id'];
$query = "SELECT * FROM user_detail WHERE id='$id'";
$result = mysqli_query($koneksi, $query) or die(mysql_error());
//$nomor = 1;
while ($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $userMail = $row['user_email'];
    $userPass = $row['user_password'];
    $userName = $row['user_fullname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Tambah</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg" style="margin-top: 107px;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="add_pemesanan.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="id_pemesanan" name="txt_id_pemesanan">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="nama_customer" name="txt_nama_customer">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="jenis_pelayanan" name="txt_jenis_pelayanan">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="harga" name="txt_harga">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="no_antrian" name="txt_no_antrian">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="tanggal_pemesanan" name="txt_tanggal_pemesanan">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="id_user" name="txt_id_user">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="id_pelayanan" name="txt_id_pelayanan">
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary btn-user btn-block">TAMBAHKAN</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
