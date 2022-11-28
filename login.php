<?php
require('koneksi.php');
session_start();
if( isset($_POST['submit'])){
    $email = $_POST['txt_email'];
    $pass  = $_POST['txt_password'];
    
    //$emailCheck = mysqli_real_escape_string($koneksi, $email);
    //$passCheck  = mysqli_real_escape_string($koneksi, $pass);
    if(!empty(trim($email)) && !empty(trim($pass))){
        //select data berdasarkan username dari database
        $query  ="SELECT * FROM kasir WHERE email = '$email'";
        $result = mysqli_query($koneksi,$query);
        $num    = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)){
            $id = $row['kasirID'];
            $userName = $row['username'];
            $passVal = $row['password'];
            $userVal = $row['email'];
        }
        if ($num !=0){
            if($userVal==$email && $passVal==$pass){
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $userName;
                header('Location: dashboardPemesanan.php');
            }else{
                $error= 'user atau password salah!!';
                echo'<div id="tampil_modal">
                     <div id="modal">
                    <div id="modal_atas">Informasi</div>
                    <p>Gagal di tambahkan!.</p>
                    <a href="index.php"><button id="oke">Oke</button></a>
                    </div></div>';
            }
        }else{
            $error = 'user tidak di temukan!!';
            echo $error;
        }
    }else{
        $error = 'Data tidak boleh kosong!!';
        echo $error;
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Style-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/sb-admin-2.css">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Barbershop</title>
  </head>

  <body>

  <section class="vh-100 gradient-custom">
  <div class="container py-0 vh-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-form-login text-white" style="border-radius: 1rem;">
          <div class="card-body p-1 text-center">

            <div class="mb-md-5 mt-5 vh-25" style = "height: 400px; !important;">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
            

    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>