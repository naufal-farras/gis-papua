<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Lokasi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data Lokasi</a></li>
                            <li class="active">Tambah Lokasi</li>
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
            <div class="col-lg-6">

                <div class="card">

                    <div class="card-header">
                        <strong class="card-title">Tambah Lokasi Sekolah</strong>
                    </div>
                    <div class="card-body">

                        <?= form_open('dashboard/lokasi') ?>

                        <div class="form-group mb-3">
                            <label class="control-label mb-1"><strong>Nama Sekolah</strong></label>
                            <input name="nama" placeholder="Nama Sekolah" type="text" class="form-control" required="">
                            <?php
                            $id_session = $this->session->id;
                            ?>

                            <input name="id_admin" type="hidden" value="<?= $id_session ?>">


                        </div>

                        <div class="form-group  mb-3">
                            <label class="control-label mb-1"><strong>Kategori</strong></label>
                            <select name="kategori" class="form-control ">
                                <?php foreach ($k->result() as $r) {
                                    echo "<option value='$r->id'>$r->nama_kategori</option>";
                                } ?>
                            </select>
                        </div>



                        <div class="form-group mb-3">
                            <label class="control-label mb-1"><strong>Alamat</strong></label>
                            <!-- <input placeholder="Alamat Lengkap" name="alamat" type="text" class="form-control" required="" value=""> -->
                            <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" required=""></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label class="control-label mb-1"><strong>Telepon</strong></label>
                            <input placeholder="Telepon" name="telp" type="text" class="form-control" required="">
                        </div>



                        <div class="form-group mb-3">
                            <label class="control-label mb-1"><strong>Latittude</strong></label>
                            <input name="lat" id="lat" type="text" class="form-control" required="" placeholder="-3.0291407">



                        </div>
                        <div class="form-group mb-1">
                            <label class="control-label mb-1"><strong>Longitude</strong></label>

                            <input name="long" id="lng" type="text" class="form-control" required="" placeholder="120.20852568">
                            <br>
                        </div>

                        <div class="form-group mb-3">
                            <label class="control-label mb-1"><strong>Keterangan Sekolah</strong></label>

                            <textarea name="keterangan" class="form-control" placeholder="Penjelasan Mengenai Sekolah" required=""></textarea>
                        </div>
                        <!-- <div class="row form-group mb-1">
                            <div class="col-12 col-md-9 pb-5">
                                <label class="control-label mb-1"><strong>Tambahkan Foto</strong></label>

                                <input type="file" name="gambar" class="form-control-file">
                              
                            </div>
                        </div> -->
                        <div>
                            <button name="simpan" type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i>&nbsp; Tambah</button>

                            <a href="<?= base_url('dashboard/lokasi') ?>" class="btn btn-primary btn-flat"><i class="fa fa-repeat"></i> Kembali</a>


                        </div>

                    </div>

                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Peta</strong></h4>
                    </div>
                    <div id="map-canvas" style="width: auto; height: 400px;"></div>



                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

        </div>
        <!-- /# row -->
    </div>
    <!-- .animated -->
</div>
<!-- .content -->


<div class="clearfix"></div>

<?php
foreach ($key->result() as $row) {

    $key = $row->api_key;
?>
    <script src="<?= $key ?>"></script>
<?php }  ?>
<script>
    var marker;
    var defaultCenter = {
        lat: -2.5978275,
        lng: 140.6669823
    };

    function initialize() {

        // Variabel untuk menyimpan informasi (desc)    
        var infoWindow = new google.maps.InfoWindow;

        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        // Pembuatan petanya
        // var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
                zoom: 15,
                center: defaultCenter
            },
            mapOptions);

        // Variabel untuk menyimpan batas kordinat
        // var bounds = new google.maps.LatLngBounds();

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


            var marker = new google.maps.Marker({
                map: map,
                position: defaultCenter,
                // icon: image,
                title: 'Drag untuk Pindah Lokasi',
                draggable: true

            });
            marker.addListener('drag', handleEvent);
            marker.addListener('dragend', handleEvent);


            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);

            // var markers = new google.maps.Marker({

            //     map: map,
            //     position: lokasi,
            //     icon: image,
            //     title: 'Click for Info',


            // });



            // var infowindow = new google.maps.InfoWindow({
            //     content: '<h4>Drag untuk pindah lokasi</h4>'
            // });

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
    google.maps.event.addDomListener(window, 'load', initialize);

    function handleEvent(event) {
        document.getElementById('lat').value = event.latLng.lat();
        document.getElementById('lng').value = event.latLng.lng();
    }
</script>