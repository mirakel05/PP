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
                <!-- if logo is image enable this -->
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
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">Courses</a>
                        </li>
                        <li class="nav-item mr-lg-1">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <!--/search-right-->
                        <!-- <li class="header-search mr-lg-2 mt-lg-0 mt-4 position-relative">
                            <div class="search-right">
                                <a href="about.php" class="btn btn-style search-btn" title="search"><span class="fas fa-search mr-2" aria-hidden="true"></span> Search</a>

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
    <!--/Banner-Start-->
    <?php
    $sql = "SELECT * FROM banner";
    $data = $conn->query($sql);
    if ($data->num_rows > 0) :
        $i = 1;
        while ($row = $data->fetch_assoc()) :
    ?>
            <section class="bannerw3l-hnyv">
                <div class="banner-layer">
                    <img src="../backend/form/home/banner/file/<?= $row['foto'] ?>" width="100%" alt="">
                    <div class="main-content-top">
                        <div class="container">
                            <div class="main-content">
                                <!-- if logo is image enable this   
                        <a class="logo" href="index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                                <h4><?= $row['nama'] ?></h4>
                                <h3><?= $row['keterangan'] ?><span class="inn-text"><?= $row['keterangan2'] ?></span> </h3>
                                <a href="about.php" class="btn btn-style transparant-btn mt-md-5 mt-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
        endwhile;
    endif;
        ?>
        <!-- <div class="w3apply-admission">
            <div class="apply-admission-wrap">
                <div class="apply-admission-inner">
                    <h4 class="title text-center">
                        <span>Apply for admission</span>
                    </h4>
                    <div class="caption text-center mb-2">
                        Make it more simple!
                    </div>
                    <div class="apply-form">
                        <form action="#" class="" method="post">
                            <input type="text" name="text" placeholder="Your Name" required="">
                            <input type="email" name="email" placeholder="Your Email" required="">
                            <button class="btn btn-style btn-primary">Apply Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
            </section>
            <!--//Banner-End-->
            <!-- /bottom-grids-->
            <section class="w3l-bottom-grids-6 py-5" id="grids">
                <div class="container py-md-5 py-2">
                    <div class="grids-area-hny row text-left pt-lg-5 mt-lg-5">
                        <?php
                        $sql = "SELECT * FROM grid";
                        $data = $conn->query($sql);
                        if ($data->num_rows > 0) :
                            $i = 1;
                            while ($row = $data->fetch_assoc()) :
                        ?>
                                <div class="col-lg-4 col-md-6 grids-feature pr-lg-5">
                                    <div class="area-box">
                                        <span class="fas fa-<?= $row['logo'] ?>"></span>
                                        <h4><a href="#feature" class="title-head"><?= $row['nama'] ?></a></h4>
                                        <p><?= $row['keterangan'] ?></p>

                                    </div>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </section>

            <!-- //bottom-grids-->
            <!--/about-section -->
            <!-- <section class="w3l-homeblock1" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row cwp23-grids align-items-center">
                    <div class="col-lg-6">
                        <h5 class="title-subw3hny">About Us</h5>
                        <h3 class="title-w3l">Find courses on almost any <span class="inn-text">Topic</span></h3>
                        <h6 class="mt-md-4 mt-md-5 mt-4">Build your library for your career
                            <br>and personal growth</h6>
                        <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">View Courses</a>
                    </div>
                    <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-5 pl-lg-5">
                        <div class="cwp23-text-cols row">
                            <div class="column col-6">
                                <div class="column-w3-img position-relative">
                                    <a href="#"><img src="assets/images/1.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Personal Development</a></h4>
                                    </div>
                                </div>
                                <div class="column-w3-img position-relative mt-4">
                                    <a href="#"><img src="assets/images/b8.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Business</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column col-6">
                                <div class="column-w3-img position-relative">
                                    <a href="#"><img src="assets/images/b3.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Entrepreneurship</a></h4>
                                    </div>
                                </div>
                                <div class="column-w3-img position-relative mt-4">
                                    <a href="#"><img src="assets/images/2.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Photography</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
            <!--//about-section -->
            <!--/home-stats-->
            <section class="w3l-stats-main" id="stats">
                <div class="container">
                    <div class="row stats-con py-lg-0 py-5">
                        <?php
                        $sql = "SELECT * FROM foto_stats";
                        $data = $conn->query($sql);
                        if ($data->num_rows > 0) :
                            $i = 1;
                            while ($row = $data->fetch_assoc()) :
                        ?>
                                <div class="col-lg-6 stats-content-right mb-lg-0 mb-lg-5 mb-2">
                                    <a href="#service" class="d-block zoom"><img src="../backend/form/home/foto_stats/file/<?= $row['foto'] ?>" alt="" class="img-fluid" /></a>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                        <div class="col-lg-6 stats-content-left pl-lg-5">
                            <?php
                            $sql = "SELECT * FROM stats";
                            $data = $conn->query($sql);
                            if ($data->num_rows > 0) :
                                $i = 1;
                                while ($row = $data->fetch_assoc()) :
                            ?>

                                    <div class="stats_info counter_grid1 text-left mt-lg-5 mt-4">
                                        <div class="icon stat-icon">
                                            <p class="counter"><?= $row['nomer'] ?></p>
                                        </div>
                                        <div class="stat-icon-des">

                                            <h4>
                                                <?= $row['nama'] ?></h4>
                                            <p class="para-stat"><?= $row['keterangan'] ?></p>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <!--//home-stats-->
            <!--/popular-Courses-->

            <section class="w3l-courses" id="courses">
                <div class="blog py-5">
                    <div class="container py-md-5 py-2">
                        <h5 class="title-subw3hny text-center">Featured Courses</h5>
                        <h3 class="title-w3l text-center">Popular <span class="inn-text">Courses</span></h3>
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM popular";
                            $data = $conn->query($sql);
                            if ($data->num_rows > 0) :
                                $i = 1;
                                while ($row = $data->fetch_assoc()) :
                            ?>
                                    <div class="col-lg-3 col-md-6 item mt-5">
                                        <div class="card">
                                            <div class="card-header p-0 position-relative">
                                                <a href="#" class="zoom d-block">
                                                    <img class="card-img-bottom d-block" src="../backend/form/home/popular/file/<?= $row['foto'] ?>" alt="Card image cap">
                                                </a>
                                                <!-- <div class="post-pos">
                                    <a href="#popular" class="receipe blue">Beginner</a>
                                    <a href="#popular" class="receipe yellow ml-2">New</a>
                                </div> -->
                                            </div>
                                            <div class="card-body course-details">
                                                <!-- <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                    <p>$53.00</p>
                                    <ul class="rating-star">
                                        <li><span class="fas fa-star"></span></li>
                                        <li><span class="fas fa-star"></span></li>
                                        <li><span class="fas fa-star"></span></li>
                                        <li><span class="fas fa-star"></span></li>
                                        <li><span class="fas fa-star-o"></span></li>
                                    </ul>
                                </div> -->
                                                <a href="#" class="course-desc"><?= $row['nama'] ?>
                                                </a>
                                                <div class="course-meta mt-4">
                                                    <div class="meta-item course-lesson">
                                                        <span class="fas fa-users"></span>
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
                            <div class="mt-5 mx-auto text-more text-center pt-lg-4">
                                <a href="courses.php" class="btn btn-style btn-primary">View All Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--//popular-Courses-->
            <!--/testimonials-->
            <?php
            $sql = "SELECT * FROM review";
            $data = $conn->query($sql);
            if ($data->num_rows > 0) :
                $i = 1;
                while ($row = $data->fetch_assoc()) :
            ?>
                    <section style="background: url(../backend/form/home/review/file/<?= $row['foto'] ?>) no-repeat center; 
                            background-size: cover;
                            -webkit-background-size: cover;
                            -o-background-size: cover;
                            -moz-background-size: cover;
                            -ms-background-size: cover;
                            position: relative;
                            z-index: 1;" class="w3l-testimonials" id="testimonials">
                <?php
                endwhile;
            endif;
                ?>
                <!-- /grids -->
                <div class="cusrtomer-layout py-5">
                    <div class="container py-lg-4 py-md-3 py-2 pb-lg-0">
                        <h5 class="title-subw3hny text-center mb-1">Reviews</h5>
                        <h3 class="title-w3l two text-center mb-sm-5 mb-4">Feedbacks</h3>
                        <!-- /grids -->
                        <div class="testimonial-width">
                            <div class="owl-two row">
                                <?php
                                $sql = "SELECT * FROM review";
                                $data = $conn->query($sql);
                                if ($data->num_rows > 0) :
                                    $i = 1;
                                    while ($row = $data->fetch_assoc()) :
                                ?>
                                        <div class="col-lg-4 col-md-6 item mt-md-5 mt-4">
                                            <div class="testimonial-content">
                                                <div class="testimonial">
                                                    <i class="fas fa-quote-right"></i>
                                                    <blockquote>
                                                        <q><?= $row['keterangan'] ?></q>
                                                    </blockquote>
                                                    <div class="testi-des">
                                                        <div class="peopl align-self">
                                                            <h3><?= $row['nama'] ?></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- /grids -->
                </div>
                <!-- //grids -->
                    </section>
                    <!-- //testimonials -->
                    <!--/subscribe-->
                    <!-- <section class="w3l-project" id="subscribe">
        <div class="container-fluid mx-lg-0">
            <div class="row">
                <div class="col-lg-6 bottom-info">
                    <div class="project-header-section text-left">
                        <h5 class="title-subw3hny text-left mb-1">Join With Us</h5>
                        <h3 class="title-w3l">Join us for Free to get instant email updates!</h3>
                        <p class="mt-3 pr-lg-5">Subscribe and get notified at first on the latest update and offers!</p>

                        <form action="#" class="subscribe mt-5" method="post">
                            <input type="email" name="email" placeholder="Your Email Address" required="">
                            <button class="btn btn-style btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 subcribe-img">

                </div>
            </div>
        </div>
    </section> -->
                    <!--//subscribe-->
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