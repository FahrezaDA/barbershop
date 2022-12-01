<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Barbershop</title>
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

  <!-- =======================================================
  * Template Name: UpConstruction - v1.2.1
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>CUTLUCK BARBERSHOP<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar" >
        <ul>
          <li><a href="index.php">Utama</a></li>
          <li><a href="pelayanan.php">Pelayanan </a></li>
          <li><a href="tentangKami.php">Tentang Kami </a></li>
          <li><a href="projects.php">Galeri </a></li>
          <li><a href="blog.php">Pesan </a></li>
          <li><a href="contact.php">Kontak</a></li>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="login.php">Logout</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">WELCOME TO <span>CUTLUCK BARBERSHOP</span></h2>
            <p data-aos="fade-up">Tampil dengan keren setiap hari adalah impian semua pria, berpenampilan menarik dapat dicapai dengan rambut yang rapi dan klimis.
              <br>untuk urusan rambut percayakan pada kami </p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">MULAI</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(https://furnizing.com/files/img/5f79be16b7d3d.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(https://furnizing.com/files/img/5f79bdea7824c.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(https://furnizing.com/files/img/5f79bdcdd1cae.png)"></div>
      <div class="carousel-item" style="background-image: url(https://furnizing.com/files/img/5f79bdab267ab.png)"></div>
      <div class="carousel-item" style="background-image: url(https://furnizing.com/files/img/5f79bda1226e6.jpeg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Barbershop.</h3>
              <p> Barbershop adalah tempat potong/pangkas rambut yang melayani berbagai model rambut dengan pelayanan dan fasilitas terbaik kepada pelanggan <br>sehingga tingkat kenyamanan yang tinggi dapat dirasakan oleh pelanggan
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Kritik dan Saran</h3>
              <p>Berikan kritik dan saran anda kepada kami </p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Nama" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="No Telpon" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Masukkan Pesan " required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Kirimkan</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pelayanan</h2>
          <p>Pelayanan yang kami berikan sangat bervariasi sesuai kebutuhan konsumen</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="Pelayanan/gentlemen cut.jpg" alt="" width="240">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Gentlement Cut</h4>
                    <p>Potongan rambut pria klasik yang biasanya lebih pendek dan ditata dengan belahan samping atau sisir. Terinspirasi oleh potongan rambut vintage yang melambangkan kualitas seorang pria, potongan rambut ini tetap halus dan bergaya sepanjang waktu.</p>
                    <a href="servis_detail.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" dnavata-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="Pelayanan/kids haircut.jpg" alt="" width="265">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Kids Haircut</h4>
                    <p>Pengalaman potong rambut yang ramah dan nyaman untuk si kecil.</p>
                    <a href="servis_detail.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="Pelayanan/grooming and hair tato.jpg" alt="" width="260">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Grooming And Hair Tato</h4>
                    <p>Untuk kamu yang ingin mencari gaya rambut khas. Biarkan barberman kami yang terampil untuk membentuk dan merancang gaya rambut-mu seperti hasil mahakaryanya.</p>
                    <a href="servis_detail.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="Pelayanan/black hair coloring.jpg" alt="" width="260">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Black Hair Coloring</h4>
                    <p>Ubah rambut ubanmu menjadi rambut hitam berkilau</p>
                    <a href="servis_detail.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="Pelayanan/smoothing.jpg" alt="" width="260">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Smoothing</h4>
                    <p>Pelurusan rambut dengan hasil yang natural</p>
                    <a href="servis_detail.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="Pelayanan/perm hair treatment.jpg" alt="" width="220">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Perm Hair Treatment</h4>
                    <p>Pengeritingan rambut dengan hasil yang natural dan trendy</p>
                    <a href=".php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->


        </div>

      </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Fasilitas</h2>
          <p>Mengutamakan kenyaman adalah prioritas kami untuk membuat anda nyaman di barbershop, maka dari itu kami memberikan fasilitas terbaik untuk anda.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Ruangan ber-AC</h3>
              <p>Barbershop kami menggunakan air conditioner agar suasana selalu terasa lebih dingin supaya bisa dirasakan oleh pelangan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Free wifi</h3>
              <p>Untuk ke stabilan dan kenyamanan berinternet kami memasang wifi dan bisa bisa digunakan oleh pelanggan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Hiburan diruang tunggu</h3>
              <p>Nah sembari pelanggann menunggu antrian, kami menyediakan tv, majalah dan buku yang bisa anda nikmati.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Minuman & Snack</h3>
              <p>Untuk menunda lapar pada saat menunggu antrian, pelanggan bisa mengganjal lapar dan haus saat di barbershop.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Kursi barber</h3>
              <p>Barbershop memiliki kursi yang empuk dan tentunya berkualitas, agar pelanggan bisa duduk dengan nyaman pada saat potong rambut.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Toilet</h3>
              <p>Kami menyediakan toilet bagi pelanggan barbershop yang bersih dan rapi tentunya agar pelanggan tidak merasa risih.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

   <div class="container ">
     <div class="row">
       <div class="col-md-6">
        <div class="col-lg-8 img-bg" class="img-fluid" data-aos="zoom-in" data-aos-delay="100">
          <h3>Kekurangan Cutluck Barbershop</h3>
          <p>Dalam barbershop pastinya ada kekurangan seperti pangkas rambut pada umumnya, ada beberapa point kekurangan untuk pengetahuan anda supaya bisa meminalimisir kekurangan tersebut. Berikut ada beberdapa kekurangan yang ada di barbershop </p>

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
            <div>
              <h4><a href="" class="stretched-link">1.Karyawan Yang Kurang Handal </a></h4>
              <p>Perlu anda ketahui, Membuka usaha pangkas rambut khusus untuk karyawan cukur yang ahli sangat sulit. Kriteria karyawan yang membidangi seperti rapi, mampu mencukur dalam berbagai kondisi, serta pandai teknik.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <div>
              <h4><a href="" class="stretched-link">2. Tarif Yang Sangat Mahal </a></h4>
              <p>Dalam barbershop kita harus mematok harga sesuai standart, jika mematok harga diatas rata- rata pelanggan akan pinda ke tempat potong rambut yang lebih murah dari barbershop.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <div>
              <h4><a href="" class="stretched-link">3. Peralatan Yang Tidak Memadai </a></h4>
              <p>kekurang yang terpenting pada barbershop yaitu pada peralatan potong rambut, jika kita tidak mempunyai alat yang memadai untuk pangkas rambut maka pelanggan tidak akan datang lagi ke barbershop.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <div>
              <h4><a href="" class="stretched-link">4. Tempat Yang Kotor </a></h4>
              <p>Karyawan pangkas rambut mesti rajin membersihkan bagian kursi dan lantai, selain itu pada peralatan cukur. Jika tidak dibersihkan maka akan menimbulkan kesan jorok bagi pelanggan. Ini salah satu kekurangan Pangkas rambut yaitu kita harus ekstra rajin.</p>
            </div>
          </div><!-- End Icon Box -->

        </div>
       </div>
       <div class="col-md-6">
        <div class="col-lg-8 img-bg" class="img-fluid" data-aos="zoom-in" data-aos-delay="100">
          <h3>Kelebihan CutLuck Barbershop </h3>
          <p>pangkas rambut di barbershop lebih dari sekadar potong rambut dengan layanan dan suasana berbeda. Tempat pangkas rambut kekinian ini memiliki sejumlah kelebihan yang cukup menguntungkan. Karena itu, berikut lima alasan pria harus potong rambut di barbershop.</p>
          
          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
            <div>
              <h4><a href="" class="stretched-link">1. Karyawan yang professional</a></h4>
              <p>Barberman dilatih untuk melakukan langkah-langkah yang berbeda dari staf atau tukang cukur biasa. Mereka memiliki keahlian khusus untuk memotong rambut bahkan dalam hal mencukur cambang dan kumis.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <div>
              <h4><a href="" class="stretched-link">2. Peralatan yang lengkap</a></h4>
              <p>Alat yang digunakan oleh barberman untuk memotong rambut juga berbeda dengan salon biasa, yakni menggunakan clipper yang memang sangat cocok untuk memotong rambut pria.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <div>
              <h4><a href="" class="stretched-link">3. Pelayanan yang memuaskan</a></h4>
              <p>Barbershop menyediakan handuk hangat agar membuat kamu rileks. Satu lagi layanan setelah potong rambut selesai, adalah pijatan pada bagian pundak, kepala dan punggung yang akan menenangkan.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <div>
              <h4><a href="" class="stretched-link">4. Suasana yang nyaman</a></h4>
              <p>Barbershop bisa dipastikan memiliki air conditioner dan koneksi internet yang cepat. Kenyamanan yang dihadirkan barbershop biasanya juga menjadikan keakrabakan antara customer dan barberman untuk bertukar informasi terkait men’s grooming.</p>
            </div>
          </div><!-- End Icon Box -->

        </div>
      </div>
     </div>
   </div>

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Galeri</h2>
        </div>

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
                  <a href="assets/img/projects/coloring-1.jpg" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
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
                <img src="assets/img/projects/model-10.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="assets/img/projects/model-10.jpg" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
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
              <li><i class="bi bi-chevron-right"></i> <a href="blog.html">Pesan</a></li>
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



    

