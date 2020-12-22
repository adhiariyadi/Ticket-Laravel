<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ticket - @yield('title')</title>
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset('vendor/toastr/toastr.min.css') }}" rel="stylesheet"/>
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  @guest
  @else
    @if (Auth::user()->level != 'Admin')
      <style>
        .navbar a.title {
          color: #fff;
          height: 5rem;
          text-decoration: none;
          font-size: 1.5rem;
          font-weight: 800;
          padding: 1.5rem 1rem;
          text-align: center;
          text-transform: uppercase;
          letter-spacing: .05rem;
          z-index: 1;
          align-items: center;
          justify-content: center;
          display: flex;
        }

        .navbar a.title .title-text {
          display: inline;
        }
      </style>
    @endif
  @endguest

  @yield('styles')
</head>
<body id="page-top">
  @guest
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        @yield('content')
      </div>
    </div>
  @else
    @if (Auth::user()->level == 'Admin')
      <!-- Page Wrapper -->
      <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
          <!-- Main Content -->
          <div id="content">
            <!-- Navbar -->
            @include('layouts.navbar')
            <!-- End of Navbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">
              <!-- Page Heading -->
              <h1 class="h3 mb-4 text-gray-800">@yield('heading')</h1>
              <!-- Content -->
              @yield('content')
            </div>
            <!-- /.container-fluid -->
          </div>
          <!-- End of Main Content -->
          <!-- Footer -->
          <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>
                  Copyright &copy; 2020
                  @if (date('Y') != '2020')
                    - {{ date('Y') }}
                  @endif
                  &nbsp; All rights reserved • by
                  <a href="https://github.com/adhiariyadi/" target="_blank"
                    >Adhi Ariyadi</a
                  >.
                </span>
              </div>
            </div>
          </footer>
          <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
    @else
      <div class="bg-gradient-primary" style="height: 160px; border-bottom-left-radius: 50% 20px; border-bottom-right-radius: 50% 20px;">
        <nav class="navbar navbar-expand navbar-light topbar mb-4">
          <div class="container">
            <a class="title" href="{{ url('/') }}">
              <div class="title-icon rotate-n-15">
                <i class="fas fa-ticket-alt"></i>
              </div>
              <div class="title-text mx-3">Ticket</div>
            </a>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block"></div>
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-white small">
                    {{ Auth::user()->name }}
                  </span>
                  <img class="img-profile rounded-circle" src="{{ asset('img/user.png') }}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  @if (Auth::user()->level == "Penumpang")
                    <a class="dropdown-item" href="{{ route('history') }}">
                      <i class="fas fa-history fa-sm fa-fw mr-2 text-gray-400"></i>
                      History
                    </a>
                  @endif
                  <a class="dropdown-item" href="{{ route('pengaturan') }}">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Setting
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div style="margin-top: -70px">
        <div class="container">
          @yield('content')
        </div>
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>
              Copyright &copy; 2020
              @if (date('Y') != '2020')
                - {{ date('Y') }}
              @endif
              &nbsp; All rights reserved • by
              <a href="https://github.com/adhiariyadi/" target="_blank"
                >Adhi Ariyadi</a
              >.
            </span>
          </div>
        </div>
      </footer>
    @endif
  @endguest

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  @yield('script')

  @if (count($errors)>0)
    @foreach ($errors->all() as $error)
      <script>
        toastr.error("{{ $error }}");
      </script>
    @endforeach
  @endif
  @if (Session::has('success'))
    <script>
      toastr.success("{{ Session('success') }}");
    </script>
  @endif
  @if (Session::has('error'))
    <script>
      toastr.error("{{ Session('error') }}");
    </script>
  @endif
</body>
</html>