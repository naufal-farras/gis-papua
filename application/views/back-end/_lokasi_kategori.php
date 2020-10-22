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
                            <li class="active">Kategori</li>
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
                    <?= form_open_multipart('dashboard/lokasi_kategori') ?>

                    <div class="card-header">
                        <strong class="card-title">Tambah Kategori Lokasi </strong>
                    </div>
                    <div class="card-body">
                        <form method="post" novalidate="novalidate">

                            <div class="form-group mb-1">
                                <label class="control-label mb-1"><strong>Nama Lokasi</strong></label>
                                <input name="nama" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">

                            </div>
                            <div class="form-group mb-1">
                                <label class="control-label mb-1"><strong>Keterangan</strong></label>
                                <input name="keterangan" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                <br>
                            </div>
                            <div class="row form-group mb-1">

                                <div class="col-12 col-md-9 pb-5">
                                    <label class="control-label mb-1"><strong>File Input</strong></label>
                                    <input type="file" name="gambar" class="form-control-file" required="">
                                    <p class="help-block">size 32 x 37 pixels</p>

                                </div>

                            </div>




                            <div>
                                <button name="simpan" type="submit" class="btn btn-success mr-3"><i class="fa fa-save"></i>&nbsp; Update</button>

                                <button name="update" type="reset" class="btn btn-primary"><i class="fa fa-repeat"></i>&nbsp; Reset</button>

                            </div>
                        </form>
                    </div>

                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Daftar Kategori Lokasi</strong></h4>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Keterangan</th>
                                    <th>Icon</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($k->result() as $r) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $r->nama_kategori ?></td>
                                        <td><?= $r->keterangan ?></td>
                                        <td><img src="<?= base_url() . 'uploads/icon/' . $r->ikon ?>"></td>
                                        <td>
                                            <div>
                                                <a href="<?= base_url('dashboard/lokasi_kategori_edit/' . $r->id) ?>" class="btn btn-primary mb-2 "><i class="fa fa-pencil-square-o"></i></a>



                                                <a href="<?= base_url('dashboard/lokasi_kategori_delete/' . $r->id) ?>" class="btn btn-danger mb-2 "><i class="fa fa-trash-o"></i>&nbsp;</a>


                                            </div>
                                        </td>
                                    </tr>

                            </tbody>
                        <?php $no++;
                                } ?>
                        </table>
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