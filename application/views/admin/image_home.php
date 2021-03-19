<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <?php if ($this->session->flashdata('carousel')): ?>
          <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?= $this->session->flashdata('carousel') ?>
          </div>
        <?php endif ?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Image Management</h1>
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
                <h5 class="card-title">Carousel Home</h5>
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
                		<th>Image</th>
                    <th width="10"></th>
                	</thead>
                	<tbody>
                		<?php $i = 1 ?>
                		<?php foreach ($image as $c): ?>
                			<tr>
                				<td><?= $i ?></td>
                				<td><?= $c['name'] ?></td>
                				<td>
                					<?php if ($c['src']): ?>
                						<img height="70" src="<?= base_url($c['src']) ?>">
                					<?php endif ?>
                				</td>
		                        <td>
		                          <button data-toggle="modal" data-target="#exampleModal" data-name="<?= $c['name'] ?>" class="btn btn-sm btn-warning" style="color: white">
		                            <i class="fas fa-edit"></i>
		                          </button>
		                        </td>
                			</tr>
                			<?php $i++ ?>
                		<?php endforeach ?>
                	</tbody>
                </table>
                <button data-toggle="modal" data-target="#exampleModal1" class="btn btn-primary btn-sm">
                  <i class="fas fa-plus"></i> Tambah Carousel
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
          <h5 class="modal-title" id="exampleModalLabel">Upload Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('admin/edit_image') ?>" enctype='multipart/form-data' id="form">
            <input type="hidden" name="name" value="" id="name">
            <div class="form-group">
              <label for="file" class="col-form-label">Image </label>
              <input type="file" name="image" id="file" class="form-control-file">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" form="form" class="btn btn-primary">Upload</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->
  <script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
      let button = $(event.relatedTarget)
      let recipient = button.data('name')
      let modal = $(this)
      modal.find('#name').val(recipient)
    })
    // $('#new-carousel').on('click', function(){
    //   let jumlahCarousel = 
    //   if (jumlahCarousel < 3) {

    //   }else{
    //     alert('Carousel sudah maksimal')
    //   }
    // })
  </script>