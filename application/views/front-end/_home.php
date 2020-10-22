<div class="feature-video-posts mb-30">
    <!-- Section Title -->
    <div class="section-heading">
        <h5>PETA KOTA JAYAPURA</h5>
    </div>

    <div class="featured-video-posts">
        <div class="row">
            <div class="col-12 col-lg-12">
                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-6424NGTczmQEBXcLzQk2QmbJEOKvat8&language=id&region=ID"></script>

                    <script>
                        var marker;

                        function initialize() {

                            // Variabel untuk menyimpan informasi (desc)  
                            var title = "Detail";

                            var infoWindow = new google.maps.InfoWindow({
                                content: title

                            })

                            //  Variabel untuk menyimpan peta Roadmap
                            var mapOptions = {
                                mapTypeId: google.maps.MapTypeId.ROADMAP

                            }

                            // Pembuatan petanya
                            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                            // Variabel untuk menyimpan batas kordinat
                            var bounds = new google.maps.LatLngBounds();

                            // Pengambilan data dari database
                            <?php
                            $as = $this->db->query("SELECT l.id, l.nama, l.alamat, l.latittude, l.longitude, k.nama_kategori, k.ikon FROM lokasi as l, kategori as k WHERE l.kategori=k.id");
                            foreach ($as->result() as $data) {
                                $nama   = $data->nama;
                                $alamat   = $data->alamat;
                                $lat    = $data->latittude;
                                $lon    = $data->longitude;
                                $icon   = $data->ikon;
                            ?>

                                var image = "<?php echo base_url('uploads/icon/') . $icon ?> ";

                            <?php

                                echo ("addMarker($lat, $lon, '<b>$nama</b>');\n");
                            }

                            ?>

                            // Proses membuat marker 
                            function addMarker(lat, lng, info) {
                                var lokasi = new google.maps.LatLng(lat, lng);
                                bounds.extend(lokasi);

                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: lokasi,
                                    icon: image,
                                    animation: google.maps.Animation.DROP
                                });
                                map.fitBounds(bounds);
                                bindInfoWindow(marker, map, infoWindow, info, title);
                            }

                            // Menampilkan informasi pada masing-masing marker yang diklik
                            function bindInfoWindow(marker, map, infoWindow, html) {

                                google.maps.event.addListener(marker, 'click', function() {
                                    infoWindow.setContent(html);

                                    infoWindow.open(map, marker);
                                });
                            }

                        }
                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>

                    <div id="map-canvas" style="width: auto; height: 600px;"></div>

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

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <a class="btn btn-warning btn-flat" style="float:right;" href="<?= base_url() . 'web/lokasi' ?>"><i class="fa fa-eye"></i> View all location</a>
</div>