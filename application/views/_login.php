<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Title -->
    <title>Halaman Login</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('icon.png') ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('mag/style.css') ?>">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>



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
                        <h2>Login</h2>
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

                        <form action="<?= base_url('auth/login') ?>" method="post">
                            <div class="form-group">
                                <input type="text" name="user" id="username" required class="form-control" id="exampleInputEmail1" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" id="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <!-- <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                </div>
                            </div> -->


                            <div class="form-group">
                                <button type="submit" class="btn-register float-left btn mag-btn m-2 ">Login</button>

                                <a class="float-right mt-4 text-primary" href="<?= base_url('auth/forget') ?>"> Lupa Password ?</a>

                            </div>
                            <div class="form-group pl-4">
                                <center>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <span>Ingin menjadi bagian dari
                                        <br>
                                        Rumah Belajar Papua ?
                                    </span>
                                    <br>
                                    <span>Ayo! <a href="<?= base_url('auth/regis') ?>" class="text-primary">Daftar..</a></span>
                                </center>
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
    <script src=" <?= base_url('mag/js/jquery/jquery-2.2.4.min.js') ?>"></script>

    <!-- Popper js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

    <!-- <script>
        document.querySelector(".third").addEventListener('click', function() {
            swal("Our First Alert", "With some body text and success icon!", "success");
        });
    </script> -->

    <script src="<?= base_url('mag/js/bootstrap/popper.min.js') ?>"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url('mag/js/bootstrap/bootstrap.min.js') ?>"></script>
    <!-- All Plugins js -->
    <script src="<?= base_url('mag/js/plugins/plugins.js') ?>"></script>
    <!-- Active js -->

    <script src="<?= base_url('mag/js/active.js') ?>"></script>
</body>

</html>