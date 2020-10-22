<section class="about-us-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-12">
                <!-- About Us Content -->
                <div class="about-us-content bg-white mb-30 p-30 box-shadow">
                    <!-- Section Title -->
                    <h2 class="text-justify" src="<?= base_url('web/beritadetail/')   . $bo['id_berita'] ?>"><?= $bo['judul'] ?></h2>
                    <div class="section-heading">
                        <i class="fa fa-user" aria-hidden="true"></i> <?= $bo['penulis'] ?> |
                        <i class="fa fa-calendar" aria-hidden="true"></i> <?= $bo['tanggal'] ?> |
                        <i class="fa fa-eye" aria-hidden="true"></i> <?= $bo['dibaca'] ?> Kali
                    </div>
                    <!-- <img class="mt-15" src="img/bg-img/35.jpg" alt=""> -->
                    <center>
                        <img class="img-responsive img-thumbnail" src="<?= base_url('uploads/berita/') . $bo['gambar'] ?>">
                    </center>
                    <p class="text-justify"><?= $bo['isi_berita'] ?>

                </div>
            </div>
        </div>
    </div>
</section>