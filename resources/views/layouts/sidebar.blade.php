<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/" target="_blank">
          <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold text-white">Abeikra Platform</span>
      </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link text-white {{ request()->is('dashboard') ? 'active bg-gradient-primary' : '' }}" href="/dashboard">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">dashboard</i>
                  </div>
                  <span class="nav-link-text ms-1">Dashboard</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white {{ request()->is('courses') ? 'active bg-gradient-primary' : '' }}" href="./courses">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">school</i>
                  </div>
                  <span class="nav-link-text ms-1">Courses</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white {{ request()->is('live-videos') ? 'active bg-gradient-primary' : '' }}" href="./live-videos">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">live_tv</i>
                  </div>
                  <span class="nav-link-text ms-1">Live Videos</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white {{ request()->is('chats') ? 'active bg-gradient-primary' : '' }}" href="./chats">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">chat</i>
                  </div>
                  <span class="nav-link-text ms-1">Chats</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white {{ request()->is('exams') ? 'active bg-gradient-primary' : '' }}" href="./exams">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">quiz</i>
                  </div>
                  <span class="nav-link-text ms-1">Exams</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white {{ request()->is('certified') ? 'active bg-gradient-primary' : '' }}" href="./certified">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">verified_user</i>
                  </div>
                  <span class="nav-link-text ms-1">Certified</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white {{ request()->is('authenticate-certificate') ? 'active bg-gradient-primary' : '' }}" href="./authenticate-certificate">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">verified</i>
                  </div>
                  <span class="nav-link-text ms-1">Authenticate Certificate</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white {{ request()->is('electronic-pay-gates') ? 'active bg-gradient-primary' : '' }}" href="./electronic-pay-gates">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">payment</i>
                  </div>
                  <span class="nav-link-text ms-1">Electronic Pay Gates</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white {{ request()->is('library') ? 'active bg-gradient-primary' : '' }}" href="./library">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">book</i>
                  </div>
                  <span class="nav-link-text ms-1">Library</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white {{ request()->is('traders') ? 'active bg-gradient-primary' : '' }}" href="./traders">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">people_alt</i>
                  </div>
                  <span class="nav-link-text ms-1">Traders</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white {{ request()->is('users') ? 'active bg-gradient-primary' : '' }}" href="./users">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">people</i>
                  </div>
                  <span class="nav-link-text ms-1">Users</span>
              </a>
          </li>
          <li class="nav-item mt-3">
              <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="../pages/profile.html">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">person</i>
                  </div>
                  <span class="nav-link-text ms-1">Profile</span>
              </a>
          </li>
      </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0">
      <div class="mx-3">
          <a class="btn btn-outline-primary mt-4 w-100" href="" type="button">Logout</a>
      </div>
  </div>
</aside>
