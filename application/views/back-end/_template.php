<!doctype html>

<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN | GIS</title>
    <!-- <meta name="description" content="Ela Admin - HTML5 Admin Template"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('dashboardt/assets/css/cs-skin-elastic.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dashboardt/assets/css/style.css') ?>">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet"> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" /> -->


</head>
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <!-- <a class="navbar-brand" href="./"><img src="../dashboardt/images/logo.png" alt="Logo"></a>
             -->
                <a class="navbar-brand" href="./"><img src="<?php echo base_url(); ?>logo.png" alt="Logo"></a>

                <!-- <a class="navbar-brand hidden" href="./"><img src="../dashboardt/images/logo2.png" alt="Logo"></a> -->

                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <!-- <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">3</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                            <span class="count bg-primary">4</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

            </div>
        </div> -->
    </header>

    <body>
        <!-- Left Panel -->
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?= base_url('dashboard') ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                        </li>
                        <li class="menu-title">Main Navigation</li><!-- /.menu-title -->
                        <li>
                            <?php
                            if ($this->session->level == '0') { ?>
                                <a href="<?= base_url('dashboard/profil') ?>"><i class="menu-icon fa fa-home"></i>Profil </a>
                            <?php  } ?>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa  fa-map-marker"></i>Data Lokasi</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li>
                                    <i class="fa e"></i><a href="<?= base_url('dashboard/lokasi') ?>">Daftar Lokasi</a></li>
                                <li>
                                    <i class="fa "></i><a href="<?= base_url('dashboard/lokasi_tambah') ?>">Tambah Lokasi</a></li>

                                <?php if ($this->session->level == '0') { ?>
                                    <li>
                                        <i class="fa "></i><a href="<?= base_url('dashboard/lokasi_baru') ?>">Kelola Lokasi Baru</a></li>
                                <?php  } ?>



                                <?php
                                if ($this->session->level == '0') { ?>
                                    <li><i class="fa "></i><a href="<?= base_url('dashboard/lokasi_kategori') ?>">Kategori</a></li>
                                <?php  } ?>

                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url('dashboard/galeri') ?>"><i class="menu-icon fa fa-image"></i>Galeri </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="menu-icon fa fa-rss-square"></i>Data Berita</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa "></i><a href="<?= base_url('dashboard/berita') ?>">Daftar Berita</a></li>
                                <li><i class="menu-icon "></i><a href="<?= base_url('dashboard/berita_tambah') ?>">Tambah Berita</a></li>

                            </ul>
                        </li>
                        <li>
                            <?php
                            if ($this->session->level == '0') { ?>
                                <a href="<?= base_url('dashboard/komentar') ?>"><i class="menu-icon fa fa-comments"></i>Komentar </a>
                            <?php  } ?>

                        </li>

                        <li class="menu-title">Front End</li><!-- /.menu-title -->

                        <li>
                            <a href="<?= base_url('web') ?>" target="_blank"><i class="menu-icon fa fa-globe"></i>View Site </a>
                        </li>
                        <li class="menu-title">Auth</li><!-- /.menu-title -->


                        <li>
                            <?php
                            if ($this->session->level == '1') { ?>

                                <a href="<?= base_url('dashboard/detail_user/' . $this->session->id) ?>"><i class="menu-icon fa fa-user"></i>Profil Akun </a>
                            <?php  } ?>

                        </li>
                        <?php
                        if ($this->session->level == '0') { ?>
                            <li class="menu-item-has-children">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <i class="menu-icon fa fa-user"></i>Data User</a>
                            <?php  } ?>

                            <ul class="sub-menu children dropdown-menu">

                                <li> <?php
                                        if ($this->session->level == '0') { ?>
                                        <a href="<?= base_url('dashboard/user') ?>">Daftar User Aktif </a>
                                    <?php  } ?>
                                </li>
                                <?php if ($this->session->level == '0') { ?>
                                    <li><i class="menu-icon fa "></i><a href="<?= base_url('dashboard/user_baru') ?>">Daftar User </a></li>
                                <?php  } ?>



                            </ul>
                            </li>

                            <li>
                                <a href="<?= base_url() . 'auth/logout' ?>"><i class="menu-icon fa fa-sign-out"></i>Logout </a>
                            </li>

                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>
        <!-- /#left-panel -->


        <?= $contents; ?>


        <?php $this->load->view('footer'); ?>


        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="<?= base_url('dashboardt/assets/js/main.js') ?>"></script>

        <!--  Chart js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>



        <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

        <!-- -----data table---- -->
        <script src="<?= base_url('dashboardt/assets/js/lib/data-table/datatables.min.js') ?>"></script>
        <script src="<?= base_url('dashboardt/assets/js/lib/data-table/dataTables.bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('dashboardt/assets/js/lib/data-table/dataTables.buttons.min.js') ?>"></script>
        <script src="<?= base_url('dashboardt/assets/js/lib/data-table/buttons.bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('dashboardt/assets/js/lib/data-table/jszip.min.js') ?>"></script>
        <script src="<?= base_url('dashboardt/assets/js/lib/data-table/vfs_fonts.js') ?>"></script>
        <script src="<?= base_url('dashboardt/aassets/js/lib/data-table/buttons.html5.min.js') ?>"></script>
        <script src="<?= base_url('dashboardt/assets/js/lib/data-table/buttons.print.min.js') ?>"></script>
        <script src="<?= base_url('dashboardt/assets/js/lib/data-table/buttons.colVis.min.js') ?>"></script>
        <script src="<?= base_url('dashboardt/assets/js/init/datatables-init.js') ?>"></script>
        <script src="<?= base_url('dashboardt/assets/js/script.js') ?>"></script>


        <!-- ckeditor -->

        <!-- panggil jquery -->
        <!-- <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.1.1.min.js'); ?>"></script> -->
        <!-- panggil ckeditor.js -->
        <script type="text/javascript" src="<?php echo base_url('dashboardt/assets/ckeditor/ckeditor.js'); ?>"></script>
        <!-- panggil adapter jquery ckeditor -->
        <script type="text/javascript" src="<?php echo base_url('dashboardt/assets/ckeditor/adapters/jquery.js'); ?>"></script>
        <!-- setup selector -->
        <script type="text/javascript">
            $('textarea.texteditor').ckeditor();
        </script>






        <script>
            $(function() {
                // Bootstrap
                $('#bootstrap-editor').wysihtml5();

                // Ckeditor standard
                $('textarea#ckeditor_standard').ckeditor({
                    width: '98%',
                    height: '150px',
                    toolbar: [{
                            name: 'document',
                            items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates']
                        }, // Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
                        ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'], // Defines toolbar group without name.
                        {
                            name: 'basicstyles',
                            items: ['Bold', 'Italic']
                        }
                    ]
                });
                $('textarea#ckeditor_full').ckeditor({
                    width: '98%',
                    height: '150px'
                });
            });

            // Tiny MCE
            tinymce.init({
                selector: "#tinymce_basic",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });

            // Tiny MCE
            tinymce.init({
                selector: "#tinymce_full",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor"
                ],
                toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                toolbar2: "print preview media | forecolor backcolor emoticons",
                image_advtab: true,
                templates: [{
                        title: 'Test template 1',
                        content: 'Test 1'
                    },
                    {
                        title: 'Test template 2',
                        content: 'Test 2'
                    }
                ]
            });
        </script>





        <script type="text/javascript">
            $(document).ready(function() {
                $('#bootstrap-data-table-export').DataTable();
            });
        </script>

        <!--Local Stuff-->

    </body>

</html>