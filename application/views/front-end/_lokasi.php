<div class="feature-video-posts mb-30">
    <!-- Section Title -->
    <div class="section-heading">
        <h5>DAFTAR LOKASI</h5>
    </div>

    <div class="featured-video-posts">
        <div class="row">
            <div class="col-12 col-lg-12">
                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->

                    <!-- Post Contetnt -->
                    <div class="col-sm-12 content">
                        <div class="panel">
                            <div class="panel-heading">
                                <!-- <h3 class="panel-title">Daftar Lokasi</h3> -->
                            </div>
                            <div class="panel-body" style="padding:10px 0 0 0;">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th width="25%">Nama Sekolah</th>
                                            <th>Alamat</th>
                                            <th width="10%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($la->result() as $r) { ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $r->nama ?></td>
                                                <td><?= $r->alamat ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-success btn-sm btn-flat" href="<?= base_url() . 'web/lokasi_one/' . $r->id ?>"><i class="fa fa-map-o"></i> Lihat Peta</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php $no++;
                                        } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Post Share Area -->

                </div>
            </div>


        </div>
    </div>
</div>