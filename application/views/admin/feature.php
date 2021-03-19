<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      	<?php if ($this->session->flashdata('feature')): ?>
          <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?= $this->session->flashdata('feature') ?>
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
                <h5 class="card-title">List of Feature</h5>
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
              <div class="card-body table-responsive" style="display: block;">
                <table class="table table-hover text-nowrap">
                	<thead>
                		<th>#</th>
                		<th>Name</th>
                		<th>Content</th>
                		<th>Url</th>
                    	<th width="10"></th>
                	</thead>
                	<tbody>
                		<?php foreach ($feature as $i => $c): ?>
                			<tr>
                				<td><?= $i+1 ?></td>
                				<td><?= $c->name ?></td>
                				<td><?= $c->content ?></td>
                				<td><a href="<?= $c->url ?>"><?= $c->url ?></a></td>
		                        <td>
		                          <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-warning" style="color: white" data-id="<?= $c->id ?>" data-url="<?= $c->url ?>" data-name="<?= $c->name ?>" data-body="<?= $c->content ?>">
		                            <i class="fas fa-edit"></i>
		                          </button>
		                          <a href="<?= base_url('data/feature/delete/'.$c->id) ?>" class="btn btn-sm btn-danger">
		                            <i class="fas fa-trash"></i>
		                          </a>
		                        </td>
                			</tr>
                		<?php endforeach ?>
                	</tbody>
                </table>
                <button data-toggle="modal" data-target="#exampleModal1" class="btn btn-primary btn-sm">
                  <i class="fas fa-plus"></i> Tambah Feature
                </button>
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
  <!-- modal new -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Feature</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" id="form-new">
            <div class="form-group">
              <label for="name" class="col-form-label">Name </label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
            	<label>Url / Link</label>
            	<input type="text" name="url" class="form-control" placeholder="#">
            </div>
            <div class="form-group">
            	<label>Content</label>
            	<textarea name="content" class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" form="form-new" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->
   <!-- modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Feature</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('data/feature/edit') ?>" id="form1">
          	<input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="name" class="col-form-label">Name </label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
            	<label>Url / Link</label>
            	<input type="text" name="url" class="form-control" id="url" placeholder="#">
            </div>
            <div class="form-group">
            	<label>Content</label>
            	<textarea name="content" class="form-control" id="body"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" form="form1" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->
  <script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
      let button = $(event.relatedTarget)
      let recipient = button.data('id')
      let modal = $(this)
      modal.find('#id').val(recipient)
      modal.find('#name').val(button.data('name'))
      modal.find('#body').val(button.data('body'))
      modal.find('#url').val(button.data('url'))
    })
  </script>