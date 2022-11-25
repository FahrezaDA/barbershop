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
                header('Location: dashboard.php');
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

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Barbershop</title>
  </head>

  <body>

    <sectoin class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="header">
                        <h1>Welcome Back</h1>
                        <p>Welcome back! Please enter your details.</p>  
                    </div>
        
                    <form  class="user" method="POST" action="login2.php">
                    <div class="user login-form" method="POST" action="login2.php">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="txt_email" class="form-control" id="email" placeholder="Enter your Email">
        
                        <label for="password" class="form-label">Password</label> <br>
                        <input type="password" name="txt_password" class="form-control" id="password" placeholder="Enter your Password">
                        <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">login </button>
                        <a href="#" class="text-decoration-none text-center">Forget Password</a>
                        <button class="signin"><a href="dashboard.php" class="d-inline text-decoration-none">Sign In</a></button>
                        <button class="signin-google">
                            <img src="img/icon google.png" alt="" width="25px">
                            Sign In With Google</button>
                            <div class="text-center"><span class="d-inline">Don't have an account? <a href="index.php" class="d-inline text-decoration-none">Sign up</a></span>
                        </div>
                    </div>
                </div>
                </form>
                </div>
            </div>
            
        <div class="login-right w-50 h-100">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/image1.jpeg" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/image2.jpeg" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/image3.jpeg" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </sectoin>
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