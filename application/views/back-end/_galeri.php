<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Daftar Galeri</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Daftar Galeri</li>
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
                        <strong class="card-title">Daftar Galeri</strong>
                    </div>
                    <div class="card-body">
                        <div>
                            <a href="<?= base_url('dashboard/galeri_tambah') ?>" class="btn btn-primary m-2 "> Tambah Foto <i class="fa fa-plus-circle"></i></a>
                        </div>
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sekolah</th>
                                    <th>Gambar</th>
                                    <th>Nama Galeri</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1;
                                $id_session = $this->session->id;
                                if ($this->session->level != '0') {
                                    $gg = $this->db->query("SELECT * from lokasi INNER JOIN galeri  ON lokasi.id = galeri.id where galeri.id_admin='    $id_session' ");
                                }
                                foreach ($gg->result() as $r) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $r->nama ?></td>
                                        <td><img src="<?= base_url() . 'uploads/galeri/' . $r->gambar ?>" height="80" /></td>
                                        <td><?= $r->nama_galeri ?></td>

                                        <td>
                                            <div>
                                                <a href="<?= base_url('dashboard/galeri_edit/' . $r->id_galeri) ?>" class="btn btn-primary mb-2 "><i class="fa fa-pencil-square-o"></i></a>

                                                <a href="<?= base_url('dashboard/galeri_delete/' . $r->id_galeri) ?>" class="btn btn-danger mb-2 " onClick="return confirm('Apakah Anda yakin akan Menghapus ?')"><i class="fa fa-trash-o"></i>&nbsp;</a>

                                            </div>
                                        </td>
                                    </tr>

                                <?php
                                    $no++;
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