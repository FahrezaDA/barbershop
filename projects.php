<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UpConstruction Bootstrap Template - Projects</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>CUTLUCK BARBERSHOP</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Utama</a></li>
          <li><a href="pelayanan.php">Pelayanan</a></li>
          <li><a href="tentangKami.php">Tentang Kami </a></li>
          <li><a href="project.php">Galeri </a></li>
          <li><a href="kontak.php">Kontak </a></li>
          <li><a href="dashboardPemesanan.php">Dashboard </a></li>
          <li><a href="login.php">Logout </a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('gambar/background.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Galeri</h2>
        <ol>
          <li><a href="index.php">Utama</a></li>
          <li>Galeri</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-remodeling">Model</li>
            <li data-filter=".filter-construction">Coloring</li>
            <li data-filter=".filter-repairs">Creambath</li>
            <li data-filter=".filter-design">Styling</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-1.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pelayanan-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelayanan Creambath</h4>
                  <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                  <a href="assets/img/projects/pelayanan-1.jpg" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/coloring-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Contoh Coloring</h4>
                  <p>Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                  <a href="assets/img/projects/coloring-1.jpg" title="Coloring 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/style-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Style</h4>
                  <p>Dengan Style yang rapi akan membuat anda lebih tampan</p>
                  <a href="assets/img/projects/style-1.jpg" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-2.png" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-3.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pelayanan-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelayanan Creambath</h4>
                  <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                  <a href="assets/img/projects/pelayanan-2.jpg" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-4.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-5.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/coloring-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Contoh Coloring</h4>
                  <p>Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                  <a href="assets/img/projects/coloring-2.jpg" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/coloring-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Contoh Coloring</h4>
                  <p>Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                  <a href="assets/img/projects/coloring-3.jpg" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/style-2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Style</h4>
                  <p>Dengan Style yang rapi akan membuat anda lebih tampan</p>
                  <a href="assets/img/projects/style-2.png" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-6.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-6.png" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pelayanan-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelayanan Creambath</h4>
                  <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                  <a href="assets/img/projects/pelayanan-3.jpg" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/style-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Style</h4>
                  <p>Dengan Style yang rapi akan membuat anda lebih tampan</p>
                  <a href="assets/img/projects/style-3.jpg" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/coloring-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Contoh Coloring</h4>
                  <p>Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                  <a href="assets/img/projects/coloring-4.jpg" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-7.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-8.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/style-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Style</h4>
                  <p>Dengan Style yang rapi akan membuat anda lebih tampan</p>
                  <a href="assets/img/projects/style-4.jpg" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/coloring-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Contoh Coloring</h4>
                  <p>Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                  <a href="assets/img/projects/coloring-5.jpg" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pelayanan-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelayanan Creambath</h4>
                  <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                  <a href="assets/img/projects/pelayanan-4.jpg" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-9.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/coloring-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Contoh Coloring</h4>
                  <p>Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                  <a href="assets/img/projects/coloring-6.jpg" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-10.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-10.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-11.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-11.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/style-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Style</h4>
                  <p>Dengan Style yang rapi akan membuat anda lebih tampan</p>
                  <a href="assets/img/projects/style-5.jpg" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-12.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-12.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-13.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-13.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pelayanan-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelayanan Creambath</h4>
                  <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                  <a href="assets/img/projects/pelayanan-5.jpg" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/style-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Style</h4>
                  <p>Dengan Style yang rapi akan membuat anda lebih tampan</p>
                  <a href="assets/img/projects/style-6.jpg" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-14.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-14.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pelayanan-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelayanan Creambath</h4>
                  <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                  <a href="assets/img/projects/pelayanan-6.jpg" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/model-15.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-15.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pelayanan-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelayanan Creambath</h4>
                  <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                  <a href="assets/img/projects/pelayanan-7.jpg" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pelayanan-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelayanan Creambath</h4>
                  <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                  <a href="assets/img/projects/pelayanan-8.jpg" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            
          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>CutLuck</h3> <br><br>
            <p>
              Jl.Mastrip,  Krajan Timur <br>
                Kec.Sumbersari, Jember <br>
                Jawa Timur, 68121<br><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Halaman</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="index.php">Utama</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="pelayanan.php">Pelayanan</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="tentangKami.php">Tentang Kami</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="projects.php">Galeri</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="kontak.php">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Tim Kami</h4>
            <ul>
              <li> Fahreza Daffa Assefy </li>
              <li> Lucki Wahyu M</li>
              <li> Khoiyimatul Hosniah</li>
              <li> Retno Ayu Nawang W</li>
              <li> Suci Nur Kholisah</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial Media</h4>
            <p>Anda dapat menghubungi kami dengan</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>CutLuck BarberShop</span></strong>. Manajemen Informatika
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
