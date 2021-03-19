<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <?php if ($this->session->flashdata('client')) : ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?= $this->session->flashdata('client') ?>
        </div>
      <?php endif ?>
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
            <h5 class="card-title">Page SEO</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: block;">
            <form action="<?= base_url('/data/company/save_seo') ?>" method="POST">
              <input type="hidden" name="id" value="<?= $client->id ?>">
              <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?= $client->title ?>">
              </div>
              <div class="form-group">
                <label>Meta Description</label>
                <input type="text" name="desc" class="form-control" value="<?= $client->meta_desc ?>">
              </div>
              <div class="form-group">
                <label>Meta Keyword</label>
                <input type="text" name="keyword" class="form-control" value="<?= $client->meta_keyword ?>">
              </div>
              <input type="submit" class="btn btn-primary" value="Save">
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Edit Customer</h5>

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
                <label>Name</label>
                <input class="form-control" type="text" name="name" required value="<?= $client->name ?>">
              </div>
              <div class="form-group">
                <label for="">Type Project</label>
                <select name="type" id="" class="form-control">
                  <option value="" disabled>Pilih Type</option>
                  <option value="website & mobile" <?= ($client->type == 'website & mobile') ? 'selected' : '' ?>> Website & Mobile</option>
                  <option value="filter" <?= ($client->type == 'filter') ? 'selected' : '' ?>>Filter Instagram</option>
                </select>
              </div>
              <div class="form-group">
                <label>Lokasi</label>
                <input class="form-control" type="text" name="lokasi" required value="<?= $client->lokasi ?>">
              </div>
              <div class="form-group">
                <label>Website</label>
                <input class="form-control" type="text" name="website" required value="<?= $client->website ?>">
              </div>
              <div class="form-group">
                <label>Image Logo (Make Sure that the image has transparent background)<br>
                  <div style="color: red">only upload file when there are changes</div>
                </label>
                <input type="file" name="logo" class="form-control-file">
              </div>
              <div class="form-group">
                <label>Photo<br>
                  <div style="color: red">only upload file when there are changes</div>
                </label>
                <input type="file" name="image" class="form-control-file">
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="content"><?= $client->content ?></textarea>
              </div>
              <div class="form-group">
                <label>Quotes</label>
                <textarea class="form-control" name="quotes"><?= $client->quotes ?></textarea>
              </div>
              <div class="form-group">
                <label>Industri</label>
                <input type="text" name="industri" class="form-control" <?= $client->industri ?>>
              </div>
              <div class="form-group">
                <label>Company Size</label>
                <input type="text" name="size" placeholder="ex : 250+" class="form-control" value="<?= $client->size ?>">
              </div>
              <div class="form-group">
                <label>Article</label>
                <textarea class="summernote" name="article"><?= $client->article ?></textarea>
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
<!-- /.content-wrapper -->
<script type="text/javascript">
  $('.summernote').summernote()
  $('.note-fontname').hide()
  $('.note-insert').hide()
</script>