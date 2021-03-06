
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard.dashboard')}}" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Project Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('dashboard.dashboard')}}" class="nav-link " href="JavaScript:void(0)">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard
                  </p>
                </a>
            </li>


            <li class="nav-item @if(Request::segment(1) == 'disburshment' && Request::segment(2)=='index' ||Request::segment(1) == 'disburshment' && Request::segment(2)=='create' ||Request::segment(1) == 'disburshment' && Request::segment(2)=='edit' ) menu-open @endif bold">
            <a href="#" class="nav-link " href="JavaScript:void(0)">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>Disburshment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('disburshment.index')}} " class="nav-link @if(Request::segment(1) == 'disburshment' && Request::segment(2)=='index' ) active @endif bold" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Disburshment List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{route('disburshment.create')}} " class="nav-link @if(Request::segment(1) == 'disburshment' && Request::segment(2)=='create' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Disburshment</p>
                </a>
              </li>
            </ul>
          </li>

           {{--<li class="nav-item has-treeview ">
             <a href="#" class="nav-link ">
               <i class="nav-icon far fa-money-bill-alt"></i>
               <p>
                 Financial
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="{{route('financial.index')}} " class="nav-link ">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Financial List</p>
                 </a>
               </li>
             </ul>
         </li>--}}

          <li class="nav-item has-treeview @if(Request::segment(1) == 'project' && Request::segment(2)=='index' ||Request::segment(1) == 'project' && Request::segment(2)=='create' ||Request::segment(1) == 'project' && Request::segment(2)=='edit' ) menu-open @endif bold ">
            <a href="#" class="nav-link ">
             <i class="nav-icon fas fa-coins"></i>
              <p>
                Transaction
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('project.index')}} " class="nav-link @if(Request::segment(1) == 'project' && Request::segment(2)=='index' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaction List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{route('project.create')}} " class="nav-link @if(Request::segment(1) == 'project' && Request::segment(2)=='create' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Transaction</p>
                </a>
              </li>
            </ul>
          </li>

        <li class="nav-item has-treeview @if(Request::segment(1) == 'user' && Request::segment(2)=='index' ||Request::segment(1) == 'user' && Request::segment(2)=='create' ||Request::segment(1) == 'user' && Request::segment(2)=='edit' ) menu-open @endif bold">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Shareholder
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('user.index')}} " class="nav-link @if(Request::segment(1) == 'user' && Request::segment(2)=='index' ) active @endif bold">
                <i class="far fa-circle nav-icon"></i>
                <p>Shareholder List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href=" {{route('user.create')}} " class="nav-link @if(Request::segment(1) == 'user' && Request::segment(2)=='create' ) active @endif bold">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Shareholder</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview @if(Request::segment(1) == 'settings' && Request::segment(2)=='show' ) menu-open @endif bold">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-share"></i>
            <p>
              Settings
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('settings.edit')}} " class="nav-link @if(Request::segment(1) == 'settings' && Request::segment(2)=='show' ) menu-open @endif bold">
                <i class="far fa-circle nav-icon"></i>
                <p>Total Share</p>
              </a>
            </li>
          </ul>
        </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
