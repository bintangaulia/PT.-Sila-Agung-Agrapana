<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT. Sila Agung Agrapana</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
    <link href="/assets/img/Sila Agug Agrapana.jpg" rel="icon">
    <link href="/assets/img/Sila Agug Agrapana.jpg" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: KnightOne
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Updated: Oct 16 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="blog-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="#hero" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        {{-- <img src="assets/img/saaaaa.png" alt=""> --}}
        <h1 class="sitename">Sila Agung Agrapana</h1>
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
        <h1 style="font-size:70px;">Other Project</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href={{ route('home') }} target="_blank">Home</a></li>
            <li class="current">Other Project</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/b219963c-6545-43c8-8a9f-2f2ccb58b4b9.png"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('toni') }}">Rumah Bp. H. Toni</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Proyek pembangunan rumah tinggal milik Bapak H. Toni ini merupakan salah satu ha....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/e65aec7d-699d-4035-81dd-3df2c6222f60.jpeg"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('ari') }}">Rumah Bp. Ari Lumaksono</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Hunian milik Bp. Ari ini menjalani proses renovasi menyeluruh untuk meng....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/4faea5b9-464d-430f-8b42-9703eb030845.jpeg"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('yudi') }}">Rumah Dr. Yudi Fadillah</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">arsitektur modern yang memadukan estetika elegan dengan fung....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/jeghewrhg4e5t489375634.jpg"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('Reynaldo') }}">Rumah Bp. Reynaldo</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Kami telah melakukan transformasi besar pada setiap sudut, mulai dari fasad yang me....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/dfsguioyehos8y40w9t5u8egj.jpg"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('Melisa') }}">Rumah Ibu Irawaty Melisa</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Hadirkan impian hunian ideal Anda di Rumah Ibu Irawaty Melisa, sebuah properti mena....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/ajghsruieoeeeeeg4658936.jpg"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('Mustofa') }}">Masjid Nurul Mustofa</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author"> Masjid Nurul Mustofa. Lebih dari sekadar bangunan, ini adalah wujud nyata dari semangat kebers....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/jifgwttttttt50689erpig2354235.png"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('Azza') }}">Rumah Ibu Azza</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">hunian istimewa yang memancarkan pesona modern minimalis, dirancang untuk kenya....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/savgeui4wy3877777772t534ug.png"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('Azzam') }}">Rumah Bp. H. Azzam</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Rumah Bp. H. Azzam menawarkan fasad yang menawan dengan atap pelana yang....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/hhhhhhhhhhhhhhhhrge3e3t578w9herg.png"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('Karawaci') }}">Ruko Mutiara Karawaci</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Proyek ini adalah bukti nyata komitmen kami dalam menghadirkan solusi desain dan pembangunan....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/dsagjvewh98t34qwtgjekg.png"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('DasanaXenterBonang') }}">Ruko Dasana Xenter Bonang</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Kami bangga mempersembahkan salah satu proyek komersial kami yang paling....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/sadgvjosirjgvwrieug.png"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('WaterBoomDasanaXenterBonang') }}">Water Boom Dasana Xenter Bonang</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Kami sangat bangga mempersembahkan salah satu proyek rekreasi paling....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/saklef3489htjkwerg.png"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('PerumahanMutiaraGading') }}">Perumahan Mutiara Gading</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Dengan bangga kami persembahkan salah satu proyek perumahan unggulan....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/ad6cbe51-9c56-40eb-9cea-980dcc60c597.jpeg"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('MarketingGalleryMutiaraGading') }}">Marketing Gallery Mutiara Gading</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Dengan bangga kami persembahkan salah satu proyek komersial penting yang telah....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/f324100b-882e-43e7-9ac2-c826d5762304.png"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('RukoLaVrescoMutiaraGading') }}">Ruko La Vresco Mutiara Gading</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Kami dengan bangga mempersembahkan salah satu proyek komersial skala besar yang telah....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/c4cf9cf7-71e5-4c1c-b2bf-2b92f1c0ce9b.png"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('RukoPlazaPasadenaVillaTomang') }}">Ruko Plaza Pasadena Villa Tomang</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Dengan bangga kami persembahkan salah satu proyek komersial paling prestisius yang telah....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/d0403c31-56be-4626-b67a-67f1ac5dc5c5.jpeg"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('PerumahanDukuhBima') }}">Perumahan Dukuh Bima</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Dengan bangga kami persembahkan salah satu proyek perumahan....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/a577c6c7-8074-4530-ac50-f9e529311238.png"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('RukoDramaga') }}">Ruko Dramaga</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Kami dengan bangga mempersembahkan salah satu proyek komersial skala besar yang....</p>

                </div>
              </div>

            </article>
          </div><!-- End post list item -->
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="/assets/img/blog/3386758c-13ad-4516-8ad2-a857c3fb4384.jpeg"
                  alt="" class="img-fluid">
              </div>

              <p class="post-category">Project View</p>

              <h2 class="title">
                <a href="{{ route('PerumahanPluitSamudra') }}">Perumahan Pluit Samudra</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Dengan bangga kami persembahkan salah satu proyek hunian vertikal modern yang telah....</p>

                </div>
              </div>

            </article>
          </div>
        </div>

    </section><!-- /Blog Posts Section -->



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
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
