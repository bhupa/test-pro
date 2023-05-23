{{-- Page Name:admin sidebar menu
Developed on :2023/03/24
Updated on :2023/03/24
Objective : this page will lists all the amdin users 
--}}
<aside class="main-sidebar  elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard')}}" class="brand-link" style="border-bottom: 1px solid #f7c646;">
      {{-- <img src="{{asset('bower_components/admin-lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Elo Sports</span> --}}
      Elo Sports
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-bottom: 1px solid #e5e7ec;">
        <div class="image">
          {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
          <i class="nav-icon fas fa-home"></i>
        </div>
        <div class="info">
          <a href="{{ url('/')}}" class="d-block">Dashboard</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item    {{ (request()->segment(1) == 'contact-lists') ? 'active' : '' }} ">
            <a href="{{route('contact-lists')}}" class="nav-link ">
              {{-- <i class="far fa-circle nav-icon"></i> --}}
            <p>
                            Contact Lists
                          </p>
            </a>

          </li>
          <li class="nav-item    {{ (request()->segment(1) == 'contact-informations') ? 'active' : '' }} ">
            <a href="{{route('contact-informations.index')}}" class="nav-link ">
              {{-- <i class="far fa-circle nav-icon"></i> --}}
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
