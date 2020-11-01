<section class="post-details-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="single-video-area bg-white mb-30 box-shadow">
                    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
                    <?php
                    foreach ($key->result() as $row) {

                        $key = $row->api_key;
                    ?>
                        <script src="<?= $key ?>"></script>
                    <?php }  ?>
                    <script>
                        <?php
                        $id = $this->uri->segment(3);
                        $as = $this->db->query("SELECT l.id, l.nama,l.telp, l.alamat, l.latittude, l.longitude, k.nama_kategori, k.ikon FROM lokasi as l, kategori as k WHERE l.kategori=k.id AND l.id = $id");
                        foreach ($as->result() as $data) {
                            $nama   = $data->nama;
                            $alamat   = $data->alamat;
                            $telp   = $data->telp;
                            $lat    = $data->latittude;
                            $lon    = $data->longitude;
                            $icon   = $data->ikon;
                        }


                        ?>
                        var origin_pos = {
                            lat: 0,
                            lng: 0
                        };
                        var dst_pos = {
                            lat: <?= $lat  ?>,
                            lng: <?= $lon ?>
                        };

                        var errorRoute = false;
                        var map;
                        var dragged = false;
                        var directionsDisplay;
                        var routeDisplayed = 0;

                        default_zoom = 10;

                        function initialize() {
                            var a = 2;
                            // Variabel untuk menyimpan informasi (desc)
                            var infoWindow = new google.maps.InfoWindow;

                            //  Variabel untuk menyimpan peta Roadmap
                            var mapOptions = {
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            }

                            // Pembuatan petanya
                            map = new google.maps.Map(document.getElementById('map_canvas'), {
                                zoom: default_zoom,
                                center: dst_pos
                            });



                            // Variabel untuk menyimpan batas kordinat
                            var bounds = new google.maps.LatLngBounds();

                            // Pengambilan data dari database
                            <?php
                            $id = $this->uri->segment(3);
                            $as = $this->db->query("SELECT l.id, l.nama,l.telp, l.alamat, l.latittude, l.longitude, k.nama_kategori, k.ikon FROM lokasi as l, kategori as k WHERE l.kategori=k.id AND l.id = $id");
                            foreach ($as->result() as $data) {
                                $nama   = $data->nama;
                                $alamat   = $data->alamat;
                                $telp   = $data->telp;
                                $lat    = $data->latittude;
                                $lon    = $data->longitude;
                                $icon   = $data->ikon;
                            ?>

                                var image = "<?php echo base_url() . 'uploads/icon/' . $icon ?> ";

                            <?php

                                echo ("addMarker($lat, $lon, '<b>$nama</b><br>$alamat<br>Telp: $telp');\n");
                            }

                            ?>


                            // Proses membuat marker 
                            function addMarker(lat, lng, info) {
                                var lokasi = new google.maps.LatLng(lat, lng);
                                bounds.extend(lokasi);

                                var marker = new google.maps.Marker({
                                    map: map,
                                    // zoom: 15,
                                    position: lokasi,
                                    icon: image
                                });

                                map.fitBounds(bounds);
                                bindInfoWindow(marker, map, infoWindow, info);
                            }

                            // Menampilkan informasi pada masing-masing marker yang diklik
                            function bindInfoWindow(marker, map, infoWindow, html) {
                                google.maps.event.addListener(marker, 'click', function() {
                                    infoWindow.setContent(html);
                                    infoWindow.open(map, marker);
                                });
                            }

                            if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(function(position) {
                                    var pos = {
                                        lat: position.coords.latitude,
                                        lng: position.coords.longitude
                                    };
                                    origin_pos = pos;

                                    // infoWindow.setPosition(pos);
                                    infoWindow.setContent('Lokasi anda');
                                    infoWindow.open(map);
                                    map.setCenter(pos);


                                }, function() {
                                    handleLocationError(true, infoWindow, map.getCenter());
                                });
                            } else {
                                handleLocationError(false, infoWindow, map.getCenter());
                            }

                        }
                        //batas
                        function showRoute() {


                            var directionsService = new google.maps.DirectionsService;
                            var directionsDisplay = new google.maps.DirectionsRenderer;

                            directionsDisplay.setMap(map);

                            calculateAndDisplayRoute(directionsService, directionsDisplay);
                            console.log('Route displayed ' + ++routeDisplayed);

                        }


                        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                            infoWindow.setPosition(pos);
                            infoWindow.setContent(browserHasGeolocation ?
                                'Error: The Geolocation service failed.' :
                                'Error: Your browser doesn\'t support geolocation.');
                            infoWindow.open(map_canvas);
                        }

                        //menampilkan rute lokasi




                        function calculateAndDisplayRoute(directionsService, directionsDisplay) {


                            directionsService.route({
                                    origin: origin_pos,
                                    destination: dst_pos,
                                    travelMode: google.maps.TravelMode.DRIVING,
                                },
                                (response, status) => {
                                    if (status === "OK") {
                                        directionsDisplay.setDirections(response);

                                    } else {

                                        window.alert("Directions request failed due to " + status);
                                    }
                                }
                            );
                        }


                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                    <div id="map_canvas" style="width: auto; height: 500px;">

                    </div>

                    <a href="javascript:void(0)" onclick="showRoute()" class="btn btn-primary m-2">
                        <i class="fa fa-map-o"> </i> Tampilkan Rute </a>


                    <a class="btn btn-warning m-2" href="<?= base_url() . 'web/detail_lokasi/' . $id ?>"><i class="fa fa-list-ul"></i> Rute Detail</a>




                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-xl-8">
                <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                    <div class="blog-content">

                        <h4 class="post-title" src="<?= base_url('web/beritadetail/') . $lo['id'] ?>">
                            <?= $lo['nama'] ?></h4>


                        <!-- Post Meta -->
                        <div class="row">
                            <div class="col-12 col-lg-12">

                                <!-- <p class="text-justify"><?= $lo['keterangan'] ?> -->
                                <p class="text-justify"><?= $lo['keterangan'] ?></p>


                            </div>
                            <div class="col-12 col-lg-4">
                                <!-- <img class="mb-15" src="img/bg-img/51.jpg" alt=""> -->
                            </div>
                        </div>



                    </div>
                </div>

                <!-- Related Post Area -->
                <div class="related-post-area bg-white mt-30 mb-30 p-30 box-shadow px-25">

                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Galeri Lokasi</h5>

                    </div>

                    <div class="row">
                        <!-- Single Blog Post -->
                        <?php
                        $query = $this->db->get_where('galeri', array('id' => $id_lokasi));
                        if ($query->num_rows() < 1) {
                            $row = $query->row_array();
                            $id = $row['id'];
                        }
                        if ($id_lokasi != $id) { ?>
                            <div class="col-12 col-md-6 col-lg-12 ">
                                <div class="single-blog-post style-4 mb-5">

                                    <div class="post-thumbnail">
                                        <span style="color: red; font-size: 25px">Gambar Belum Tersedia</span>
                                        <br>
                                    </div>

                                </div>
                            </div>
                        <?php } else { ?>
                            <?php foreach ($gx->result() as $r) { ?>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-blog-post style-4 mb-10">

                                        <div class="post-thumbnail">
                                            <a href="#" data-target="#ModalGalery<?= $r->id_galeri ?>" data-toggle="modal" class="thumbnail"><img src="<?= base_url('uploads/galeri/') . $r->gambar ?>" alt=""></a>

                                        </div>

                                    </div>
                                </div>

                            <?php } ?>
                        <?php } ?>


                    </div>
                </div>
            </div>
            <?php foreach ($gx->result() as $r) { ?>
                <div class="modal fade" id="ModalGalery<?= $r->id_galeri ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?= $r->nama_galeri ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img style="width: 80%;" src="<?= base_url('uploads/galeri/') . $r->gambar ?>" alt="<?= $r->nama_galeri ?>">
                            </div>
                            <div class="modal-footer">
                                <p><?= $r->ket_galeri ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


            <!-- Sidebar Widget -->
            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>BERITA TERPOPULER</h5>

                        </div>

                        <!-- Catagory Widget -->
                        <?php
                        foreach ($bp->result() as $r) { ?>
                            <div class="single-blog-post d-flex">

                                <div class="post-thumbnail">
                                    <a href="<?= base_url('web/beritadetail/')  . $r->id_berita ?>">
                                        <img src="<?= base_url('uploads/berita/') . $r->gambar ?>" width="40%" alt="GambarBerita"> </a>
                                </div>
                                <div class=" post-content">
                                    <a class="post-title" href="<?= base_url('web/beritadetail/')  . $r->id_berita ?>">

                                        <a href="<?= base_url('web/beritadetail/')  . $r->id_berita ?>"><?= $r->judul ?></a> </h4>
                                        <?= substr($r->isi_berita, 0, 45) . "..." ?>


                                </div>

                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>