<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Komentar</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data Lokasi</a></li>
                            <li class="active">Komentar</li>
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

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th width="20%">Nama</th>
                                    <th width="15%">Email</th>
                                    <th width="15%">Website</th>
                                    <th width="40%">Isi Komentar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($k->result() as $r) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $r->nama ?></td>
                                        <td><?= $r->email ?></td>
                                        <td>
                                            <?php if ($r->website != NULL) {
                                                echo $r->website;
                                            } else {
                                                echo "-";
                                            } ?></td>
                                        <td><?= $r->komentar ?></td>
                                        <td>
                                            <div>
                                                <a class="btn btn-primary mb-2" onclick="alert('Maaf, komentar tidak dapat diedit!')" href="#"><i class="fa fa-pencil-square-o"></i></a>



                                                <a href="<?= base_url('dashboard/komentar_delete/' . $r->id_komentar) ?>" class="btn btn-danger mb-2 "><i class="fa fa-trash-o"></i>&nbsp;</a>
                                            </div>
                                        </td>
                                    </tr>
                            </tbody>
                        <?php $no++;
                                } ?>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<div class="clearfix"></div>