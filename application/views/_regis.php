<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Title -->
    <title>Halaman Pendaftaran</title>

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
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?= base_url('uploads/sampul/sentanilake.jpg') ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Pendaftaran Akun</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <div class="mag-login-area py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="login-content bg-white p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <a href="<?= base_url('') ?>">
                                <img src="<?= base_url('icon3.png') ?>" alt="">
                            </a>
                        </div>

                        <form method="post" action="<?= base_url('Register') ?>">
                            <div class="form-group">


                                <input type="text" name="username" required class="form-control" placeholder="User Name">

                                <input type="text" required name="name" class="form-control" placeholder="Masukan Nama Lengkap">

                                <input type="text" name="email" class="form-control" placeholder="Email">

                                <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"></textarea>

                                <input type="password" name="pass" class="form-control" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn mag-btn  ">Daftar</button>

                                <a class=" mt-4 text-primary float-right" href="<?= base_url('auth') ?>"> Kembali</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Login Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php $this->load->view('footer_front'); ?>

    <!-- ##### Footer Area End ##### -->
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