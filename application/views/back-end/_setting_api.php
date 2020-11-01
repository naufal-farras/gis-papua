<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Setting API</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Setting</a></li>

                            <li class="active">Setting API</li>
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
                        <strong class="card-title">Setting API</strong>
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">

                                <form method="post">

                                    <div class=" form-group mb-4">
                                        <?php
                                        foreach ($key->result() as $row) {
                                            $id = $row->id;
                                            $key = $row->api_key;
                                        ?>
                                            <input name="id" type="hidden" value="<?= $id ?>">
                                            <label for="cc-payment" class="control-label mb-1"><strong>API Key Google Maps</strong></label>
                                            <input name="key" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?= $key ?>">
                                        <?php

                                        } ?>
                                    </div>


                                    <div>
                                        <button type="submit" name="update" onClick="return confirm('Apakah Anda yakin untuk Mengubah ?')" class="btn btn-success mr-3"><i class="fa fa-save"></i>&nbsp; Update</button>

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