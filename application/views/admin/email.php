<!-- Content Wrapper. Contains page content -->
<!-- <script src="<?= base_url() ?>assets/ckeditor/config.js" type="text/javascript"></script> -->
<script src="<?= base_url() ?>assets/ckeditor/config.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js" type="text/javascript"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Newsletter</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <!-- <input type="hidden" id="isinya" value="<?= $isi ?>"> -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Email to</h5>

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
                        <form action="<?= base_url() ?>Emailblast/send/" enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To</label>
                                        <input class="form-control" type="text" name="user_name[]" placeholder="Pak Adi">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="email[]" placeholder="adi@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <button type="button" class="btn btn-primary btn_add" style="margin-top: 30px;">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-input">

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
    $(document).ready(function() {
        // membatasi jumlah inputan
        var maxField = 20; //Input fields increment limitation
        var addButton = $('.btn_add'); //Add button selector
        var wrapper = $('.wrapper-input'); //Input field wrapper


        var x = 1; //Initial field counter is 1

        $(addButton).click(function() {
            // var fieldHTML = '<div class="row pt-3" id="list' + x + '"><div class="col-md-4"><div class="input-group mb-3"><input type="text" id="product_name[]" name="product_name[]" value="' + product_name + '" class="form-control"><input type="hidden" value="' + product_id + '" id="product_id[]" name="product_id[]"><div class="input-group-append"><button class="btn btn-danger remove_button" onclick="deleteList(' + x + ')" type="button">-</button></div></div></div></div>'; //New input field html
            var fieldHTML = '<div class="row" id="list' + x + '">' +
                '<div class="col-md-4">' +
                '<div class="form-group">' +
                '<label>To</label>' +
                '<input class="form-control" type="text" name="user_name[]" placeholder="Pak Adi">' +
                '</div>' +
                '</div>' +
                '<div class="col-md-6">' +
                '<div class="form-group">' +
                '<label>Email</label>' +
                '<input class="form-control" type="text" name="email[]" placeholder="adi@gmail.com">' +
                '</div>' +
                '</div>' +
                '<div class="col-md-2">' +
                '<div class="form-group">' +
                '<label for=""></label>' +
                '<button type="button" class="btn btn-danger remove_button" onclick="deleteList(' + x + ')" style="margin-top: 30px;">-</button>' +
                '</div>' +
                '</div>' +
                '</div>'; //New input field html
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });


    });

    function deleteList(x) {
        $("#list" + x).remove();
    }
</script>