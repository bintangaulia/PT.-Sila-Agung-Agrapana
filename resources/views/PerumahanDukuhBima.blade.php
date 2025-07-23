<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PT. Sila Agung Agrapana</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/Sila Agug Agrapana.jpg" rel="icon">
    <link href="assets/img/Sila Agug Agrapana.jpg" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="portfolio-details-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">PT. Sila Agung Agrapana</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('konstruksi') }}">Kontruksi</a></li>
                    <li><a href="{{ route('pricelist') }}">Pricelist</a></li>
                    <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('outher-project') }}">Other Project</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, 0.8) 100%),url(assets/img/page-title-bg.webp); ">
            <div class="container position-relative">
                <h1>Project View</h1>
                <p>Menampilkan hasil karya terbaik kami dalam merancang dan membangun hunian impian dengan presisi dan
                    kualitas tinggi.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="current">Project View</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details section">

            <div class="container" data-aos="fade-up">

                <div class="portfolio-details-slider swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="assets/img/blog/d0403c31-56be-4626-b67a-67f1ac5dc5c5.jpeg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="assets/img/blog/389ebec4-4437-45f9-8706-61c66e1d3b97.png" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="assets/img/blog/7def7f2d-f905-4dc6-843f-4047dff3e6a8.png" alt="">
                        </div>



                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="row justify-content-between gy-4 mt-4">

                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="portfolio-description">
                            <h2>Perumahan Dukuh Bima – Mengubah Impian Hunian Menjadi Nyata, Berkat Jasa Profesional</h2>
                            <p>
                                Dengan bangga kami persembahkan salah satu proyek perumahan unggulan kami: Perumahan Dukuh Bima! Ini adalah bukti nyata kepercayaan yang diberikan oleh klien kami kepada tim profesional kami, dan hasil dari komitmen kami dalam menciptakan lingkungan hunian yang tidak hanya indah secara arsitektur, tetapi juga memberikan kenyamanan maksimal, fungsionalitas optimal, serta nilai investasi yang terus bertumbuh bagi setiap keluarga.
                            </p>
                            <p>
Klien kami mempercayakan kami untuk merancang dan membangun Perumahan Dukuh Bima ini, yang menampilkan rumah-rumah dengan desain modern minimalis yang harmonis dan menawan. Setiap unit dirancang dengan cermat, memadukan fasad yang bersih, atap pelana yang kokoh, serta jendela-jendela yang memaksimalkan pencahayaan alami. Kami memastikan sirkulasi udara optimal, menciptakan suasana interior yang terang dan nyaman di setiap sudut rumah. Lingkungan klaster yang terencana dengan baik juga kami perhatikan, untuk menjamin privasi, keamanan, dan suasana asri yang ideal untuk tumbuh kembang keluarga.
                            </p>
                             <p>
Dari tahap pembangunan pondasi hingga penyelesaian akhir yang sempurna, setiap langkah dalam proyek Perumahan Dukuh Bima telah kami tangani dengan presisi tinggi dan standar kualitas terbaik. Kami menggunakan material pilihan dan tenaga ahli berpengalaman yang merupakan bagian dari tim kami, untuk memastikan setiap rumah yang berdiri kokoh adalah aset berharga yang siap dihuni dengan tenang dan bangga. Keberhasilan proyek ini adalah cerminan dedikasi kami dalam memberikan hasil yang melampaui ekspektasi klien kami.
                            </p>







                        </div>
                    </div>

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info">
                            <h3>Project informasi</h3>
                            <ul>
                                <li><strong>Category</strong> -</li>
                                <li><strong>Client</strong> -</li>
                                <li><strong>Project date</strong> -</li>
                                <li><strong>Project URL</strong> -</li>
                                <li><a
                                        href="https://wa.me/6285649838098?text=Halo%2C%20saya%20ingin%20menghubungi%20Sila%20Agung%20Agrapana."class="btn-visit align-self-start">Hubungi
                                        Kami</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Portfolio Details Section -->

    </main>

    <footer id="footer" class="footer dark-background"
        style="margin-top:60px; padding-top:20px; padding-bottom:10px;">
        <div class="container" style="max-width: 900px;">
            <div class="copyright text-center" style="font-size: 15px;">
                <span>Perusahaan</span> <strong class="px-1 sitename">PT Sila Agung Agrapana</strong>
                <span>2025</span>
            </div>
            <div class="credits text-center" style="font-size: 13px;">
                Jasa : <a href="#hero">Kontuksi Dan Arsitektur</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
