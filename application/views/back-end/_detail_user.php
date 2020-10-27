<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail User</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">User</a></li>
                            <li class="active"><a href="#">Detail User</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">

                    <div class="card-header">
                        <strong class="card-title">Detail User</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype='multipart/form-data'>
                            <div class="form-group mb-3">
                                <label class="control-label mb-1"><strong>User Name</strong></label>
                                <input placeholder="User Name" name="username" type="text" class="form-control" required="" value="<?= $ad['username'] ?>" readonly>
                            </div>

                            <div class="form-group mb-3">
                                <label class="control-label mb-1"><strong>Nama</strong></label>
                                <input name="id" type="hidden" value="<?= $ad['id_admin'] ?>">

                                <input name="name" placeholder="Nama" type="text" class="form-control" required="" value="<?= $ad['nama'] ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label class="control-label mb-1"><strong>Alamat</strong></label>

                                <textarea name="alamat" placeholder="Alamat" type="text" class="form-control" required> <?= $ad['alamat'] ?></textarea>
                            </div>


                            <div class="form-group mb-3">
                                <label class="control-label mb-1"><strong>Email</strong></label>
                                <input placeholder="email" readonly name="email" type="email" class="form-control" required="" value="<?= $ad['email'] ?>">
                            </div>

                            <div class="form-group mb-3">
                                <?php
                                $pass = $ad['password'];
                                ?>
                                <label class="control-label mb-1"><strong>Password</strong></label>
                                <input placeholder="password" name="password" id="myInput" type="password" class="form-control col-4" required="" value="<?= $pass ?>">


                                <span class="add-on input-group-addon" onclick="myFunction()" style="cursor: pointer;"> <i class="fa fa-eye"> Lihat Password </i></span>

                            </div>

                            <div>
                                <button name="update" type="submit" class="btn btn-success mt-2">
                                    <i class="fa fa-save"></i>&nbsp; Update</button>
                                <?php if ($this->session->level  == '0') { ?>
                                    <a href="<?= base_url('dashboard/user') ?>" class="btn btn-primary btn-flat"><i class="fa fa-repeat"></i> Kembali</a>
                                <?php  } ?>

                            </div>

                    </div>

                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Foto Profil</strong></h4>
                    </div>
                    <div style="width: auto; ">
                        <?php
                        if ($ad['gambar'] != '') { ?>
                            <img class="rounded mx-auto d-block m-2" src="<?= base_url() . 'uploads/profil/' . $ad['gambar'] ?>" alt="" width="250px">

                        <?php
                        } else { ?>
                            <center>
                                <h3 class="text-align:center m-4">Profil Belum Tersedia</h3>
                                <br><br>
                            </center>
                        <?php
                        }
                        ?>

                    </div>
                    <div class=" form-group mb-4 ">
                        <div class="col-12 col-md-9">
                            <label class="control-label "><strong>Upload Foto Profil</strong></label> <br>
                            <input type="file" name="gambar">
                        </div>
                    </div>
                    </form>

                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

        </div>
        <!-- /# row -->
    </div>
    <!-- .animated -->
</div>
<!-- .content -->
<!-- <script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#gambar_nodin').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#preview_gambar").change(function() {
        bacaGambar(this);
    });
</script> -->
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<div class="clearfix"></div>