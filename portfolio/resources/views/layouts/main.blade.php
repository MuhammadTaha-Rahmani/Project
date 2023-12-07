<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Muhaammad Taha Rahmani">
        <title>Muhammad Taha Rahmani</title>
        <link rel="shortcut icon" href="assets/favicon/favicon-32x32.png" type="image/png">
        <link rel="stylesheet" href="css/Contact.css">
        <link rel="stylesheet" href="@yeild('link')">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body class="pt-3 pb-5">
        <header class="container">
                    <nav class="d-flex align-items-center justify-content-between">
                            <div class="d-flex">
                                <h1 class="mb-0 fs-2 h-color ff-mm">Taha</h1>
                                <span class="dot"></span>
                            </div>
                            <ul class="list-unstyled d-none d-md-flex mb-0">
                                <li class="nav-item"><a class="me-5 text-decoration-none l-color active" href="/">Home</a></li>
                                <li class="nav-item"><a class="me-5 text-decoration-none l-color" href="portfolio">Portfolio</a></li>
                                <li class="nav-item"><a class="me-5 text-decoration-none l-color" href="contact">Contact</a></li>
                                <li class="nav-item"><a class="text-decoration-none l-color" href="about">About</a></li>
                            </ul>
            
                            <button class="btn btn-outline-light d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
                                <i class="bi bi-list"></i>
                            </button> 
                            <div class="offcanvas-md offcanvas-end d-md-none bg" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
                              <div class="offcanvas-header pb-0">
                                <div class="d-flex">
                                    <h5 class="mb-0 fs-2 h-color ff-mm">Taha</h5>
                                    <span class="dot"></span>
                                </div>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body pt-0">
                                <hr class="text-light">
                                <ul class="navbar-nav flex-row flex-wrap">
                                    <li class="nav-item col-6 my-2"><a class="text-decoration-none l-color active" href="/">Home</a></li>
                                    <li class="nav-item col-6 my-2"><a class="text-decoration-none l-color" href="portfolio">Portfolio</a></li>
                                    <li class="nav-item col-6 my-2"><a class="text-decoration-none l-color" href="contact">Contact</a></li>
                                    <li class="nav-item col-6 my-2"><a class="text-decoration-none l-color" href="about">About</a></li>
                                </ul>
                                <hr class="text-light">
                                <ul class="navbar-nav flex-row flex-wrap">
                                    <li class="col-6 my-3">
                                        <a class="text-decoration-none l-color" href="#!"><i class="bi bi-linkedin me-3"></i>linkedin</a>
                                    </li>
                                    <li class="col-6 my-3">
                                        <a class="text-decoration-none l-color" href="#!"><i class="bi bi-github me-3"></i>Github</a>
                                    </li>
                                    <li class="col-6 my-3">
                                        <a class="text-decoration-none l-color" href="#!"><i class="bi bi-facebook me-3"></i>Facebook</a>
                                    </li>
                                    <li class="col-6 my-3">
                                        <a class="text-decoration-none l-color" href="#!"><i class="bi bi-instagram me-3"></i>Instagram</a>
                                    </li>
                                    <li class="col-6 my-3">
                                        <a class="text-decoration-none l-color" href="#!"><i class="bi bi-telegram me-3"></i>Telegram</a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                      </nav>
        </header>
        @yield('main')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous">
        </script>
    </body>
</html>