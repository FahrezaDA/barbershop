<?php
require ('koneksi.php');
if(isset($_POST['update'])){
    $userId   = $_POST['txt_id_user'];
    $userNama   = $_POST['txt_nama_user'];
    $userAlamat   = $_POST['txt_alamat'];
    $userNoTelpon = $_POST['txt_no_telpon'];
    $userEmail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userJabatan = $_POST['txt_jabatan'];
    $userLevel = $_POST['txt_level'];
 
 


    $query = "UPDATE user SET nama_user='$userNama', alamat='$userAlamat', no_telpon='$userNoTelpon', email='$userEmail',pass='$userPass', jabatan='$userJabatan', lvl='$userLevel' WHERE id_user='$userId'";
    echo $query;
    $result = mysqli_query($koneksi, $query);
    header('Location: dashboardUser.php');
}
$id = $_GET['id'];
$query = "SELECT * FROM user WHERE id_user='$id'";
$result = mysqli_query($koneksi, $query)or die(mysql_error());
//$nomor = 1;
while ($row = mysqli_fetch_array($result)) {
    $id = $row['id_user'];
    $userNama = $row['nama_user'];
    $userAlamat = $row['alamat'];
    $userNoTelpon = $row['no_telpon'];
    $userEmail = $row['email'];
    $userPass = $row['pass'];
    $userJabatan = $row['jabatan'];
    $userLevel = $row['lvl'];




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
                            <form class="user" action="editUser.php" method="POST">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="ID pemesanan" name="txt_id_user" value="<?php echo $id; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Nama User" name="txt_nama_user" value="<?php echo $userNama; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Jenis Pelayanan" name="txt_alamat" value="<?php echo $userAlamat; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Harga" name="txt_no_telpon" value="<?php echo $userNoTelpon ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="No Antrian" name="txt_email" value="<?php echo $userEmail; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Password" name="txt_pass" value="<?php echo $userPass ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Harga" name="txt_jabatan" value="<?php echo $userJabatan ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Harga" name="txt_level" value="<?php echo $userLevel ?>">
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
<?php } ?>
