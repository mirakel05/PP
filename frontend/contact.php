<?php
include '../koneksi.php';
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SMK Negeri Tembarak</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="./assets/css/style-starter.css">
  <link rel="shortcut icon" href="./assets/images/logosmk.png" type="image/x-icon">
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">
        <!-- <h1>
          <a class="navbar-brand" href="index.php">
            <i class="fas fa-chalkboard-teacher"></i> Edukator</a>
        </h1> -->
        <!-- if logo is image enable this    -->
        <a class="navbar-brand" href="index.php">
          <img src="./assets/images/logosmk.png" alt="Your logo" title="" style="height:65px;" /> SMK Negeri Tembarak
        </a>
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="courses.php">Courses</a>
            </li>

            <li class="nav-item mr-lg-1 active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <!--/search-right-->
            <!-- <li class="header-search mr-lg-2 mt-lg-0 mt-4 position-relative">
              <div class="search-right">
                <a href="#search" class="btn btn-style search-btn" title="search"><span class="fas fa-search mr-2" aria-hidden="true"></span> Search</a>

              </div>
            </li> -->
            <!--//search-right-->
          </ul>
        </div>


        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container py-1">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!--/header-->
  <!-- breadcrumb -->
  <?php
  $sql = "SELECT * FROM home";
  $data = $conn->query($sql);
  if ($data->num_rows > 0) :
    $i = 1;
    while ($row = $data->fetch_assoc()) :
  ?>
      <section class="w3l-about-breadcrumb text-center">
        <div style="background: url(../backend/form/contact/home/file/<?= $row['foto'] ?>) no-repeat 0px 0px;
  background-size: cover;
  background-size: cover;
  position: relative;
  z-index: 1;" class="breadcrumb-bg breadcrumb-bg-about py-5">
          <div class="container py-lg-5 py-md-4">
            <div class="w3breadcrumb-gids">
              <div class="w3breadcrumb-left text-left">
                <h2 class="title AboutPageBanner">
                  <?= $row['nama'] ?> </h2>
                <p class="inner-page-para mt-2">
                  <?= $row['alamat'] ?></p>
              </div>
              <div class="w3breadcrumb-right">
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index.php">Home</a></li>
                  <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
  <?php
    endwhile;
  endif;
  ?>
  <!--//breadcrumb-->
  <!-- contacts-5-grid -->
  <?php
  $sql = "SELECT * FROM contact";
  $data = $conn->query($sql);
  if ($data->num_rows > 0) :
    $i = 1;
    while ($row = $data->fetch_assoc()) :
  ?>
      <div class="w3l-contact-10 py-5" id="contact">
        <div class="form-41-mian pt-lg-4 pt-md-3 pb-lg-4">
          <div class="container">
            <div class="heading text-center mx-auto">
              <h5 class="title-subw3hny text-center">Contact our team</h5>
              <h3 class="title-w3l"><?= $row['judul'] ?> </h3>
            </div>
            <div class="contacts-5-grid-main mt-5">
              <div class="contacts-5-grid">
                <div class="map-content-5">
                  <div class="d-grid grid-col-2">
                    <div class="contact-type">
                      <?php
                      $sql = "SELECT * FROM contact";
                      $data = $conn->query($sql);
                      if ($data->num_rows > 0) :
                        $i = 1;
                        while ($row = $data->fetch_assoc()) :
                      ?>
                          <div class="address-grid">
                            <h6><span class="fas fa-<?= $row['logo'] ?>"></span> <?= $row['nama'] ?></h6>
                            <p><?= $row['keterangan'] ?></p>

                          </div>
                      <?php
                        endwhile;
                      endif;
                      ?>
                  <?php
                endwhile;
              endif;
                  ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-inner-cont mt-5">
              <form action="kontak/aksi_tambah.php" method="POST" class="signin-form">
                <div class="form-grids">
                  <div class="form-input">
                    <input type="text" name="nama" placeholder="Enter your name *" required="" />
                  </div>
                  <div class="form-input">
                    <input type="text" name="subjek" placeholder="Enter subject " required />
                  </div>
                  <div class="form-input">
                    <input type="email" name="email" placeholder="Enter your email *" required />
                  </div>
                  <div class="form-input">
                    <input type="text" name="phone" placeholder="Enter your Phone Number *" required />
                  </div>
                </div>
                <div class="form-input">
                  <textarea name="message" placeholder="Type your query here" required=""></textarea>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-style btn-primary" name="submit" value="submit">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- //contacts-5-grid -->
      </div>

      <div class="contacts-sub-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0302281473078!2d110.1734531748511!3d-7.350502172315453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a82fcd2a92d11%3A0xac99faf909e7b1d4!2sSMKN%20Tembarak!5e0!3m2!1sid!2sid!4v1693800787927!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!--/footer-->
      <footer class="w3l-footer-22 position-relative">
        <div class="footer-sub py-5">
          <div class="container py-md-5">
            <div class="row sub-columns">

              <div class="col-lg-4 col-md-6 sub-one-left ab-right-cont pr-lg-5 mb-md-0  mb-4">
                <h6>About </h6>
                <?php
                $sql = "SELECT * FROM about";
                $data = $conn->query($sql);
                if ($data->num_rows > 0) :
                  $i = 1;
                  while ($row = $data->fetch_assoc()) :
                ?>
                    <p><?= $row['keterangan2'] ?></p>
                <?php
                  endwhile;
                endif;
                ?>
                <div class="columns-2">
                  <ul class="social">
                    <li><a href="https://www.facebook.com/smkn.tembarak.73/"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                    </li>
                    <li><a href="https://www.instagram.com/smkntembarak/"><span class="fab fa-instagram" aria-hidden="true"></span></a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UCELUR-hS7lZ3F5n7A6DdYbg"><span class="fab fa-youtube" aria-hidden="true"></span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 sub-two-right pl-lg-5">
                <h6>Useful Links</h6>
                <ul>
                  <li><a href="index.php"><span class="fas fa-chevron-right mr-2"></span>Home</a>
                  </li>
                  <li><a href="about.php"><span class="fas fa-chevron-right mr-2"></span>About</a>
                  </li>
                  <li><a href="courses.php"><span class="fas fa-chevron-right mr-2"></span>Courses</a></li>
                  <li><a href="contact.php"><span class="fas fa-chevron-right mr-2"></span>Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        </div>
      </footer>
      <!-- //footer -->

      <!-- Js scripts -->
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->

      <!-- Template JavaScript -->
      <script src="./assets/js/jquery-3.3.1.min.js"></script>
      <script src="./assets/js/theme-change.js"></script>
      <!-- disable body scroll which navbar is in active -->
      <script>
        $(function() {
          $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
      <!-- disable body scroll which navbar is in active -->

      <!--/MENU-JS-->
      <script>
        $(window).on("scroll", function() {
          var scroll = $(window).scrollTop();

          if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
          } else {
            $("#site-header").removeClass("nav-fixed");
          }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
          $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
          if ($(window).width() > 991) {
            $("header").removeClass("active");
          }
          $(window).on("resize", function() {
            if ($(window).width() > 991) {
              $("header").removeClass("active");
            }
          });
        });
      </script>
      <!--//MENU-JS-->
      <script src="./assets/js/bootstrap.min.js"></script>

</body>

</html>