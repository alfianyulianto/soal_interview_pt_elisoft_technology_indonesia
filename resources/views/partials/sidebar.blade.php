 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
     <img src="{{ url('') }}/tamplates/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
       class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">AdminLTE 3</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="{{ url('') }}/tamplates/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
           alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">{{ Auth::user()->name }}</a>
       </div>
     </div>

     {{-- <!-- SidebarSearch Form -->
     <div class="form-inline">
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
         <li class="nav-item menu-open">
           <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
             </p>
           </a>
         </li>
         <li class="nav-item menu-open">
           <a href="/users" class="nav-link {{ Request::is('users') || Request::is('users/*') ? 'active' : '' }}">
             <i class="fas fa-users"></i>
             <p>
               User
             </p>
           </a>
         </li>
         <li class="nav-item menu-open">
           <a href="/product/stock" class="nav-link {{ Request::is('product/stock') ? 'active' : '' }}">
             <i class="fab fa-product-hunt"></i>
             <p>
               Product Stock
             </p>
           </a>
         </li>
         <li class="nav-item menu-open">
           <a href="/api/users" class="nav-link {{ Request::is('api/users') ? 'active' : '' }}">
             <i class="fas fa-fire"></i>
             <p>
               API
             </p>
           </a>
         </li>
         <li class="nav-item menu-open">
           <a href="/swapping" class="nav-link {{ Request::is('swapping') ? 'active' : '' }}">
             <i class="fas fa-exchange"></i>
             <p>
               Swapping Variable
             </p>
           </a>
         </li>
         <li class="nav-item menu-open">
           <a href="/terbilang" class="nav-link {{ Request::is('terbilang') ? 'active' : '' }}">
             <i class="fas fa-money-bill-alt"></i>
             <p>
               Terbilang
             </p>
           </a>
         </li>
         <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
           <form action="/logout" method="post">
             @csrf
             <button class="btn btn-primary btn-lg btn-block btn-icon-split logout"><i
                 class="fas fa-sign-out-alt"></i>Logout</button>
           </form>
         </div>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>
