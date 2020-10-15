  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <strong><span style="margin-right: 5px;">{{Auth::User()->name}}</span></strong><i class="far fa-user"></i>
        </a>

        <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
        </div> -->


        <div class="dropdown-menu  dropdown-menu-right">
            <!-- <a href="#" class="dropdown-item">
              <i class="fas fa-sign-out-alt"></i> 4 new messages
            </a> -->
          <a class="nav-links dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

            <i class="fas fa-sign-out-alt"></i>   Logout</a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
           </form>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->



  <!-- Control Sidebar -->
  <aside class="control-sidebar">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
