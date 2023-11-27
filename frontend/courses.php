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
            <li class="nav-item active">
              <a class="nav-link" href="course.php">Courses</a>
            </li>
            <li class="nav-item mr-lg-1">
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
  $sql = "SELECT * FROM courses";
  $data = $conn->query($sql);
  if ($data->num_rows > 0) :
    $i = 1;
    while ($row = $data->fetch_assoc()) :
  ?>
      <section class="w3l-about-breadcrumb text-center">
        <div style="background: url(../backend/form/courses/courses/file/<?= $row['foto'] ?>) no-repeat 0px 0px;
  background-size: cover;
  background-size: cover;
  position: relative;
  z-index: 1;" class="breadcrumb-bg breadcrumb-bg-about py-5">
          <div class="container py-lg-5 py-md-4">
            <div class="w3breadcrumb-gids">
              <div class="w3breadcrumb-left text-left">
                <h2 class="title AboutPageBanner">
                  Courses</h2>
                <p class="inner-page-para mt-2">
                  <?= $row['alamat'] ?></p>
              </div>
              <div class="w3breadcrumb-right">
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index.php">Home</a></li>
                  <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Courses</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--//breadcrumb-->
      <!--/-->
      <section class="w3l-homeblock1" id="about">
        <div class="midd-w3 py-5">
          <div class="container py-lg-5 py-md-3">
            <div class="row cwp23-grids align-items-center">
              <div class="col-lg-6">
                <h5 class="title-subw3hny">Find Courses</h5>
                <h3 class="title-w3l">Program Keahlian</h3>
                <h6 class="mt-md-4 mt-md-5 mt-4"><?= $row['keterangan'] ?></h6>
                <a href="about.php" class="btn btn-style btn-primary mt-lg-5 mt-4">View About</a>
              </div>
              <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-5 pl-lg-5">
                <div class="cwp23-text-cols row">
                  <p class=""><?= $row['keterangan2'] ?></p>
                </div>
              </div>
            </div>
          </div>
      <?php
    endwhile;
  endif;
      ?>
      </section>
      <!--//-->
      <!--/popular-Courses-->
      <?php
      $sql = "SELECT * FROM kegiatan";
      $data = $conn->query($sql);
      if ($data->num_rows > 0) :
        $i = 1;
        while ($row = $data->fetch_assoc()) :
      ?>
          <section class="w3l-courses" id="courses">
            <div class="blog py-5">
              <div class="container py-md-5 py-2">
                <h5 class="title-subw3hny text-center">Activity</h5>
                <h3 class="title-w3l text-center">Kegiatan di SMK Negeri Tembarak</h3>
                <div class="row">
                  <?php
                  $sql = "SELECT * FROM kegiatan";
                  $data = $conn->query($sql);
                  if ($data->num_rows > 0) :
                    $i = 1;
                    while ($row = $data->fetch_assoc()) :
                  ?>
                      <div class="col-lg-3 col-md-6 item mt-5">
                        <div class="card">
                          <div class="card-header p-0 position-relative">
                            <a href="#course-single" class="zoom d-block">
                              <img class="card-img-bottom d-block" src="../backend/form/courses/kegiatan/file/<?= $row['foto'] ?>" alt="Card image cap">
                            </a>
                          </div>
                          <div class="card-body course-details">
                            <a href="#course-single" class="course-desc"><?= $row['nama'] ?>
                            </a>
                            <div class="course-meta mt-4">
                              <div class="meta-item course-lesson">
                                <!-- <span class="fas fa-users"></span> -->
                                <span class="meta-value"> <?= $row['keterangan'] ?></span>
                              </div>
                            </div>
                          </div>
                        </div>
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
          </section>
          <!--//popular-Courses-->
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