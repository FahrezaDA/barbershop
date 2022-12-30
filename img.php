<?php
if (isset($_POST['tambah'])) {
    $Id     = $_POST['txt_id'];
    $img = upload();

    $query = "UPDATE pemesanan SET bukti_pembayaran='$img' WHERE id_pemesanan='$Id'";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        $succes = "Pembayaran Sukses!";
    } else {
        echo mysqli_error($koneksi);
    }
}
function upload()
{

    $file = $_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek file apakah diupload atau tidak
    if ($error === 4) {
        echo "<script> 
        alert('Pilih gambar terlebih dahulu');
      </script>";
        return false;
    }

    //cek apakah benar gambar
    $extensGambarValid = ['jpg', 'jpeg', 'png'];
    $extensGambar = explode('.', $file);
    $extensGambar = strtolower(end($extensGambar));
    if (!in_array($extensGambar, $extensGambarValid)) {
        echo "<script> 
      alert('Yang anda upload bukan berupa file gambar');
    </script>";
        return false;
    }

    //cek jika ukuran nya terlalu besar 
    if ($size > 1000000) {

        echo "<script> 
        alert('Ukuran gambar terlalu besar');
      </script>";
    }




    //lolos cek 
    move_uploaded_file($tmpName, 'file/' . $extensGambar);
    return $extensGambar;
}