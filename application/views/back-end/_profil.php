<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Profil</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <!-- <li><a href="#">Data Lokasi</a></li> -->
                            <li class="active">Profil</li>
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
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Edit Profil</strong>
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">

                                <form method="post" novalidate="novalidate">
                                    <input name="id" type="hidden" value="<?= $p['id_profil'] ?>">
                                    <div class="form-group mb-4">
                                        <label for="cc-payment" class="control-label mb-1"><strong>Judul</strong></label>
                                        <input name="judul" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?= $p['judul'] ?>">

                                    </div>


                                    <div class="form-group">
                                        <label class="control-label mb-1"><strong>Isi Berita</strong></label>
                                        <div class="controls">

                                            <textarea name="isi" class="texteditor" rows="5"><?= $p['isi_profil'] ?></textarea>
                                            <!-- </div> -->

                                        </div>
                                        <br>
                                    </div>

                                    <div>
                                        <button type="submit" name="update" class="btn btn-success mr-3"><i class="fa fa-save"></i>&nbsp; Update</button>

                                        <a href="<?= base_url('dashboard') ?>" class="btn btn-primary"><i class="fa fa-repeat"></i>&nbsp; Kembali</a>
                                    </div>


                                </form>
                            </div>
                        </div>

                    </div>
                </div> <!-- .card -->

            </div>
            <!--/.col-->


        </div>


    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>

<script>
    $(function() {
        // Bootstrap
        $('#bootstrap-editor').wysihtml5();

        // Ckeditor standard
        $('textarea#ckeditor_standard').ckeditor({
            width: '98%',
            height: '150px',
            toolbar: [{
                    name: 'document',
                    items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates']
                }, // Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
                ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'], // Defines toolbar group without name.
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic']
                }
            ]
        });
        $('textarea#ckeditor_full').ckeditor({
            width: '98%',
            height: '150px'
        });
    });

    // Tiny MCE
    tinymce.init({
        selector: "#tinymce_basic",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });

    // Tiny MCE
    tinymce.init({
        selector: "#tinymce_full",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            },
            {
                title: 'Test template 2',
                content: 'Test 2'
            }
        ]
    });
</script>