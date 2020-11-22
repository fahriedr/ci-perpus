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
                    <li class="active">Detail Buku</li>
                </ol>

                <?php if ($this->session->flashdata('Success')) { ?>
                    <div class="callout callout-success">
                        <h4>Success</h4>

                        <p><?= $this->session->flasdata('Success') ?></p>
                    </div>
                <?php } ?>
            </section>

            <!-- Main content -->

            <section class="content">

                <div class="box">
                    <div class="box-header">
                        <h2>Detail Buku</h2>
                    </div>
                    <div class="box-body">
                        <div class="row ">
                            <div class="col-lg-8 centered" style="background-color: aqua;">
                                <div class="col-md-6" style="background-color: blueviolet;">
                                    <img src="<?= base_url('assets/img/cover-default.jpg'); ?>" width="300px" height="400px">
                                </div>
                                <div class="col-md-6" style="background-color: cornflowerblue;">
                                    <h1><?= $buku->judul_buku; ?></h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 pull-right" style="margin-top: 40px;">
                            <a href="#" class="btn btn-primary">Edit</a>
                        </div>
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