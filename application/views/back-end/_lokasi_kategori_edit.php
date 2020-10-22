<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Kategori</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data Lokasi</a></li>
                            <li class="active">Edit Kategori</li>
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
            <div class="col-lg-4">

                <div class="card">
                    <?= form_open_multipart('dashboard/Lokasi_kategori') ?>


                    <div class="card-header">
                        <strong class="card-title">Edit Kategori Lokasi </strong>
                    </div>
                    <div class="card-body">
                        <form method="post" novalidate="novalidate">

                            <div class="form-group mb-1">
                                <label class="control-label mb-1"><strong>Nama Lokasi</strong></label>
                                <input name="id" type="hidden" value="<?= $l['id'] ?>">

                                <input name="nama" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?= $l['nama_kategori'] ?>">

                            </div>
                            <div class="form-group mb-1">
                                <label class="control-label mb-1"><strong>Keterangan</strong></label>
                                <input name="keterangan" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?= $l['keterangan'] ?>">
                                <br>
                            </div>
                            <div class="row form-group mb-1">

                                <div class="col-12 col-md-9 pb-5">
                                    <label class="control-label mb-1"><strong>File Input</strong></label>
                                    <input type="file" name="gambar" class="form-control-file">
                                    <p class="help-block">size 32 x 37 pixels</p>

                                </div>

                            </div>




                            <div>
                                <button name="update" type="submit" class="btn btn-success mr-3"><i class="fa fa-save"></i>&nbsp; Update</button>



                                <a href="<?= base_url('dashboard/lokasi_kategori') ?>" class="btn btn-primary mb-2 "><i class="fa fa-repeat"></i>&nbsp; Kembali</a>



                            </div>
                        </form>
                    </div>

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


<div class=" clearfix">
</div>