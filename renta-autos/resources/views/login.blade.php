
<!DOCTYPE html>
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login-CarRental</title>

  <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <link rel="canonical" href="https://1.envato.market/vuexy_admin">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/@form-validation/umd/styles/index.min.css" />
  <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css">
  <script src="assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="assets/vendor/js/template-customizer.js"></script>
  <script src="assets/js/config.js"></script>

</head>

<body>
  <div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row d-flex justify-content-center align-items-center">
      <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
        <div class="w-px-400 mx-auto">
          <div class="mb-3 text-center py-3">
            <img src="{{ asset('assets/img/icons/icono-Car-Rental.png')}}" alt="Car Rental" width="250" height="125">
          </div>
          <h3 class="mb-3">¡Bienvenido a nuestro servicio de alquiler de automóviles! 👋</h3>

          <form id="formAuthentication" class="mb-3" action="">
            <div class="mb-2">
              <label for="email" class="form-label">Correo lectrónico</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" autofocus>
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Contraseña</label>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Recordar
                </label>
              </div>
            </div>
            <a class="btn btn-primary d-grid w-100"  onclick="validateAndSubmit()">Login</a>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function validateAndSubmit() {
        var fixedEmail = 'test@gmail.com';
        var fixedPassword = '123';

        var enteredEmail = document.getElementById('email').value;
        var enteredPassword = document.getElementById('password').value;

        // Validar si los valores son correctos
        if (enteredEmail === fixedEmail && enteredPassword === fixedPassword) {
            window.location.href = "{{ route('customers') }}";
        } else {
            alert('Correo electrónico o contraseña incorrectos');
        }
    }
  </script>

  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="../../assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/vendor/js/menu.js"></script>

  <script src="assets/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
  <script src="assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
  <script src="assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>

  <script src="assets/js/main.js"></script>

  <script src="assets/js/pages-auth.js"></script>

</body>

</html>
