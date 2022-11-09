<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/Logo WHITE.png">
    <script src="/chat.js"></script>
    <script src="/handlebars.min.js"></script>
    <script src="bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title> FORO</title>
</head>
<body>
    <!--Main Navigation-->
<header>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img class="logo horizontal-logo" src="img/LOGO CIIEA 2020.png" alt="CIIEA logo" height="50">
          </a>
        </div>
        <button class="navbar-toggler" type="button"
                data-toggle="collapse" 
                data-target="#navbarResponsive"
                aria-controls="navbarResponsive" 
                aria-expanded="false" 
                aria-label="Toggle navigation"> 

                <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse"
                id="navbarResponsive"> 
            <ul class="navbar-nav ml-auto"> 
                <li class="nav-item active"> 
                    <a class="nav-link" href="login.php">Iniciar Sesion</a> 
                </li>
            </ul>
        </div>
      </nav>
  <!-- Navbar -->
  <div id="mySidenav" class="sidenav">
  <a href="#" id="about">general</a>
  <a href="#" id="blog">preguntas</a>
  <a href="#" id="projects">Etiquetas</a>
  <a href="#" id="contact">Usuarios</a>
</div>
</header>
</body>
<section class="gradient-custom">
  <div class="container py-5">

    <div class="row">

      <div class="col-md-6 col-lg-5 col-xl-5 mb-4 mb-md-0">

        <h5 class="font-weight-bold mb-3 text-center text-white">Member</h5>

        <div class="card mask-custom">
          <div class="card-body">

            <ul class="list-unstyled mb-0">
              <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                <a href="#!" class="d-flex justify-content-between link-light" style="text-decoration: none;">
                  <div class="d-flex flex-row">
                    <img src="img/avatar-de-hombre (1).png" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">John Doe</p>
                      <p class="small text-white">Hello, Are you there?</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-white mb-1">Just now</p>
                    <span class="badge bg-danger float-end">1</span>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                <a href="#!" class="d-flex justify-content-between link-light">
                  <div class="d-flex flex-row">
                    <img src="img/avatar-de-hombre (2).png" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Danny Smith</p>
                      <p class="small text-white">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-white mb-1">5 mins ago</p>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                <a href="#!" class="d-flex justify-content-between link-light">
                  <div class="d-flex flex-row">
                    <img src="img/mujer.png" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Alex Steward</p>
                      <p class="small text-white">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-white mb-1">Yesterday</p>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                <a href="#!" class="d-flex justify-content-between link-light">
                  <div class="d-flex flex-row">
                    <img src="img/mujer (2).png" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Ashley Olsen</p>
                      <p class="small text-white">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-white mb-1">Yesterday</p>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                <a href="#!" class="d-flex justify-content-between link-light">
                  <div class="d-flex flex-row">
                    <img src="img/mujer (1).png" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Kate Moss</p>
                      <p class="small text-white">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-white mb-1">Yesterday</p>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                <a href="#!" class="d-flex justify-content-between link-light">
                  <div class="d-flex flex-row">
                    <img src="img/avatar-de-perfil.png" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Lara Croft</p>
                      <p class="small text-white">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-white mb-1">Yesterday</p>
                  </div>
                </a>
              </li>
              <li class="p-2">
                <a href="#!" class="d-flex justify-content-between link-light">
                  <div class="d-flex flex-row">
                    <img src="img/avatar-de-hombre.png" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Brad Pitt</p>
                      <p class="small text-white">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-white mb-1">5 mins ago</p>
                    <span class="text-white float-end"><i class="fas fa-check" aria-hidden="true"></i></span>
                  </div>
                </a>
              </li>
            </ul>

          </div>
        </div>

      </div>

      <div id="chat" class="col-md-6 col-lg-7 col-xl-7">
        <ul class="list-unstyled text-white">
          <li class="d-flex justify-content-between mb-4">
            <img src="img/avatar-de-hombre.png" alt="avatar"
              class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
            <div class="card mask-custom">
              <div class="card-header d-flex justify-content-between p-3"
                style="border-bottom: 1px solid rgba(255,255,255,.3);">
                <p class="fw-bold mb-0">Brad Pitt</p>
                <p class="text-light small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
              </div>
              <div class="card-body">
                <p class="mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex justify-content-between mb-4">
            <div class="card mask-custom w-100">
              <div class="card-header d-flex justify-content-between p-3"
                style="border-bottom: 1px solid rgba(255,255,255,.3);">
                <p class="fw-bold mb-0">Lara Croft</p>
                <p class="text-light small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
              </div>
              <div class="card-body">
                <p class="mb-0">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                  laudantium.
                </p>
              </div>
            </div>
            <img src="img/avatar-de-perfil.png" alt="avatar"
              class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
          </li>
          <li class="d-flex justify-content-between mb-4">
            <img id="bradpit" src="img/avatar-de-hombre.png" alt="avatar"
              class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
            <div class="card mask-custom">
              <div class="card-header d-flex justify-content-between p-3"
                style="border-bottom: 1px solid rgba(255,255,255,.3);">
                <p class="fw-bold mb-0">Brad Pitt</p>
                <p class="text-light small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
              </div>
              <div class="card-body">
                <p class="mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </li>
          <li class="mb-3">
            <div class="form-outline form-white">
              <textarea class="form-control" id="textAreaExample3" rows="4"></textarea>
              <label class="form-label" for="textAreaExample3">Message</label>
            </div>
          </li>
          <button type="button" class="btn btn-light btn-lg btn-rounded float-end">Send</button>
        </ul>

      </div>

    </div>

  </div>
</section>

</html>