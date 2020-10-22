<div class="feature-video-posts mb-30">
    <!-- Section Title -->
    <div class="section-heading">
        <h5>KOMENTAR</h5>
    </div>

    <div class="featured-video-posts">
        <div class="row">
            <div class="col-12 col-lg-12">
                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->

                    <!-- Post Contetnt -->
                    <div class="post-content">
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama" id="name" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="website" placeholder="Alamat Web, Contoh : http://">
                                        </div>
                                    </div> -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="komentar" class="form-control" id="message" cols="30" rows="10" placeholder="Masukan Komentar Anda Disini"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn btn-primary btn-flat mt-20 mb-35 mr-15" name="kirim" type="submit"><i class="fa  fa-paper-plane-o"></i> Kirim Komentar</button>
                                        <button class="btn btn-danger btn-flat mt-20 mb-35" type="reset"><i class="fa fa-retweet"></i> Batal</button>



                                    </div>
                                </div>
                            </form>
                        </div>
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
        <h5>KOMENTAR TERBARU</h5>
    </div>
    <div class="row">
        <!-- Single Blog Post -->
        <?php foreach ($k->result() as $r) { ?>


            <div class="col-12 col-lg-6">
                <div class="single-blog-post d-flex style-3 mb-30">
                    <div class="post-content">

                        <blockquote>
                            <h5><?= $r->nama ?></h5>
                            <footer><?= $r->komentar ?> </footer>
                        </blockquote>

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- 
    <a class="btn btn-warning btn-flat" style="float:right;" href="<?= base_url() . 'web/lokasi' ?>"><i class="fa fa-eye"></i> View all location</a> -->
</div>