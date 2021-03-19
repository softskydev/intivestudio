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
                <h5 class="card-title">List of Client</h5>
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
                <table class="table table-hover">
                	<thead>
                		<th>#</th>
                		<th>Brand</th>
                		<th>Text</th>
                		<th>Image</th>
                		<th>Lokasi</th>
                		<th>Website</th>
                		<th></th>
                    <th width="10"></th>
                	</thead>
                	<tbody>
                		<?php foreach ($company as $i => $c): ?>
                			<tr>
                				<td><?= $i+1 ?></td>
                				<td><img height="50" src="<?= base_url($c->logo) ?>"></td>
                				<td style="word-wrap: break-word;"><?= $c->content ?></td>
                				<td>
                					<?php if ($c->img): ?>
                						<img height="70" src="<?= base_url($c->img) ?>">
                					<?php endif ?>
                				</td>
                				<td><?= $c->lokasi ?></td>
                				<td><?= '<a href="'.$c->website.'">'.$c->website.'</a>' ?></td>
                        <td>
                          <a href="<?= base_url('data/company/edit/'.$c->id) ?>" class="btn btn-sm btn-warning" style="color: white">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="<?= base_url('data/company/delete/'.$c->id) ?>" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                			</tr>
                		<?php endforeach ?>
                	</tbody>
                </table>
                <br>
                <a href="<?= base_url('data/company/new') ?>" class="btn btn-primary btn-sm">
                  <i class="fas fa-plus"></i> Tambah Client
                </a>
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