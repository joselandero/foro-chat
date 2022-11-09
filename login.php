<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/Logo WHITE.png">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <title>login</title>
  <style type="text/css">
    .gradient-custom {
      /* fallback for old browsers */
      background: #fccb90;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to bottom right, rgba(252, 203, 144, 1), rgba(213, 126, 235, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to bottom right, rgba(252, 203, 144, 1), rgba(213, 126, 235, 1));
    }

    .vh-100 {
      height: 136vh !important;
    }
    .button {
      color: white;
    }
    
  </style>
</head>
<div class="header">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img class="logo horizontal-logo" src="img/LOGO CIIEA 2020.png" alt="CIIEA logo" height="50">
      </a>
    </div>
  </nav>
  <!-- Navbar -->

</div>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                <div class="form-outline form-white mb-4">
                  <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                <button class="m-3 btn btn-outline-light btn-lg px-5" type="button"><a class="button" href="invitado.php">Invitado</a></button>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>

              </div>

              <div>
                <p class="mb-0">Don't have an account? <a href="registro.php" class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Dirección: Carr. a Las Grutas S/N, Urequa y Belem, 86800 Teapa, Tab.
      Teléfono: 932 322 3381
      <script>
        document.write(new Date().getFullYear())
      </script>
    </span>
  </div>
</footer>

</html>