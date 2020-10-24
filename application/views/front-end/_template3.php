<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>GIS SEKOLAH GRATIS</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('icon.png') ?>">


    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('mag/style.css') ?>">



</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="<?= base_url('') ?>" class="nav-brand"><img src="<?= base_url('icon2.png') ?>" alt=""></a>


                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="<?= base_url('web') ?>">Home</a></li>
                                    <li><a href="<?= base_url('web/profil') ?>">Profil</a></li>
                                    <li><a href="<?= base_url('web/lokasi') ?>">Lokasi</a> </li>
                                    <li><a href="<?= base_url('web/berita') ?>">Berita</a></li>
                                    <li><a href="<?= base_url('web/komentar') ?>">Komentar</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <!-- <div class="top-search-area">
                <form action="index.html" method="post">
                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div> -->
                            <!-- Login -->
                            <!-- <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a> -->
                            <!-- Submit Video -->
                            <a href="<?= base_url('auth') ?>" class="submit-video"><span><i class="fa fa-user"></i></span> <span class="video-text"><i class="fa fa-user" aria-hidden="true"></i> LOGIN</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url(); ?>./mag/img/sampul.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Lokasi Sekolah</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Features</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Single Video</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <?= $contents; ?>



    <!-- ##### Footer Area Start ##### -->
    <?php $this->load->view('footer_front'); ?>

    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="
    <?= base_url('mag/js/jquery/jquery-2.2.4.min.js') ?>"></script>


    <!-- Popper js -->
    <script src="<?= base_url('mag/js/bootstrap/popper.min.js') ?>"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url('mag/js/bootstrap/bootstrap.min.js') ?>"></script>
    <!-- All Plugins js -->
    <script src="<?= base_url('mag/js/plugins/plugins.js') ?>"></script>
    <!-- Active js -->

    <script src="<?= base_url('mag/js/active.js') ?>"></script>
</body>

</html>