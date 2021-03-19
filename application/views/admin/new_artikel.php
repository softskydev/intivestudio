<!-- Content Wrapper. Contains page content -->
<script src="<?= base_url() ?>assets/ckeditor/config.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js" type="text/javascript"></script>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Content Management</h1>
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
            <h5 class="card-title">Add new Article</h5>

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
            <form method="post" enctype='multipart/form-data'>
              <div class="form-group">
                <label>Judul</label>
                <input class="form-control" type="text" name="judul">
              </div>
              <div class="form-group">
                <label>Foto</label>
                <input type="file" name="img" class="form-control-file">
              </div>
              <div class="form-group">
                <label>Artikel</label>
                <textarea name="artikel" id=""></textarea>
              </div>
              <input type="submit" class="btn btn-primary float-right" value="Save">
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
<script>
  var global_url = '<?= base_url() ?>';
  CKEDITOR.replace('artikel', {
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
</script>
<!-- /.content-wrapper -->