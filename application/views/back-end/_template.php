<!doctype html>

<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <title>Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('icon.png') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('dashboardt/assets/css/cs-skin-elastic.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dashboardt/assets/css/style.css') ?>">



</head>
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">

                <a class="navbar-brand" href="./"><img src="<?php echo base_url(); ?>icon4.png"></a>


                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>

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
                                <a href="<?= base_url() . 'dashboard/setting_api' ?>"><i class="menu-icon fa fa-cog"></i>Setting API Maps </a>
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