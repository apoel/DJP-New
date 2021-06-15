<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DJP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="<?php //echo base_url();?>/assets/plugins/Datatables/dataTables.bootstrap.min.css"> -->

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>

    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">


    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- daterangepicker -->
    <script src="<?php echo base_url();?>/assets/plugins/moment/moment.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/plugins/jquery/jquery-3.5.1.js"></script>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?= $this->include('layouts/navbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->include('layouts/sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?= $this->include('layouts/breadcrumb'); ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <?= $this->renderSection('content'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 <a href="#">DJP</a>.</strong>
            All rights reserved.
            
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

   
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <!-- <script src="<?php //echo base_url();?>/assets/DataTables/js/jquery.dataTables.min.js"></script> -->

<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
    <script src="<?php echo base_url();?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>

   <!--  <script src="<?php //echo base_url();?>/assets/DataTables/js/dataTables.bootstrap.min.js"></script> -->




    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url();?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url();?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>/assets/dist/js/adminlte.js"></script>
</body>
</html>