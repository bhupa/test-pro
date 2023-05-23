
<aside class="main-sidebar  elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('dashboard')); ?>" class="brand-link" style="border-bottom: 1px solid #f7c646;">
      
      Elo Sports
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-bottom: 1px solid #e5e7ec;">
        <div class="image">
          
          <i class="nav-icon fas fa-home"></i>
        </div>
        <div class="info">
          <a href="<?php echo e(url('/')); ?>" class="d-block">Dashboard</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item    <?php echo e((request()->segment(1) == 'contact-lists') ? 'active' : ''); ?> ">
            <a href="<?php echo e(route('contact-lists')); ?>" class="nav-link ">
              
            <p>
                            Contact Lists
                          </p>
            </a>

          </li>
          <li class="nav-item    <?php echo e((request()->segment(1) == 'contact-informations') ? 'active' : ''); ?> ">
            <a href="<?php echo e(route('contact-informations.index')); ?>" class="nav-link ">
              
            <p>
                            Add Contact 
                          </p>
            </a>

          </li>
     
        </ul>
    
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php /**PATH /Users/sraj/Sites/test-pro/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>