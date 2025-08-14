  <!-- partial:partials/_navbar.html -->
  <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('images/logo.png') }}" alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('images/logo.png') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      
      <ul class="navbar-nav navbar-nav-right">
       
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img">
              @if(is_null(Auth::user()->avatar)) 
                  <i class="mdi mdi-account-circle h1 "></i>
              @else
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ Storage::url(Auth::user()->avatar) }}" alt="">
              @endif
            </div>
            <div class="nav-profile-text ">
              <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
            </div>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
            <div class="p-3 text-center bg-primary">
              @if(is_null(Auth::user()->avatar))
                  <i class="mdi mdi-account-circle display-1 text-white"></i>
              @else
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ Storage::url(Auth::user()->avatar) }}" alt="">
              @endif
              
            </div>
            <div class="p-2">
             
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between " href="#">
                <span>Profil</span>
                <span class="p-0">
                  <i class="mdi mdi-account-outline ml-1"></i>
                </span>
              </a>
              <form  action="{{ route("admin.logout") }}" method="post" class="dropdown-item py-1 d-flex align-items-center justify-content-between">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger form-control">
                    <span>Se déconnecter</span>
                    <i class="mdi mdi-logout ml-1"></i>
                </button>
              </form>
            </div>
          </div>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell-outline"></i>
            @if (Help::notifyCount()>0)
              <span class="count-symbol bg-danger h4 text-danger">{{ Help::notifyCount() }}</span>
            @endif
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
            <div class="dropdown-divider"></div>
            @if (Help::notifySingle()["born"] > 0)
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-account-multiple-plus"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Nouveau-née</h6>
                  <p class="text-gray ellipsis mb-0"> Il y a  de nouveau ajout</p>
                </div>
              </a>
              
            @endif
            <div class="dropdown-divider"></div>
            @if (Help::notifySingle()["death"] >0)
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-danger">
                    <i class="mdi mdi-account-multiple-minus"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Décès</h6>
                  <p class="text-gray ellipsis mb-0"> Il y a  de nouveau ajout </p>
                </div>
              </a>
            @endif
            <div class="dropdown-divider"></div>
            @if (Help::notifySingle()["arrange"] >0)
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-white text-dark border border-dark">
                    <i class="mdi mdi-arrow-down-bold"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Aménagement</h6>
                  <p class="text-gray ellipsis mb-0"> Il y a  de nouveau ajout </p>
                </div>
              </a>
            @endif
            <div class="dropdown-divider"></div>
            @if (Help::notifySingle()["arrange"] >0)
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-arrow-up-bold"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Deménagement</h6>
                  <p class="text-gray ellipsis mb-0"> Il y a  de nouveau ajout </p>
                </div>
              </a>
            @endif
            <div class="dropdown-divider"></div>
            @if (Help::notifySingle()["Job"] >0)
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-briefcase"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Service (Job)</h6>
                  <p class="text-gray ellipsis mb-0"> Ajout  aménagement </p>
                </div>
              </a>
            @endif
            <div class="dropdown-divider"></div>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>