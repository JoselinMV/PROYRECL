<?php
session_start();
if (!(isset($_SESSION['usuario']) && strlen($_SESSION['usuario']) > 1)) {
    printf("<script> alert('No se puede acceder a esta sección')</script>");
    printf("<script>window.location.href = 'login.html';</script>");
}
$usuario = $_SESSION['usuario'];
$apellido = $_SESSION['apellido'];
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Second Life - <?= $usuario . ' ' . $apellido ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/lightslider.min.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row menu-wrapper align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Logo-2 -->
                            <div class="logo2">
                                <a href="index.html"><img src="assets/img/logo/logo2.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Inicio</a></li>
                                        <li><a href="#">Productos</a></li>
                                        <li><a href="#">Acerca</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-right1 d-flex align-items-center">
                            <div class="search">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <!-- Search Box -->
                                        <form action="#" class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Buscar Productos">
                                            <div class="search-icon">
                                                <i class="ti-search"></i>
                                            </div>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="assets/php/cerrarSesion.php" class="account-btn" target=""><?= $usuario . ' ' . $apellido ?></a>
                                    </li>
                                    <li>
                                        <div class="card-stor">
                                            <img src="assets/img/icon/card.svg" alt="">
                                            <span>0</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider hero-overly1 slider-height d-flex align-items-center slider-bg1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="hero__caption">
                                    <span>70% Sale off </span>
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Prouctos Second Life</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Suspendisse varius enim in eros elementum
                                        tristique. Duis cursus, mi quis viverra ornare, eros
                                        dolor interdum nulla.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInUp" data-delay=".7s">
                                        <a href="industries.html" class="btn hero-btn">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Properties Start -->
        <section class="properties new-arrival fix">
            <div class="container">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <h2>Productos Populares</h2>
                            <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</P>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="properties__button text-center">
                            <!--Nav Button  -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-Sofa-tab" data-toggle="tab" href="#nav-Sofa" role="tab" aria-controls="nav-Sofa" aria-selected="true">Sofa</a>
                                    <a class="nav-item nav-link" id="nav-Table-tab" data-toggle="tab" href="#nav-Table" role="tab" aria-controls="nav-Table" aria-selected="false">Table</a>
                                    <a class="nav-item nav-link" id="nav-Chair-tab" data-toggle="tab" href="#nav-Chair" role="tab" aria-controls="nav-Chair" aria-selected="false">Chair</a>

                                    <a class="nav-item nav-link" id="nav-Bed-tab" data-toggle="tab" href="#nav-Bed" role="tab" aria-controls="nav-Bed" aria-selected="false">Bed</a>
                                    <a class="nav-item nav-link" id="nav-Lightning-tab" data-toggle="tab" href="#nav-Lightning" role="tab" aria-controls="nav-Lightning" aria-selected="false">Lightning</a>
                                    <a class="nav-item nav-link" id="nav-Decore-tab" data-toggle="tab" href="#nav-Decore" role="tab" aria-controls="nav-Decore" aria-selected="false">Decore</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Nav Card -->
                    <div class="tab-content" id="nav-tabContent">
                        <!-- card one -->
                        <div class="tab-pane fade show active" id="nav-Sofa" role="tabpanel" aria-labelledby="nav-Sofa-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular1.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular2.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular3.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card two -->
                        <div class="tab-pane fade" id="nav-Table" role="tabpanel" aria-labelledby="nav-Table-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular1.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular2.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular3.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card three -->
                        <div class="tab-pane fade" id="nav-Chair" role="tabpanel" aria-labelledby="nav-Chair-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular1.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular2.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular3.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card FOUR -->
                        <div class="tab-pane fade" id="nav-Bed" role="tabpanel" aria-labelledby="nav-Bed-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular1.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular2.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular3.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card FIVE -->
                        <div class="tab-pane fade" id="nav-Lightning" role="tabpanel" aria-labelledby="nav-Lightning-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular1.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular2.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular3.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card SIX -->
                        <div class="tab-pane fade" id="nav-Decore" role="tabpanel" aria-labelledby="nav-Decore-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular1.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular2.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular3.png" alt="">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Nav Card -->
                </div>
            </div>
        </section>
        <!-- Properties End -->
        <!--? Visit Our Tailor Start -->
        <div class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <h2>Best Furniture<br> manufacturer</h2>
                <p>Suspendisse varius enim in eros elementum
                    tristique. Duis cursus, mi quis viverra ornare, eros
                    dolor interdum nulla.</p>
                <p class="pera-bottom">Suspendisse varius enim in eros elementum
                    tristique. Duis cursus, mi quis viverra ornare, eros
                    dolor interdum nulla.</p>
                <a href="#" class="btn">Discover More</a>
            </div>

        </div>
        <!-- Visit Our Tailor End -->
        <!--? New Arrival-2 Start -->
        <div class="new-arrival new-arrival2">
            <div class="container">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                            <h2>Products you may like</h2>
                            <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</P>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular4.png" alt="">
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                <span>$367</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular5.png" alt="">
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                <span>$367</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular6.png" alt="">
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                <span>$367</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="row justify-content-center">
                    <div class="room-btn">
                        <a href="product.html" class="border-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <!--? New Arrival End -->
        <!--? instagram-social start -->
        <div class="instagram-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="instra-tittle mb-40">
                            <div class="section-tittle">
                                <img src="assets/img/gallery/insta.png" alt="">
                                <h2>Get Inspired with Instagram</h2>
                                <P class="mb-35">Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</P>
                                <a href="product.html" class="border-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="row no-gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="single-instagram">
                                    <img src="assets/img//gallery/instra1.png" alt="" class="w-100">
                                    <a href="#"><i class="ti-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="single-instagram">
                                    <img src="assets/img//gallery/instra2.png" alt="" class="w-100">
                                    <a href="#"><i class="ti-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- instagram-social End -->
        <!--? New Arrival-3 Start -->
        <div class="new-arrival new-arrival2">
            <div class="container">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                            <h2>Top Pick</h2>
                            <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</P>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular7.png" alt="">
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                <span>$367</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular8.png" alt="">
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                <span>$367</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular9.png" alt="">
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                                <span>$367</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="row justify-content-center">
                    <div class="room-btn">
                        <a href="product.html" class="border-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <!--? New Arrival End -->
        <!-- Popular Locations End -->
        <!--? Services Area Start -->
        <div class="categories-area section-padding40 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services1.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Fast & Free Delivery</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services2.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Secure Payment</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Money Back Guarantee</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services4.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Online Support</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Services Area End -->
    </main>
    <footer>
        <div class="footer-wrapper">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container ">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-35">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick links</h4>
                                    <ul>
                                        <li><a href="#">Image Licensin</a></li>
                                        <li><a href="#">Style Guide</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Shop Category</h4>
                                    <ul>
                                        <li><a href="#">Image Licensin</a></li>
                                        <li><a href="#">Style Guide</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Pertners</h4>
                                    <ul>
                                        <li><a href="#">Image Licensin</a></li>
                                        <li><a href="#">Style Guide</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <!-- Slick-slider , Owl-Carousel ,slick-nav -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- One Page, Animated-HeadLin, Date Picker , price, light-slider -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>
    <script src="./assets/js/gijgo.min.js"></script>
    <script src="./assets/js/lightslider.min.js"></script>
    <script src="./assets/js/price_rangs.js"></script>

    <!-- Nice-select, sticky,Progress -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>
