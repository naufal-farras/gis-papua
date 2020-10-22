<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Daftar Berita</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data Berita</a></li>
                            <li class="active">Daftar Berita</li>
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
                        <strong class="card-title">Daftar Berita</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tgl. Posting</th>
                                    <th>Penulis</th>
                                    <th>Dibaca</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                $id_session = $this->session->id;
                                if ($this->session->level != '0') {
                                    $b = $this->db->query("SELECT * from berita where id_admin='    $id_session' ");
                                }
                                foreach ($b->result() as $r) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $r->judul ?></td>
                                        <td><?= $r->tanggal ?></td>
                                        <td><?= $r->penulis ?></td>
                                        <td><?= $r->dibaca ?></td>
                                        <td>
                                            <div>
                                                <a href="<?= base_url('dashboard/berita_edit/' . $r->id_berita) ?>" class="btn btn-primary mb-2 "><i class="fa fa-pencil-square-o"></i></a>



                                                <a href="<?= base_url('dashboard/berita_delete/' . $r->id_berita) ?>" class="btn btn-danger mb-2 "><i class="fa fa-trash-o"></i>&nbsp;</a>

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