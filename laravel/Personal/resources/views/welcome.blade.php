<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/search-2.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
</head>
<body class="bg-black">
    <header class="mb-5 container-fluid ps-0 pe-4">
        <nav class="d-flex align-items-center justify-content-between">
            <div>
                <h1 class="fs-2 bg-white text-dark p-2">Safa <span class="text-danger">.</span></h1>
            </div>
            <ul
                class="list-unstyled d-none d-lg-flex align-items-center mb-0"
            >
                <li class="me-5"><a class="text-decoration-none text-danger" href="#">Home</a></li>
                <li class="me-5"><a class="text-decoration-none text-white" href="about">About</a></li>
                <li class="me-5"><a class="text-decoration-none text-white" href="portfolio">Portfolio</a></li>
                <li class="me-5"><a class="text-decoration-none text-white" href="works">Pages+</a></li>
                <li class="me-5"><a class="text-decoration-none text-white" href="contact">Contact</a></li>
                <li>
                    <div class="container1 d-none d-md-flex">
                        <input
                            type="text"
                            name="text"
                            class="input"
                            required=""
                            placeholder="Type to search..."
                        />
                        <div class="icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="ionicon"
                                viewBox="0 0 512 512"
                            >
                                <title>Search</title>
                                <path
                                    d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-miterlimit="10"
                                    stroke-width="32"
                                ></path>
                                <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-miterlimit="10"
                                    stroke-width="32"
                                    d="M338.29 338.29L448 448"
                                ></path>
                            </svg>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="d-lg-none">
                <button
                    class="btn btn-outline-danger d-lg-none"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasResponsive"
                    aria-controls="offcanvasResponsive"
                >
                <i class="bi bi-list"></i>
                </button>
                <div
                    class="offcanvas-lg offcanvas-end d-lg-none bg-danger text-white"
                    tabindex="-1"
                    id="offcanvasResponsive"
                    aria-labelledby="offcanvasResponsiveLabel"
                >
                    <div class="offcanvas-header mb-0">
                        <h5
                            class="offcanvas-title"
                            id="offcanvasResponsiveLabel"
                        >
                              Safa
                        </h5>
                        <button
                            type="button"
                            class="btn-close btn-close-white"
                            data-bs-dismiss="offcanvas"
                            data-bs-target="#offcanvasResponsive"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="offcanvas-body mt-0">
                      <hr class="text-white">
                        <ul class="row list-unstyled">
                          <li class="col-6"><a class="text-decoration-none text-white" href="about">About</a></li>
                          <li class="col-6"><a class="text-decoration-none text-white" href="portfolio">Portfolio</a></li>
                          <li class="col-6"><a class="text-decoration-none text-white" href="works">Pages+</a></li>
                          <li class="col-6"><a class="text-decoration-none text-white" href="contact">Contact</a></li>                    
                        </ul>
                      <hr class="text-white">
                      <ul class="list-unstyled row">
                        <li class="col-6"><a class="text-white text-decoration-none" href="#!"><i class="bi bi-facebook me-2"></i>Facebook</a></li>
                        <li class="col-6"><a class="text-white text-decoration-none" href="#!"><i class="bi bi-linkedin me-2"></i>Linkedin</a></li>
                        <li class="col-6"><a class="text-white text-decoration-none" href="#!"><i class="bi bi-instagram me-2"></i>Instagram</a></li>
                        <li class="col-6"><a class="text-white text-decoration-none" href="#!"><i class="bi bi-github me-2"></i>Github</a></li>
                      </ul>
                      <hr class="text-white">
                      <div class="input__container mt-5">
                        <div class="shadow__input"></div>
                        <button class="input__button__shadow">
                          <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="20px" width="20px">
                            <path d="M4 9a5 5 0 1110 0A5 5 0 014 9zm5-7a7 7 0 104.2 12.6.999.999 0 00.093.107l3 3a1 1 0 001.414-1.414l-3-3a.999.999 0 00-.107-.093A7 7 0 009 2z" fill-rule="evenodd" fill="#17202A"></path>
                          </svg>
                        </button>
                        <input type="text" name="text" class="input__search" placeholder="What do you want to search?">
                      </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
        <main class="container-fluid mt-5">
            <div class="row justify-content-between align-items-center">
                <div class="ps-lg-5 col-lg-5 text-center text-lg-start">
                    <div class="mb-3">
                        <img src="assets/mountain.PNG" alt="line">
                    </div>
                    <h1 class="fs-7 fw-normal text-white mb-3">M.Safa Rahmani</h1>
                    <h2 class="fs-1 text-white mb-4">Creative <br>Product <span class="text-danger">Designer </span></h2>
                    <p class="text-white mb-4 fs-7">Welcome to my Portfolio , if you want , you can have one also ,<br>and it can look like this.</p>
                    <div><a class="btn btn-outline-danger" href="contact">Contact Me <i class="bi bi-arrow-right ms-2"></i></a></div>
                </div>
                <div class="col-lg-5 text-center">
                    <img id="msr" src="assets/msr.PNG" alt="nothing">
                </div>
                <aside class="d-flex col-lg-1 align-items-end align-items-lg-center justify-content-evenly flex-wrap flex-lg-nowrap">
                    <div class="p-2 align-self-end align-self-lg-center">
                        <a class="text-decoration-none text-white" href="#">789.987.254.51</a>
                    </div>
                    <div class="p-2 mt-3">
                        <a class="text-decoration-none text-white" href="#">msr.cp@gmail.com</a>
                    </div>
                    <div class="d-flex p-2 mt-3 justify-content-center">
                        <p class="text-white mx-lg-0 my-0 me-2">Follow</p>
                        <a class="text-decoration-none text-white me-2 me-lg-0 mt-lg-2" href="#"><i class="bi bi-twitter"></i></a>
                        <a class="text-decoration-none text-white me-2 me-lg-0 mt-lg-2" href="#"><i class="bi bi-behance"></i></a>
                        <a class="text-decoration-none text-white me-2 me-lg-0 mt-lg-2" href="assets/Its Mine.pdf"><i class="bi bi-facebook"></i></a>
                        <a class="text-decoration-none text-white mt-lg-2" href="assets/msr pa.pdf"><i class="bi bi-youtube"></i></a>
                    </div>
                </aside>
            </div>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>