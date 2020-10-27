<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">

                        <h1>Dashboard</h1>


                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li>
                                <p>Hai,<?= $this->session->userdata('nama') ?></p>
                            </li>
                            <!-- <li><a href="#">Map</a></li>
                            <li class="active">Vector map</li> -->
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kota Jayapura</h4>
                    </div>
                    <div class="box-body">

                        <?php
                        foreach ($key->result() as $row) {

                            $key = $row->api_key;
                        ?>
                            <script src="<?= $key ?>"></script>
                        <?php }  ?>

                        <script>
                            var marker;

                            function initMap() {

                                // Variabel untuk menyimpan informasi (desc)    
                                var infoWindow = new google.maps.InfoWindow;

                                //  Variabel untuk menyimpan peta Roadmap
                                var mapOptions = {
                                    mapTypeId: google.maps.MapTypeId.HYBRID
                                }

                                // Pembuatan petanya
                                // var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                                var map = new google.maps.Map(document.getElementById('map-canvas'), {
                                        zoom: 10,
                                    },
                                    mapOptions);

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
                                    bindInfoWindow(marker, map, infoWindow, info);
                                }

                                // Menampilkan informasi pada masing-masing marker yang diklik
                                function bindInfoWindow(marker, map, infoWindow, html) {
                                    google.maps.event.addListener(marker, 'click', function() {
                                        infoWindow.setContent(html);
                                        infoWindow.open(map, marker);
                                    });
                                }

                            }
                            google.maps.event.addDomListener(window, 'load', initMap);
                        </script>

                        <div id="map-canvas" style="width: auto; height: 600px;"></div>

                    </div>




                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->

    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>