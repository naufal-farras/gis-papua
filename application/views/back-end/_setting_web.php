<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Setting WEB</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Setting</a></li>
                            <li class="active">Setting Website</li>
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
                        <strong class="card-title">Setting Website</strong>
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">

                                <form method="post" enctype='multipart/form-data'>


                                    <div class="row form-group mb-2">
                                        <label class="control-label mb-1"><strong>Ikon Web</strong></label>

                                        <div class="input-group mb-3">

                                            <input type="file" name="ikon" class="form-control col-4 mr-2">

                                            <div class="input-group-append">
                                                <button type="submit" name="update" onClick="return confirm('Apakah Anda yakin untuk Mengubah ?')" class="btn btn-success "><i class="fa fa-save"></i>&nbsp; Update Ikon</button>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-5 pb-3">

                                            <img class="border" src="<?= base_url() . 'uploads/setting/' . $key['ikon_web'] ?>" alt="" width="100%" height="100%">
                                        </div>
                                    </div>

                                    <div class="row form-group mb-2">
                                        <label class="control-label mb-1"><strong>Gambar Foto Sampul</strong></label>

                                        <div class="input-group mb-3">

                                            <input type="file" name="sampul" class=" form-control col-4 mr-2">
                                            <div class="input-group-append">
                                                <button type="submit" name="tambah" onClick="return confirm('Apakah Anda yakin untuk Mengubah ?')" class="btn btn-success "><i class="fa fa-plus"></i>&nbsp; Tambah Sampul</button>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-5 pb-3">

                                            <img class="border" src="<?= base_url() . 'uploads/sampul/' . $key1['sampul'] ?>" alt="" width="100%">
                                        </div>
                                    </div>

                                    <div class="row form-group mb-2">
                                        <label class="control-label mb-1"><strong>Gambar Foto Sampul 2</strong></label>

                                        <div class="input-group mb-3">

                                            <input type="file" name="sampul2" class=" form-control col-4 mr-2">
                                            <div class="input-group-append">
                                                <button type="submit" name="tambah2" onClick="return confirm('Apakah Anda yakin untuk Mengubah ?')" class="btn btn-success "><i class="fa fa-plus"></i>&nbsp; Tambah Sampul 2</button>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-5 pb-3">

                                            <img class="border" src="<?= base_url() . 'uploads/sampul/' . $key2['sampul'] ?>" alt="" width="100%">
                                        </div>
                                    </div>

                                    <div class="row form-group mb-2">
                                        <input name="id" type="hidden" value="<?= $key['id'] ?>">
                                        <label for="cc-payment" class="control-label mb-1"><strong>Footer</strong></label>

                                        <div class="input-group mb-3">
                                            <textarea name="footer" class="texteditor"><?= $key['footer'] ?></textarea>


                                            <div class="input-group-append">
                                                <button type="submit" name="update" onClick="return confirm('Apakah Anda yakin untuk Mengubah ?')" class="btn btn-success "><i class="fa"></i>&nbsp;Update Footer</button>
                                            </div>
                                        </div>


                                    </div>

                                    <div>
                                        <a href="<?= base_url('dashboard') ?>" class="btn btn-primary"><i class="fa fa-repeat"></i>&nbsp; Kembali</a>
                                    </div>


                                </form>
                            </div>
                        </div>

                    </div>
                </div> <!-- .card -->

            </div>
            <!--/.col-->


        </div>


    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>