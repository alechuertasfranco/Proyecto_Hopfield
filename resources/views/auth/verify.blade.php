<!DOCTYPE html>
<html lang="en">


<!-- subscribe.html  21 Nov 2019 04:05:02 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aprende Jugando</title>
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
  <div class="loader"></div>
  <div id="app">
    <section class="section">
    <div class="m-3" align="right">
        <button onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" class="btn btn-custom btn-outline-info btn-md"
        style="border-radius: 5px;">Salir</button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="login-brand">
              Aprende jugando
            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h4>Registre el pago de lanzamiento (S/. 25.00)</h4>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-envelope"></i>
                        </div>
                      </div>
                      <input id="email" type="email" class="form-control" readonly value="aprende_jugando@gmail.com" name="email" autofocus placeholder="Email">
                      <div class="chocolat-parent pt-4">
                        <a href="/assets/img/image-gallery/yape.png" class="chocolat-image" title="Just an example">
                          <div data-crop-image="285">
                            <img alt="image" src="/assets/img/image-gallery/yape.png" class="img-fluid">
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="form-group text-center">
                    <a href="mailto:aprende_jugando@gmail.com?Subject=Vengo%20a%20pagar%20membresia" type="submit" class="btn btn-lg btn-round btn-primary">
                      Enviar al correo
                    </a>
                    </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Aprende jugando 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="/assets/js/custom.js"></script>
</body>


<!-- subscribe.html  21 Nov 2019 04:05:02 GMT -->
</html>
