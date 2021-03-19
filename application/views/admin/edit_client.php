<!-- Content Wrapper. Contains page content -->
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
                	<input type="hidden" name="id" value="<?= $client->id ?>">
                    <div class="form-group">
                      <label>Name</label>
                      <input class="form-control" type="text" name="name" value="<?= $client->name ?>">
                    </div>
                    <div class="form-group">
                      <label>Quote</label>
                      <input class="form-control" type="text" name="quote" value="<?= $client->content ?>">
                    </div>
                    <div class="form-group">
                    	<label>Photo<br><div style="color: red">only upload file when there are changes</div></label>
                    	<input type="file" name="image" class="form-control-file">
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