<div class="feature-video-posts mb-30">
    <!-- Section Title -->
    <div class="section-heading">
        <h5>PROFIL</h5>
    </div>

    <div class="featured-video-posts">
        <div class="row">
            <div class="col-12 col-lg-12">
                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->

                    <!-- Post Contetnt -->
                    <div class="post-content">

                        <!-- <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a> -->
                        <h2><?= $p['judul'] ?></h2>
                        <p class="text-justify"><?= $p['isi_profil'] ?></p>

                    </div>
                    <!-- Post Share Area -->

                </div>
            </div>


        </div>
    </div>
</div>

<div class="sports-videos-area">
    <!-- Section Title -->
    <div class="section-heading">
        <h5>LIST LOKASI</h5>
    </div>
    <div class="row">
        <!-- Single Blog Post -->
        <?php foreach ($l->result() as $r) { ?>

            <div class="col-12 col-lg-6">
                <div class="single-blog-post d-flex style-3 mb-30">
                    <div class="post-content">

                        <blockquote>
                            <h5><?= $r->nama ?></h5>
                            <footer><?= $r->alamat ?> <cite><?= $r->telp ?></cite></footer>
                        </blockquote>

                        <!-- <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div> -->
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <a class="btn btn-warning btn-flat" style="float:right;" href="<?= base_url() . 'web/lokasi' ?>"><i class="fa fa-eye"></i> View all location</a>
</div>