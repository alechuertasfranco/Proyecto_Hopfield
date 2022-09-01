<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aprende jugando</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="/assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='/assets/img/favicon.ico' />
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
          <div class="navbar-bg"></div>
          <nav class="navbar navbar-expand-lg main-navbar">

          </nav>
          <div class="main-sidebar">
            <aside id="sidebar-wrapper">
              <div class="sidebar-brand">
                <a href="index.html">Dashboard</a>
              </div>
              <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">St</a>
              </div>
              <ul class="sidebar-menu">
                  <li class="menu-header">Mantenedores</li>
                  {{-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-box"></i><span>Dashboard</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                      <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                    </ul>
                  </li> --}}
                  <li class="nav-item"><a href="/listarUsuarios" class="nav-link active"><i class="far fa-user"></i>Usuarios</a></li>
                </ul>

                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                  <a href="/" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Volver
                  </a>
                </div>
            </aside>
          </div>

          <!-- Main Content -->
          <div class="main-content">
            <section class="section">
              <div class="section-header">
                <h1>@yield('tittle')</h1>
              </div>
              <div class="section-body">
                    @yield('content')
              </div>
            </section>
          </div>
          <footer class="main-footer">
            <div class="footer-left">
              Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="">TIN</a>
            </div>
            <div class="footer-right">
              2.3.0
            </div>
          </footer>
        </div>
      </div>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- General JS Scripts -->
  <script src="/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="/assets/js/custom.js"></script>
  @yield('scripts')
</body>
</html>
