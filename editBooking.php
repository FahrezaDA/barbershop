<?php
require('koneksi.php');
if( isset($_POST['update']) ){
    $userIdPemesanan =$_POST['txt_id'];
    $userCustomer = $_POST['txt_nama_customer'];
    $userJenis = $_POST['txt_jenis_pelayanan'];
    $userHarga = $_POST['txt_harga'];
    $userAntri = $_POST['txt_no_antrian'];
    $userTanggal = $_POST['txt_tanggal_pemesanan'];
    $userId = $_POST['txt_id_user'];
    $userLayanan = $_POST['txt_id_pelayanan'];
    
    

    $query = "UPDATE pemesanan SET nama_customer='$userCustomer', jenis_pelayanan='$userJenis', harga='$userHarga', no_antrian='$userAntri',tanggal_pemesanan='$userTanggal', id_user='$userId', id_pelayanan='$userLayanan' WHERE id_pemesanan='$userIdPemesanan'";
    echo $query;
    $result = mysqli_query($koneksi, $query);
    header('Location: dashboardPemesanan.php');
}

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
    <link href="css/sb-admin-2.css" rel="stylesheet">

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
                            <form class="user" action="editPemesanan.php" method="POST">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="ID pemesanan" name="txt_id" value="<?php echo $id; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Nama Customer" name="txt_nama_customer" value="<?php echo $userCustomer; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Jenis Pelayanan" name="txt_jenis_pelayanan" value="<?php echo $userJenis; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Harga" name="txt_harga" value="<?php echo $userHarga; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="No Antrian" name="txt_no_antrian" value="<?php echo $userAntri; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="Tanggal Pemesanan" name="txt_tanggal_pemesanan" value="<?php echo $userTanggal; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="Id User" name="txt_id_user" value="<?php echo $userId; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="ID Pelayanan" name="txt_id_pelayanan" value="<?php echo $userLayanan; ?>">
                                </div>
                                <button type="submit" name="update" class="btn btn-primary btn-user btn-block">TAMBAHKAN</button>
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