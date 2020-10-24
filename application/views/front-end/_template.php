<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Title -->
    <title>Rumah Belajar Papua</title>

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
                                    <li class="active"><a href="<?= base_url('') ?>">Home</a></li>
                                    <li><a href="<?= base_url('web/profil') ?>">Profil</a></li>
                                    <li><a href="<?= base_url('web/lokasi') ?>">Lokasi</a> </li>
                                    <li><a href="<?= base_url('web/berita') ?>">Berita</a></li>
                                    <li><a href="<?= base_url('web/komentar') ?>">Komentar</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">

                            <a href="<?= base_url('auth') ?>" class="submit-video"><span><i class="fa fa-user"></i></span> <span class="video-text"><i class="fa fa-user" aria-hidden="true"></i> LOGIN</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <!-- <div class="hero-area owl-carousel width='20' ">

        <div class="hero-blog-post bg-img " style="background-image: url(<?php echo base_url(); ?>./mag/img/sampul.png);">

        </div>
    </div> -->

    <div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(<?= base_url('uploads/sampul/sentanilake.jpg') ?>);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">

                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="1000ms">Halo, Selamat Datang</a>
                            <div class="post-meta" data-animation="fadeInUp" data-delay="200ms">
                                <?php
                                // $tgl = date('l, d-m-Y');
                                $tgl = date('l, M d, Y');
                                ?>
                                <a href="#"> <?php echo $tgl; ?></a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(<?= base_url('uploads/sampul/sentanilakee.jpg') ?>);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="400ms">Halo, Selamat Datang</a>
                            <div class="post-meta" data-animation="fadeInUp" data-delay="200ms">
                                <?php
                                // $tgl = date('l, d-m-Y');
                                $tgl = date('l, M d, Y');


                                ?>
                                <a href="#"> <?php echo $tgl; ?></a>
                            </div>

                            <!-- <a href="#" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>BERITA TERPOPULER</h5>
                </div>

                <!-- Single Blog Post -->
                <?php
                foreach ($bp->result() as $r) { ?>
                    <div class="single-blog-post d-flex">

                        <div class="post-thumbnail">
                            <a href="<?= base_url('web/beritadetail/')  . $r->id_berita ?>">
                                <img src="<?= base_url('uploads/berita/') . $r->gambar ?>" width="40%" alt="GambarBerita"> </a>
                        </div>
                        <div class=" post-content">
                            <a class="post-title" href="<?= base_url('web/beritadetail/')  . $r->id_berita ?>">

                                <a href="<?= base_url('web/beritadetail/')  . $r->id_berita ?>"><?= $r->judul ?></a> </h4>
                                <?= substr($r->isi_berita, 0, 45) . "..." ?>

                        </div>

                    </div>
                <?php } ?>

            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <!-- <a href="#" class="add-img"><img src="img/bg-img/add.png" alt=""></a> -->
            </div>

            <!-- Sidebar Widget -->

        </div>
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>BERITA TERBARU</h5>
                </div>

                <!-- Single Blog Post -->
                <?php
                foreach ($bt->result() as $r) { ?>
                    <div class="single-blog-post d-flex">

                        <div class="post-thumbnail">
                            <a href="<?= base_url('web/beritadetail/')  . $r->id_berita ?>">
                                <img src="<?= base_url('uploads/berita/') . $r->gambar ?>" width="40%" alt="GambarBerita"> </a>
                        </div>
                        <div class=" post-content">
                            <a class="post-title" href="<?= base_url('web/beritadetail/')  . $r->id_berita ?>">

                                <a href="<?= base_url('web/beritadetail/')  . $r->id_berita ?>"><?= $r->judul ?></a> </h4>
                                <?= substr($r->isi_berita, 0, 45) . "..." ?>
                        </div>

                    </div>
                <?php } ?>

            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="img/bg-img/add.png" alt=""></a>
            </div>

            <!-- Sidebar Widget -->

        </div>


        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">

            <?= $contents; ?>

        </div>



    </section>

    <!-- ##### Mag Posts Area End ##### -->

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