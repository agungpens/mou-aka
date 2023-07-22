 <!--**********************************
            Nav header start
        ***********************************-->
 <div class="nav-header">
     <div class="brand-logo">
         <a href="{{ url('/') }}">
             <b class="logo-abbr"><img src="{{ asset('images/logokecil.png') }}" alt="" width="200%"> </b>
             <span class="logo-compact"><img src="{{ asset('images/logo-compact.png') }}" alt=""></span>
             <span class="brand-title">
                 <img src="{{ asset('images/logotext.png') }}" alt="" width="100%">
             </span>
         </a>
     </div>
 </div>
 <!--**********************************
            Nav header end
        ***********************************-->

 <!--**********************************
            Header start
        ***********************************-->
 <div class="header">
     <div class="header-content clearfix">

         <div class="nav-control">
             <div class="hamburger">
                 <span class="toggle-icon"><i class="icon-menu"></i></span>
             </div>
         </div>
         <div class="header-left">
             <div class="input-group icons">
                 <div class="input-group-prepend">
                     <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i
                             class="mdi mdi-magnify"></i></span>
                 </div>
                 <input type="search" class="form-control" placeholder="Search Dashboard"
                     aria-label="Search Dashboard">
                 <div class="drop-down   d-md-none">
                     <form action="#">
                         <input type="text" class="form-control" placeholder="Search">
                     </form>
                 </div>
             </div>
         </div>
         <div class="header-right">
             <ul class="clearfix">

                 <li class="icons dropdown d-none d-md-flex">
                     <a href="javascript:void(0)" class="log-user">
                         <span>{{ session('nama') }}</span>
                     </a>

                 </li>
                 <li class="icons dropdown">
                     <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                         <span class="activity active"></span>
                         <img src="images/user/1.png" height="40" width="40" alt="">
                     </div>
                     <div class="drop-down dropdown-profile   dropdown-menu">
                         <div class="dropdown-content-body">
                             <ul>
                                 <li>
                                     <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                 </li>

                                 <li><a href="{{ url('logout') }}"><i class="icon-key"></i> <span>Logout</span></a></li>
                             </ul>
                         </div>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!--**********************************
            Header end ti-comment-alt
    ***********************************-->
