<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test | <?php echo $__env->yieldContent('title'); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/admin-lte/dist/css/adminlte.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/admin-lte/plugins/daterangepicker/daterangepicker.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('bower_components/admin-lte/plugins/select2/css/select2.min.css')); ?>">
      
       <link rel="stylesheet" href="<?php echo e(asset('bower_components/admin-lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('bower_components/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('bower_components/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('bower_components/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('bower_components/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">

  <style>

.brand-link,
.brand-link:hover{
    color:#111827;
}
.user-panel .info {
    display: inline-block;
    padding: 0px 5px 5px 10px;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #474d58;
     background-color: transparent;
}
.nav-item.active {
    background:#f49e3f;
    color:#ffffff;
    border-radius:5px;
}
.nav-item .active .nav-link p{
   color: white;
}
.nav-sidebar .menu-open>.nav-treeview {
    display: block;
    margin-left: 9px;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
  </style>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <?php if(request()->segment(1) != 'chat-lists'): ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(route('/')); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(route('logout')); ?>" class="nav-link">Logout</a>
      </li>

      <?php endif; ?>
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
       <?php echo $__env->yieldContent('content'); ?>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo e(date('Y')); ?> <a href="<?php echo e(route('/')); ?>">Elo Sports.</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/dist/js/adminlte.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/dist/js/adminlte.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/admin-lte/plugins/select2/js/select2.full.min.js')); ?>"></script>


<script type="text/javascript">
var baseUrl = "<?php echo e(url('/')); ?>"
$(document).ready(function(){
  $('body').on('click','.nav .nav-item',function(){
    $('body .nav .nav-item').not(this).removeClass('menu-is-opening menu-open');
    $('.nav .nav-item .nav-treeview').css('display','none');
      $(this).addClass('menu-is-opening menu-open');
      $(this).child('.nav-treeview').css('display','block');
  })
})

</script>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<?php /**PATH /Users/sraj/Sites/test-pro/resources/views/layouts/app.blade.php ENDPATH**/ ?>