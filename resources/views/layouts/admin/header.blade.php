<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="{{asset('assets/images/logo.svg')}}" alt="logo" class="logo-dark" />
            <img src="{{asset('assets/images/logo-light.svg')}}" alt="logo-light" class="logo-light">
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/images/abfa2e98-725d-457b-83e8-a1b73a43854f-removebg-preview.png')}}" style="max-width: 90px;" alt="logo" /></a>
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Selamat Datang Di RiBook</h5>
          <ul class="navbar-nav navbar-nav-right">

            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ms-2" src="{{asset('assets/images/faces/face5.jpg')}}" alt="Profile image"> <span class="font-weight-normal"> Evelyn </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                @auth
                  <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Keluar</button>
                  </form>
                @endauth
                
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>