<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= site_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= site_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= site_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('assets/dist/css/AdminLTE.min.css') ?>">

    <link rel="stylesheet" href="<?= site_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= site_url('assets/dist/css/skins/_all-skins.min.css') ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= site_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
    <style>
        .swal2-container {
            zoom: 1.4;
        }
    </style>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include dirname(__FILE__) . "/../template/header.php" ?>

        <!-- Left side column. contains the logo and sidebar -->
        <?php include dirname(__FILE__) . "/../template/sidebar.php" ?>



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Buku
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Buku</li>
                </ol>
            </section>

            <!-- Main content -->

            <section class="content">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Buku</h3>
                        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah
                            Buku</button>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 50px">No</th>
                                    <th>Id Buku</th>
                                    <th>Judul Buku</th>
                                    <th>Kategori</th>
                                    <th>Penulis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                <?php foreach ($buku as $b) : ?>
                                    <tr>
                                        <td> <?= $no ?></td>
                                        <td> <a href="<?= base_url('/buku/detail/' . $b->id_buku) ?>"><?= $b->id_buku ?></a></td>
                                        <td> <?= $b->judul_buku ?></td>
                                        <td> <?= $b->nama_kategori ?></td>
                                        <td> <?= $b->penulis ?></td>
                                        <td>
                                            <a href="<?= base_url('/edit-buku/' . $b->id_buku) ?>" class="margin-r-5"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="#" class="delete" id-buku="<?= $b->id_buku; ?>"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                    <?php $no++ ?>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>

            </section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include dirname(__FILE__) . "/../template/footer.php" ?>


        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Buku</h4>
                </div>
                <?php echo validation_errors(); ?>
                <!-- <form action="<?php echo base_url('/post-buku') ?>" method="post"> -->
                <?php echo form_open('/post-buku'); ?>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" name="judul_buku">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="id_kategori" id="" class="form-control">
                                <option value="">-- Pilih Kategori --</option>
                                <?php foreach ($kategori as $k) : ?>
                                    <option value="<?php echo $k->id_kategori; ?>"><?php echo $k->nama_kategori; ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" name="penulis">
                        </div>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" name="penerbit">
                        </div>
                        <div class="form-group">
                            <label>Tahun Terbit</label>
                            <input type="text" class="form-control" name="tahun_terbit">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Halaman</label>
                            <input type="num" class="form-control" name="jumlah_hal">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- ./wrapper -->

    <!-- Sweet Alert 2 -->
    <script src="<?= site_url('assets/plugins/sweet-alert2/sweetalert2.all.min.js'); ?>"></script>
    <!-- jQuery 3 -->
    <script src="<?= site_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= site_url('assets/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= site_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= site_url('assets/dist/js/adminlte.min.js') ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= site_url('assets/dist/js/pages/dashboard.js') ?>"></script>
    <!-- DataTables -->
    <script src="<?= site_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= site_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= site_url('assets/dist/js/demo.js') ?>"></script>

    <?php

    if ($this->session->flashdata("Success")) { ?>
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    customClass: 'swal2-container',
                    text: "<?= $this->session->flashdata("Success"); ?>",
                });
            })
        </script>
    <?php } elseif ($this->session->flashdata("Error")) { ?>
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    customClass: 'swal2-container',
                    text: "<?= $this->session->flashdata("Error"); ?>",
                });
            })
        </script>
    <?php } ?>

    <script>
        $(document).ready(function() {
            $('.sidebar-menu a').filter(function() {
                return this.href == location.href
            }).parent().addClass('active').siblings().removeClass('active');
            $('#example1').DataTable();
            $('.delete').on('click', function() {
                const id = $(this).attr("id-buku");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    zoom: '1.5x'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "<?= base_url('/delete-buku/'); ?>" + id
                    }
                })
            })
        })
    </script>

</body>

</html>