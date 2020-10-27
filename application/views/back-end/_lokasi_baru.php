<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Lokasi Baru</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data Lokasi</a></li>
                            <li class="active">Daftar Lokasi Baru</li>
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
                        <strong class="card-title">Daftar Lokasi Sekolah Gratis</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sekolah</th>
                                    <th>Alamat</th>
                                    <th>Latittude</th>
                                    <th>Longitude</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                $id_session = $this->session->id;
                                if ($this->session->level != '0') {
                                    $l = $this->db->query("SELECT * from lokasi where id_admin='    $id_session' ");
                                }
                                foreach ($l->result() as $r) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $r->nama ?></td>
                                        <td><?= $r->alamat ?></td>
                                        <td><?= $r->latittude ?></td>
                                        <td><?= $r->longitude ?></td>
                                        <?php if ($r->status == '') {  ?>
                                            <td></td>
                                        <?php } else { ?>
                                            <td><?= $r->status ?></td>
                                        <?php } ?>



                                        <td>
                                            <div>
                                                <a href="<?= base_url('dashboard/lokasi_detail/' . $r->id) ?>" class="btn btn-primary mb-2 "> </i> Lihat Lokasi</a>

                                                <a href="<?= base_url('dashboard/lokasi_tolak/' . $r->id)  ?>" class="btn btn-danger mb-2 "><i class="fa fa-"></i>Tangguhkan</a>
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