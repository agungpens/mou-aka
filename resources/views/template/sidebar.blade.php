  <!--**********************************
            Sidebar start
        ***********************************-->
  <div class="nk-sidebar">
      <div class="nk-nav-scroll">
          <ul class="metismenu" id="menu">
              <li class="nav-label">MAIN MENU</li>
              <li>
                  <a href="{{ url('/') }}" class="active">
                      <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                  </a>
              </li>
              <li>
                  <a class="has-arrow" hrecm="javascript:void()" aria-expanded="false">
                      <i class="icon-notebook menu-icon"></i><span class="nav-text">Berkas MOU</span>
                  </a>
                  <ul aria-expanded="false">
                      <li><a href="{{ url('') }}">Pencatatan</a></li>
                  </ul>
              </li>
              <li>
                  <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                      <i class="icon-user menu-icon"></i><span class="nav-text">Management User</span>
                  </a>
                  <ul aria-expanded="false">
                      <li><a href="{{ url('') }}">List User</a></li>
                  </ul>
              </li>

          </ul>
      </div>
  </div>
  <!--**********************************
            Sidebar end
        ***********************************-->
