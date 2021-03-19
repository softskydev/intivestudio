<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      	<?php if ($this->session->flashdata('client')): ?>
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
                <h5 class="card-title">Step Point</h5>
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
                		<th>Title</th>
                		<th>Content</th>
                		<th>Url</th>
                    	<th width="10"></th>
                	</thead>
                	<tbody>
                		<?php foreach ($step as $i => $c): ?>
                			<tr>
                				<td><?= $i+1 ?></td>
                				<td><?= $c->header ?></td>
                				<td><?= $c->body ?></td>
                				<td><a href="<?= $c->url ?>"><?= $c->url_string ?></a></td>
		                        <td>
		                          <button data-toggle="modal" data-target="#exampleModal1" data-id="<?= $c->id ?>" data-url="<?= $c->url ?>" data-header="<?= $c->header ?>" data-body="<?= $c->body ?>" data-urls="<?= $c->url_string ?>" class="btn btn-sm btn-warning" style="color: white"><i class="fas fa-edit"></i></button>
		                          <a href="<?= base_url('data/step/delete/'.$c->id) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
		                        </td>
                			</tr>
                		<?php endforeach ?>
                	</tbody>
                </table>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-plus"></i> Tambah Item
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
  <!-- modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('data/step/new') ?>" id="form">
            <div class="form-group">
              <label class="col-form-label">Title </label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label class="col-form-label">Content </label>
              <textarea class="form-control" name="content"></textarea>
            </div>
            <div class="form-group">
              <label class="col-form-label">Text for url </label>
              <input type="text" name="url_string" class="form-control">
            </div>
            <div class="form-group">
              <label class="col-form-label">Url </label>
              <input type="text" name="url" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" form="form" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->
  <!-- modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('data/step/edit') ?>" id="form1">
          	<input type="hidden" name="id" id="id">
            <div class="form-group">
              <label class="col-form-label">Title </label>
              <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group">
              <label class="col-form-label">Content </label>
              <textarea class="form-control" name="content" id="body"></textarea>
            </div>
            <div class="form-group">
              <label class="col-form-label">Text for url </label>
              <input type="text" name="url_string" class="form-control" id="urls">
            </div>
            <div class="form-group">
              <label class="col-form-label">Url </label>
              <input type="text" name="url" class="form-control" id="url">
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
    $('#exampleModal1').on('show.bs.modal', function (event) {
      let button = $(event.relatedTarget)
      let recipient = button.data('id')
      let modal = $(this)
      modal.find('#id').val(recipient)
      modal.find('#title').val(button.data('header'))
      modal.find('#body').val(button.data('body'))
      modal.find('#url').val(button.data('url'))
      modal.find('#urls').val(button.data('urls'))
    })
  </script>