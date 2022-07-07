<nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a href="index.php">
          <h3>INDIANBINNER</h3>
        </a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="assets/images/favicon.png" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">IndianBinner</h5>
                <span>@IndianBinner</span>
              </div>
            </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Home</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="index.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Gateways </span>
        </li>
      
        <li class="nav-item menu-items">
          <a class="nav-link" href="checker.php">
            <span class="menu-icon">
              <i class="mdi mdi-credit-card-multiple"></i>
            </span>
            <span class="menu-title">Cc Charge Gate</span>
          </a>
        </li>
        
        <li class="nav-item menu-items">
          <a class="nav-link" href="auth.php">
            <span class="menu-icon">
              <i class="mdi mdi-credit-card-multiple"></i>
            </span>
            <span class="menu-title">Cc Auth Checker</span>
             </a>
        </li>
        
        <li class="nav-item menu-items">
          <a class="nav-link" href="ccgen.php">
            <span class="menu-icon">
              <i class="mdi mdi-credit-card-multiple"></i>
            </span>
            <span class="menu-title">Cc Genrate</span>
          </a>
        </li>
        
        <li class="nav-item menu-items">
          <a class="nav-link" href="binchk.php">
            <span class="menu-icon">
              <i class="mdi mdi-bank"></i>
            </span>
            <span class="menu-title">Bin Lookup</span>
             </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="proxychk.php">
            <span class="menu-icon">
              <i class="mdi mdi-archive"></i>
            </span>
            <span class="menu-title">Proxy Checker</span>
             </a>
        </li>
        
        <li class="nav-item menu-items">
          <a class="nav-link" href="skchecker.php">
            <span class="menu-icon">
              <i class="mdi mdi-key"></i> 
            </span>
            <span class="menu-title">SK Key Checker</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a href="index.php">
            <h1>🇮🇳</h1>
          </a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" class="form-control" placeholder="Search products">
              </form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="https://telegram.dog/Indianbinner">Welcome to IndianBinner </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">

            </li>
            <li class="nav-item dropdown border-left">
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelly="messageDropdown">
            <li class="nav-item dropdown border-left">
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="assets/images/favicon.png" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">IndianBinner</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>
                
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>