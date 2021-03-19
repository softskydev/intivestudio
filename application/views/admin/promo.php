<!-- Content Wrapper. Contains page content -->
<!-- <script src="<?= base_url() ?>assets/ckeditor/config.js" type="text/javascript"></script> -->
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/ckeditor/config.js" type="text/javascript"></script>

<?php
$query = $this->query->get_query("SELECT * FROM promo WHERE id = 1")->row();
$isi = $query->isi;

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Promo</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Isi</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body" style="display: block;">
            <form action="<?= base_url() ?>Admin/save_promo" enctype="multipart/form-data" method="post">
              <div class="form-group">
                <textarea class="isi" name="isi"></textarea>
                <div id="isian" style="display: none;">
                  <?= $isi ?>
                </div>
              </div>
              <div class="form-group">
                <label for="">Slider</label>
                <div class="dropzone" id="fileupload">
                  <!-- <input name="image" type="file" multiple /> -->
                </div>
              </div>
              <div class="form-group">
                <div class="row" id="view_img">

                </div>
              </div>
              <input type="submit" class="btn btn-primary" value="Save">
            </form>
          </div>
          <!-- ./card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  // alert();
  Dropzone.autoDiscover = false;
  $(document).ready(function() {
    load_img();
    $("#fileupload").dropzone({
      paramName: "image",
      url: "<?= base_url() ?>Admin/slider_promo",
      success: function(response) {
        load_img();
      }
    });

    var isian = $('#isian').html();
    CKEDITOR.instances.isi.setData(isian);



  });


  var global_url = '<?= base_url() ?>';
  CKEDITOR.replace('isi', {
    height: 300,
    toolbarGroups: [{
        "name": "basicstyles",
        "groups": ["basicstyles"]
      },
      {
        "name": "links",
        "groups": ["links"]
      },
      {
        "name": "paragraph",
        "groups": ['align']
      },
      {
        "name": "document",
        "groups": ["mode"]
      },
      {
        "name": "insert",
        "groups": ["insert"]
      },
      {
        "name": "styles",
        "groups": ["styles"]
      },
      {
        "name": "about",
        "groups": ["about"]
      }
    ],
    // Remove the redundant buttons from toolbar groups defined above.
    // removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar',
    filebrowserUploadUrl: global_url + 'Admin/ckeditor_upload_file/'
  });

  CKFinder.widget('ckfinder-widget', {
    width: '100%',
    height: 700,
  });

  function load_img() {
    $.ajax({
      type: "get",
      url: global_url + "Admin/load_slider_promo",
      // data: "data",
      dataType: "json",
      success: function(response) {
        var content = '';
        for (var i = 0; i < response.data.length; i++) {
          var item = response.data[i];
          content += `<div class="col-md-3 col-xs-6">
                          <img src="${global_url}assets/img/slider_promo/${item.img_slider}" alt="" style="width:100%;height:auto">
                          <button type="button" class="btn btn-danger btn-sm" style="margin-top :15px" onclick="deleteImg('${item.id}')">remove</button>
                        </div>`;
        }
        $('#view_img').html(content);
      }
    });
  }

  function deleteImg(id) {
    $.ajax({
      type: "post",
      url: global_url + "Admin/delete_slider_promo/" + id,
      dataType: "json",
      success: function(response) {
        if (response.status == 200) {
          load_img();
        }
      }
    });
  }

  function uploadImage(image) {
    var data = new FormData();
    data.append("image", image);
    $.ajax({
      url: "<?php echo base_url('admin/upload_image') ?>",
      cache: false,
      contentType: false,
      processData: false,
      data: data,
      type: "POST",
      success: function(url) {
        $('.summernote').summernote("insertImage", url);
      },
      error: function(data) {
        console.log(data);
      }
    });
  }

  function deleteImage(src) {
    $.ajax({
      data: {
        src: src
      },
      type: "POST",
      url: "<?php echo base_url('admin/delete_image') ?>",
      cache: false,
      success: function(response) {
        console.log(response);
      }
    });
  }
</script>