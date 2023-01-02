<?php
require ('koneksi.php');
if(isset($_POST['update'])){
    $userId   = $_POST['txt_id'];
    $userJenis  = $_POST['txt_jenis_pengeluaran'];
    $userFasilitas  = $_POST['txt_id_fasilitas'];
    $userJumlah = $_POST['txt_jumlah'];
    $userBiaya = $_POST['txt_biaya'];
    $userPengeluaran = $_POST['txt_tanggal_pengeluaran'];
    $userKasir = $_POST['txt_kasir'];
    
    
    $query = "UPDATE pengeluaran SET jenis_pengeluaran='$userJenis', id_fasilitas='$userFasilitas', jumlah='$userJumlah', biaya='$userBiaya', tanggal_pengeluaran='$userPengeluaran', id_kasir='$userKasir' WHERE id_pengeluaran='$userId'";
    echo $query;
    $result = mysqli_query($koneksi, $query);
    header('Location: dashboardPengeluaran.php');
}
$id = $_GET['id'];
$query = "SELECT * FROM pengeluaran  WHERE id_pengeluaran='$id'";
$result = mysqli_query($koneksi, $query)or die(mysqli_error($koneksi));
//$nomor = 1;
while ($row =mysqli_fetch_array($result)){
    $id     = $row['id_pengeluaran'];
    $userJenis = $row['jenis_pengeluaran'];
    $userFasilitas = $row['id_fasilitas'];
    $userJumlah = $row['jumlah'];
    $userBiaya= $row['biaya'];
    $userPengeluaran= $row['tanggal_pengeluaran'];
    $userKasir = $row['id_kasir'];

    
?>
<html>
<head>
<meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
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
                    <form class="user" action="editPengeluaran.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" class="form-control form-control-user" id="exampleInputUsername"
                                placeholder="ID pemesanan" name="txt_id" value="<?php echo $id; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                placeholder="Jenis Pengeluaran" name="txt_jenis_pengeluaran" value="<?php echo $userJenis; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                placeholder="Jenis Pelayanan" name="txt_id_fasilitas" value="<?php echo $userFasilitas; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Harga" name="txt_jumlah" value="<?php echo $userJumlah; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="No Antrian" name="txt_biaya" value="<?php echo $userBiaya; ?>">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="Tanggal Pemesanan" name="txt_tanggal_pengeluaran" value="<?php echo $userPengeluaran; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="ID Pelayanan" name="txt_kasir" value="<?php echo $userKasir; ?>">
                        </div>
                        <button type="submit" name="update" class="btn btn-primary btn-user btn-block"> UPDATE </button>
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
