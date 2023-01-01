<?php
require ('koneksi.php');
if(isset($_POST['update'])){
    $userId   = $_POST['txt_id'];
    $userJenisPengeluaran   = $_POST['txt_jenis_pengluaran'];
    $userIdFasilitas  = $_POST['txt_id_fasilitas'];
    $userJumlah = $_POST['txt_jumlah'];
    $userBiaya = $_POST['txt_biaya'];
    $userTotalPengeluaran = $_POST['txt_total_pengeluaran'];
    $userTanggalPengeluaran = $_POST['txt_tanggal_pengeluaran'];
    $userIdUser = $_POST['txt_id_user'];
    

    $query = "UPDATE pengeluaran SET jenis_pengeluaran='$userJenisPengeluaran', id_fasilitas='$userIdFasilitas', jumlah='$userJumlah', biaya='$userBiaya', total_pengeluaran='$userTotalPengeluaran', tanggal_pengeluaran='$userTanggalPengeluaran', id_user='$userIdUser' WHERE id_pengeluaran='$userId'";
    echo $query;
    $result = mysqli_query($koneksi, $query);
    header('Location: dashboardKaryawan.php');
}

$id = $_GET['id'];
$query = "SELECT * FROM pengeluaran  WHERE id_pengeluaran='$id'";
$result = mysqli_query($koneksi, $query)or die(mysqli_error($koneksi));
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
                                placeholder="Nama Customer" name="txt_jenis_pengluaran" value="<?php echo $userJenisPengeluaran; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputUsername"
                                placeholder="Jenis Pelayanan" name="txt_id_fasilitas" value="<?php echo $userIdFasilitas; ?>">
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
                                placeholder="Tanggal Pemesanan" name="txt_total_pengeluaran" value="<?php echo $userTotalPengeluaran; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="Id User" name="txt_tanggal_pengeluaran" value="<?php echo $userTanggalPengeluaran; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="ID Pelayanan" name="txt_id_user" value="<?php echo $userIdUser; ?>">
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
