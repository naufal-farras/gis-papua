<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Galeri</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Edit Galeri</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="animated fadeIn">

        <?= form_open_multipart('dashboard/galeri') ?>


        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Edit Galeri</strong>
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div class="card-body">
                            <form method="post">
                                <input name="id" type="hidden" value="<?= $g['id_galeri'] ?>">

                                <div class=" form-group mb-4">
                                    <label class="control-label mb-1"><strong>Nama Sekolah</strong></label>
                                    <select class="form-control" name="id_sekolah">

                                        <?php foreach ($l->result() as $r) {
                                            echo "<option value='$r->id'> $r->nama </option>";
                                        } ?>


                                    </select>
                                </div>




                                <div class="row form-group mb-1">

                                    <div class="col-12 col-md-9 pb-5">
                                        <label class="control-label mb-1"><strong>Gambar</strong></label>

                                        <input type="file" name="gambar" class=" form-control">


                                    </div>
                                </div>

                                <div class="form-group mb-1">
                                    <label class="control-label mb-1"><strong>Nama Galeri</strong></label>
                                    <?php
                                    $id_session = $this->session->id;
                                    ?>
                                    <input name="id_admin" type="hidden" value="<?= $id_session ?>">

                                    <input name="nama_galeri" type="text" class="form-control" required="" placeholder="" value="<?= $g['nama_galeri'] ?>">

                                </div>

                                <div class="form-group">
                                    <label class="control-label mb-1"><strong>Keterangan</strong></label>
                                    <!-- <textarea name="isi" class="texteditor"><?= $g['isi'] ?></textarea> -->
                                    <textarea name="isi" class="texteditor"><?= $g['ket_galeri'] ?></textarea>

                                    <br>
                                </div>


                                <div>
                                    <button type="submit" name="update" class="btn btn-success mr-3"><i class="fa fa-save"></i>&nbsp; Update</button>

                                    <a href="<?= base_url('dashboard/galeri') ?>" class="btn btn-primary mb-2 "><i class="fa fa-repeat"></i>&nbsp;Kembali</a>

                                </div>


                            </form>
                        </div>

                    </div>
                </div> <!-- .card -->

            </div>
            <!--/.col-->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Gambar</strong></h4>
                    </div>
                    <div style="width: auto; ">
                        <?php
                        if ($g['gambar'] != '') { ?>
                            <img class="rounded mx-auto d-block m-2" src="<?= base_url() . 'uploads/galeri/' . $g['gambar'] ?>" alt="" width="auto">

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




                </div>
                <!-- /# card -->
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>