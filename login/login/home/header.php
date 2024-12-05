<!--start top header-->
<header class="top-header">        
      <nav class="navbar navbar-expand">
        <div class="mobile-toggle-icon d-xl-none">
            <i class="bi bi-list"></i>
          </div>
          <div class="top-navbar d-none d-xl-block">
          <ul class="navbar-nav align-items-center">
            <!--li class="nav-item">
            <a class="nav-link" href="index.php">Dashboard</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="app-emailbox.html">Email</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="javascript:;">Projects</a>
            </li>
            <li class="nav-item d-none d-xxl-block">
              <a class="nav-link" href="javascript:;">Events</a>
              </li>
              <li class="nav-item d-none d-xxl-block">
              <a class="nav-link" href="app-to-do.html">Todo</a>
              </li-->
          </ul>
          </div>
          <!--div class="search-toggle-icon d-xl-none ms-auto">
            <i class="bi bi-search"></i>
          </div-->
          <form class="searchbar d-none d-xl-flex ms-auto">
              <!--div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
              <input class="form-control" type="text" placeholder="Type here to search">
              <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div-->
          </form>
          <div class="top-navbar-right ms-3">
            <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown dropdown-large">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="user-setting d-flex align-items-center gap-1">
                  <img src="assets/images/avatars/avatar-1.png" class="user-img" alt="">
                  <div class="user-name d-none d-sm-block"><?php echo $user_name;?> </div>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                   <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                        <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="60" height="60">
                        <div class="ms-3">
                          <h6 class="mb-0 dropdown-user-name"><?php echo $user_name;?> </h6>
                          <small class="mb-0 dropdown-user-designation text-secondary"><?php echo $user_roll;?> </small>
                        </div>
                     </div>
                   </a>
                 </li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <a class="dropdown-item" href="signout.php">
                       <div class="d-flex align-items-center">
                         <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                         <div class="setting-text ms-3"><span>Logout</span></div>
                       </div>
                     </a>
                  </li>
              </ul>
            </li>
            
            
            
            </ul>
            </div>
      </nav>
    </header>
       <!--end top header-->