<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Portfolio</title>
        <link
            rel="shortcut icon"
            href="../assets/favicon/favicon-32x32.png"
            type="image/png"
        />
        <link rel="stylesheet" href="../css/Contact.css">
        <link rel="stylesheet" href="../css/portfolio.css" />
        <link rel="stylesheet" href="../css/cards.css" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
            crossorigin="anonymous"
        />
    </head>
    <body class="pt-3 pb-5">
            <header class="container">
                <nav class="d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                            <h1 class="mb-0 fs-2 h-color ff-mm">Taha</h1>
                            <span class="dot"></span>
                        </div>
                        <ul class="list-unstyled d-none d-md-flex mb-0">
                            <li class="nav-item"><a class="me-5 text-decoration-none l-color" href="/">Home</a></li>
                            <li class="nav-item"><a class="me-5 text-decoration-none l-color active" href="#!">Portfolio</a></li>
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
                                <li class="nav-item col-6 my-2"><a class="text-decoration-none l-color" href="/">Home</a></li>
                                <li class="nav-item col-6 my-2"><a class="text-decoration-none l-color active" href="#!">Portfolio</a></li>
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
            <main class="container">
                <div class="text-center mt-5">
                    <h2
                        class="h-color fs-1 d-inline border-bottom border-3 pb-3 ff-mm"
                        style="border-color: #f8e7a1 !important"
                    >
                        My Portfolio
                    </h2>
                </div>
                <div class="d-flex justify-content-evenly flex-wrap">
                    <div class="card1 mt-5 mx-2">
                        <p class="heading">HTML</p>
                        <a class="text-decoration-none text-secondary" href="#html">HTML-Projects</a>
                    </div>
                    <div class="card1 mt-5 mx-2">
                        <p class="heading">CSS</p>
                        <a class="text-decoration-none text-secondary" href="#css">CSS-Project</a>
                    </div>
                    <div class="card1 mt-5 mx-2">
                        <p class="heading">Boot Strap</p>
                        <a class="text-decoration-none text-secondary" href="#bs">BS-Project</a>
                    </div>
                    <div class="card1 mt-5 mx-2">
                        <p class="heading">Java Script</p>
                        <a class="text-decoration-none text-secondary" href="#js">JS-Project</a>
                    </div>
                </div>
                <div id="html">
                    <div
                    class="w-50 h-color mx-auto bg-purple rounded d-flex justify-content-center mt-5"
                >
                    <p class="mb-0">HTML</p>
                    <a class="text-white" href="#"><i class="bi bi-arrow-up"></i></a>
                </div>
                <div
                    class="w-75 mx-auto rounded d-flex flex-wrap justify-content-center py-3 mt-3 glass"
                >
                    <div class="card">
                        <p class="card-title">Login Page (glass morphism)</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                    <div class="card">
                        <p class="card-title">Landing Page</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                    <div class="card">
                        <p class="card-title">Product Name</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div> 
                    <div class="card">
                        <p class="card-title">Product Name</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                </div>
                </div>
                <div id="css">
                    <div
                    class="w-50 h-color mx-auto bg-purple rounded d-flex justify-content-center mt-5"
                >
                    <p class="mb-0">CSS</p>
                    <a class="text-white" href="#"><i class="bi bi-arrow-up"></i></a>
                </div>
                <div
                    class="w-75 mx-auto rounded d-flex flex-wrap justify-content-center py-3 mt-3 glass"
                >
                    <div class="card">
                        <p class="card-title">Login Page (glass morphism)</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                    <div class="card">
                        <p class="card-title">Landing Page</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                    <div class="card">
                        <p class="card-title">Product Name</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div> 
                    <div class="card">
                        <p class="card-title">Product Name</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                </div>
                </div>
                <div id="bs">
                    <div
                    class="w-50 h-color mx-auto bg-purple rounded d-flex justify-content-center mt-5"
                >
                    <p class="mb-0">BS</p>
                    <a class="text-white" href="#"><i class="bi bi-arrow-up"></i></a>
                </div>
                <div
                    class="w-75 mx-auto rounded d-flex flex-wrap justify-content-center py-3 mt-3 glass"
                >
                    <div class="card">
                        <p class="card-title">Login Page (glass morphism)</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                    <div class="card">
                        <p class="card-title">Landing Page</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                    <div class="card">
                        <p class="card-title">Product Name</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div> 
                    <div class="card">
                        <p class="card-title">Product Name</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                </div>
                </div>
                <div id="js">
                    <div
                    class="w-50 h-color mx-auto bg-purple rounded d-flex justify-content-center mt-5"
                >
                    <p class="mb-0">JS</p>
                    <a class="text-white" href="#"><i class="bi bi-arrow-up"></i></a>
                </div>
                <div
                    class="w-75 mx-auto rounded d-flex flex-wrap justify-content-center py-3 mt-3 glass"
                >
                    <div class="card">
                        <p class="card-title">Celsius to Fahrenheit conversion</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow"><a href="../project/index.html">→</a></div>
                        </div>
                    </div>
                    <div class="card">
                        <p class="card-title">Landing Page</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                    <div class="card">
                        <p class="card-title">Product Name</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div> 
                    <div class="card">
                        <p class="card-title">Product Name</p>
                        <p class="small-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quaerat veritatis nobis saepe itaque rerum
                            nostrum aliquid obcaecati odio officia deleniti.
                            Expedita iste et illum, quaerat pariatur consequatur
                            eum nihil itaque!
                        </p>
                        <div class="go-corner">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                </div>
                </div>
            </main>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"
        ></script>
    </body>
</html>