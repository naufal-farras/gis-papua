<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <!-- <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data Lokasi</a></li> -->
                            <li class="active">User</li>
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
                        <strong class="card-title">Daftar User Baru</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($adm->result() as $r) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $r->nama ?></td>
                                        <td><?= $r->username ?></td>
                                        <td><?= $r->email ?></td>
                                        <?php if ($r->status == '') {  ?>
                                            <td>belum verifikasi email</td>
                                        <?php } else { ?>
                                            <td><?= $r->status ?></td>
                                        <?php } ?>

                                        <td>
                                            <div>
                                                <a href="<?= base_url('dashboard/user_baru_update/' . $r->id_admin) ?>" class="btn btn-primary mb-2 " onClick="return confirm('Apakah Anda yakin akan Meng-Aktifkan ?')">Aktifkan</a>

                                                <!-- <a href="<?= base_url('dashboard/user_baru_tolak/' . $r->id_admin) ?>" class="btn btn-danger mb-2 ">Non-Aktifkan&nbsp;</a> -->
                                            </div>
                                        </td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<div class="clearfix"></div>