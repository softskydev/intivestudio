<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <?php if ($this->session->flashdata('homepage')): ?>
          <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?= $this->session->flashdata('homepage') ?>
          </div>
        <?php endif ?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Home Page Setting</h1>
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
                <h5 class="card-title">Footer Content</h5>

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
                <form method="post">
                  <?php foreach ($headers as $i => $header): ?>
                    <div class="form-group">
                      <label>Header <?= $i+1 ?></label>
                      <input class="form-control" type="text" name="header<?= $i+1 ?>" value="<?= $header->title ?>" >
                    </div>
                    <div class="form-group">
                      <label>Content Header <?= $i+1 ?></label>
                      <textarea class="form-control" name="content<?= $i+1 ?>"><?= $header->content ?></textarea>
                    </div>
                    <?php if ($header->nb): ?>
                    	<div class="form-group">
                    	  <label>Additional <?= $i+1 ?></label>
                    	  <input class="form-control" type="text" name="nb<?= $i+1 ?>" value="<?= $header->nb ?>" >
                    	</div>
                    <?php endif ?>
                    <hr>
                  <?php endforeach ?>
                  <input type="submit" class="btn btn-primary float-right" value="Save">
                </form>
              </div>
              <!-- ./card-body -->
            </div>
            
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