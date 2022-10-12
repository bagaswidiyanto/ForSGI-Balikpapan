<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $website->metaTitle; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="<?= $website->metaKeywords; ?>">
    <meta name="description" content="<?= $website->metaDescription; ?>">

    <!-- Favicon -->
    <link href="<?= base_url(); ?>assets/imagenew/logo-url.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?= base_url(); ?>" class="navbar-brand p-0">
                    <!-- <h1 class="m-0">FitApp</h1> -->
                    <img src="https://admin103.forsgibpn.com/upload/<?= $website->image; ?>" alt=" Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-5 py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About Us</a>
                        <a href="#programs" class="nav-item nav-link">Programs</a>
                        <a href="#merchandise" class="nav-item nav-link">Merchandise</a>
                        <a href="#pengurus" class="nav-item nav-link">Pengurus</a>
                        <!-- <a href="#contact" class="nav-item nav-link">Contact</a> -->
                    </div>
                    <div class="side-menu ms-auto text-end">
                        <?php
                        $number = $website->phone;
                        $n1 = substr($number, 1, 3);
                        $n2 = substr($number, 4, 4);
                        $n3 = substr($number, 8, 4);
                        $wa = $n1 . '-' . $n2 . '-' . $n3;
                        ?>
                        <div class="d-flex py-2 social">
                            <p class="me-3">Media Sosial Kami</p>
                            <a title="Klik untuk bertanya lebih detail" href="https://wa.wizard.id/611e7c"
                                target="_blank" class="contact d-none d-lg-block me-3">+62 <?= $wa; ?> <br>
                                <span>Informasi
                                    selengkapnya</span></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/forsgi.bpn/"
                                target="_blank" title="https://www.instagram.com/forsgi.bpn/"><i
                                    class="fa fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/" target="_blank"
                                title="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a>
                        </div>
                        <a title="Klik untuk bertanya lebih detail" href="https://wa.wizard.id/611e7c" target="_blank"
                            class="contact d-none d-lg-block">+62 <?= $wa; ?> <br> <span>Informasi
                                selengkapnya</span></a>
                    </div>
                </div>
            </nav>

            <div class="hero-header" id="home">
                <div class="container px-lg-5">
                    <div class="row">
                        <div class="col-lg-7 text-center text-lg-start mt-4">
                            <h1 class="mb-4 display-5" data-aos="fade-down" data-aos-duration="500">
                                <?= $homeweb->title; ?></h1>
                            <h3 class="pb-3 display-6" data-aos="fade-right" data-aos-duration="500">
                                <?= $homeweb->Asal; ?></h3>
                            <p class="text-white pb-3" data-aos="fade-up" data-aos-duration="500">
                                <?= $homeweb->deskripsi; ?></p>
                            <a title="Klik untuk bertanya lebih detail" href="https://wa.wizard.id/611e7c"
                                target="_blank" class="btn btn-green py-sm-2 px-3 px-sm-5 rounded-pill me-3"
                                data-aos="fade-up" data-aos-duration="500"><i class="fa fa-whatsapp"
                                    aria-hidden="true"></i> Info Lebih Lanjut</a>
                        </div>
                        <div class="col-lg-5 mt-4 d-flex justify-content-center ">
                            <div class="bg-radius d-flex justify-content-center" data-aos="zoom-in"
                                data-aos-duration="500">
                                <!-- <div class="owl-carousel screenshot-carousel"> -->
                                <img class="img-fluid"
                                    src="https://admin103.forsgibpn.com/upload/<?= $website->image; ?>" alt="">
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>


                    <div class="our-merchandise">
                        <div class="row" data-aos="fade-up" data-aos-duration="2000">
                            <div class="col-lg-12">
                                <div class="text-heading">
                                    <h2>Our <span>Merchandise</span></h2>
                                </div>
                                <div class="slider-container">
                                    <div class="swiper-container merchandise-slider">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($merchandise as $mr) { ?>
                                            <div class="swiper-slide">
                                                <div class="merchandise-item">
                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-lg-7 col-md-7 col-sm-7 col-7 bg-text">
                                                            <div class="text-box">
                                                                <p><?= $mr->title; ?></p>
                                                                <a title="Klik untuk bertanya lebih detail"
                                                                    href="https://wa.wizard.id/611e7c"
                                                                    target="_blank">Beli Sekarang</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 px-0">
                                                            <div class="box-img">
                                                                <img class="img-fluid"
                                                                    src="https://admin103.forsgibpn.com/upload/merchandise/<?= $mr->image; ?>"
                                                                    alt="">
                                                                <div class="bg-price text-center">
                                                                    <p>Rp.
                                                                        <?= number_format($mr->price, 0, ",", "."); ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>