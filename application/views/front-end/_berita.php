<div class="section-heading">
    <h5>BERITA</h5>
</div>
<div class="col-12 col-xl-12">
    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
        <?php foreach ($ab->result() as $r) { ?>
            <!-- Single Catagory Post -->
            <div class="single-catagory-post d-flex flex-wrap">
                <!-- Thumbnail -->
                <div class="post-thumbnail bg-img" style="background-image: url(img/bg-img/42.jpg);">

                    <a href="<?= base_url() . 'web/beritadetail/' . $r->id_berita ?>">
                        <img class="media-object img-thumbnail" src="<?= base_url() . 'uploads/berita/' . $r->gambar ?>">
                    </a>
                </div>

                <!-- Post Contetnt -->
                <div class="post-content">
                    <!-- <div class="post-meta">
                        <a href="#">MAY 8, 2018</a>
                        <a href="archive.html">lifestyle</a>
                    </div> -->

                    <a class="post-title" href="<?= base_url('web/beritadetail/') . $r->id_berita ?>"><?= $r->judul ?></a>
                    <!-- Post Meta -->
                    <div class="post-meta-2">
                        <i class="fa fa-user" aria-hidden="true"></i> <?= $r->penulis ?> |
                        <i class="fa fa-calendar" aria-hidden="true"></i> <?= $r->tanggal ?> |
                        <i class="fa fa-eye" aria-hidden="true"></i> <?= $r->dibaca ?> Kali
                    </div>
                    <?= substr($r->isi_berita, 0, 250) . "..." ?><p>
                        <a href="<?= base_url('web/beritadetail/') . $r->id_berita ?>" class="btn btn-success btn-sm btn-flat" style="float:left;"><i class="fa fa-angle-double-right"></i> Lihat Selengkapnya</a>
                </div>
            </div>
        <?php } ?>

        <!-- Pagination -->
        <nav>
            <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>
            </ul>
        </nav>

    </div>
</div>