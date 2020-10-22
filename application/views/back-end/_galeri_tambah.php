<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Galeri</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Tambah Galeri</li>
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
                        <strong class="card-title">Tambah Galeri</strong>
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div>
                            <div class="card-body">
                                <form method="post">
                                    <div class=" form-group mb-4">
                                        <label class="control-label mb-1"><strong>Nama Sekolah</strong></label>
                                        <select class="form-control" name="id_sekolah">
                                            <?php foreach ($l->result() as $r) {
                                                echo "<option value='$r->id'>$r->nama</option>";
                                            } ?> </select>
                                    </div>




                                    <div class="row form-group mb-1">

                                        <div class="col-12 col-md-9 pb-5">
                                            <label class="control-label mb-1"><strong>Gambar</strong></label>

                                            <input type="file" name="gambar" class=" form-control" required>
                                            <!-- <p class="help-block">Kosongkan jika tidak ingin diganti ( size 32 x 37 pixels ).</p> -->

                                        </div>
                                    </div>

                                    <div class="form-group mb-1">
                                        <label class="control-label mb-1"><strong>Nama Galeri</strong></label>

                                        <?php
                                        $id_session = $this->session->id;
                                        ?>
                                        <input name="id_admin" type="hidden" value="<?= $id_session ?>">

                                        <input name="nama_galeri" type="text" class="form-control" required="" placeholder="">

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label mb-1"><strong>Keterangan</strong></label>
                                        <textarea name="isi" class="texteditor"></textarea>
                                        <br>
                                    </div>


                                    <div>
                                        <button type="submit" name="simpan" class="btn btn-success mr-3"><i class="fa fa-save"></i>&nbsp; Simpan</button>

                                        <a href="<?= base_url('dashboard/galeri') ?>" class="btn btn-primary mb-2 "><i class="fa fa-repeat"></i>&nbsp;Kembali</a>

                                    </div>


                                </form>
                            </div>
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


                        <center>
                            <h3 class="text-align:center m-4">Gambar Belum Tersedia</h3>
                            <br><br>
                        </center>



                    </div>




                </div>
                <!-- /# card -->
            </div>
        </div>
    </div><!-- .animated -->

</div><!-- .content -->

<div class="clearfix"></div>