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
                <div class="col-lg-6" style="justify-content: center;">
                    <div class="box">
                        <div class=" box-header">
                            <h3 class="box-title">Edit Buku</h3>
                        </div>

                        <form action="<?php echo base_url('/update-buku/') . $buku->id_buku ?>" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Judul Buku</label>
                                    <input type="text" class="form-control" name="judul_buku" value="<?= $buku->judul_buku; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="id_kategori" id="" class="form-control">
                                        <option value="">-- Pilih Kategori --</option>
                                        <?php foreach ($kategori as $k) : ?>
                                            <option <?php if ($buku->id_kategori == $k->id_kategori) { ?> selected <?php } ?> value="<?= $k->id_kategori ?>">
                                                <?= $k->nama_kategori; ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Penulis</label>
                                    <input type="text" class="form-control" name="penulis" value="<?= $buku->penulis; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Penerbit</label>
                                    <input type="text" class="form-control" name="penerbit" value="<?= $buku->penerbit; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tahun Terbit</label>
                                    <input type="text" class="form-control" name="tahun_terbit" value="<?= $buku->tahun_terbit; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Halaman</label>
                                    <input type="num" class="form-control" name="jumlah_hal" value="<?= $buku->jumlah_hal; ?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="<?= base_url('/buku'); ?>" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
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


    <!-- ./wrapper -->

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

    <script>
        $(function() {
            $('#example1').DataTable();
        })
    </script>

</body>

</html>