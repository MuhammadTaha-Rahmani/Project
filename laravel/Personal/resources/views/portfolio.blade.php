<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Portfolio</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="../css/port.css" />
        <link rel="stylesheet" href="../css/card-2.css" />
        <link rel="stylesheet" href="../css/search.css" />
        <link rel="stylesheet" href="../css/search-2.css" />
        <link rel="shortcut icon" href="../assets/favicon-32x32.png" type="image/x-icon">
    </head>
    <body>
        <div class="text-center">
            <header class="mb-5 container-fluid ps-0 pe-4">
                <nav class="d-flex align-items-center justify-content-between">
                    <div>
                        <h1 class="fs-2 bg-black text-white p-2">Safa <span class="text-danger">.</span></h1>
                    </div>
                    <ul
                        class="list-unstyled d-none d-lg-flex align-items-center mb-0"
                    >
                        <li class="me-5"><a class="text-decoration-none text-secondary" href="/">Home</a></li>
                        <li class="me-5"><a class="text-decoration-none text-secondary" href="about">About</a></li>
                        <li class="me-5"><a class="text-decoration-none text-danger" href="#">Portfolio</a></li>
                        <li class="me-5"><a class="text-decoration-none text-secondary" href="works">Pages+</a></li>
                        <li class="me-5"><a class="text-decoration-none text-secondary" href="contact">Contact</a></li>
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
                                    <li class="col-6 text-start"><a class="text-decoration-none text-white" href="/">Home</a></li>
                                    <li class="col-6 text-start"><a class="text-decoration-none text-white" href="about">About</a></li>
                                    <li class="col-6 text-start"><a class="text-decoration-none text-white" href="works">Pages+</a></li>
                                    <li class="col-6 text-start"><a class="text-decoration-none text-white" href="contact">Contact</a></li>                    
                                </ul>
                              <hr class="text-white">
                              <ul class="list-unstyled row text-start">
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
            <main class="container">
                <img class="mb-3" src="../assets/mountain2.PNG" alt="nothing" />
            <p>PORTFOLIO</p>
            <h1>My <span class="text-danger">Portfolio</span></h1>
            <div class="d-flex justify-content-evenly flex-wrap mb-3">
                <div class="card mt-5">
                    <h2 class="text-black">HTML</h2>
                    <a href="#html-home" title="Click Me">HTML-Projects</a>
                    <p>95% COMPLET</p>
                </div>
                <div class="card mt-5">
                    <h2 class="img text-black">CSS</h2>
                    <a href="#css-home" title="Click Me">CSS-Projects</a>
                    <p>95% COMPLET</p>
                </div>
                <div class="card mt-5">
                    <h2 class="text-black">JS</h2>
                    <a href="#js-home" title="Click Me">JS-Projects</a>
                    <p>0% COMPLET</p>
                </div>
                <div class="card mt-5">
                    <h2 class="text-black">PHP</h2>
                    <a href="#php-home" title="Click Me">PHP-Projects</a>
                    <p>0% COMPLET</p>
                </div>
            </div>

            <div class="mt-5">
                <h3 id="html-home" class="html-color rounded-3 w-50 mx-auto">
                    html
                </h3>
                <div
                    class="glass mt-5 w-75 mx-auto flex-wrap d-flex justify-content-evenly"
                >
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Html-p-1</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">14</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Html-p-2</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">15</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Html-p-3</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">16</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Html-p-4</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">17</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <h3 id="css-home" class="css-color rounded-3 w-50 mx-auto">
                    css
                </h3>
                <div
                    class="glass mt-5 w-75 mx-auto flex-wrap d-flex justify-content-evenly"
                >
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Css-p-1</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">14</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Css-p-2</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">15</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Css-p-3</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">16</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Css-p-4</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">17</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <h3 id="js-home" class="js-color rounded-3 w-50 mx-auto">js</h3>
                <div
                    class="glass mt-5 w-75 mx-auto flex-wrap d-flex justify-content-evenly"
                >
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Js-p-1</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">14</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Js-p-2</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">15</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Js-p-3</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">16</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Js-p-4</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">17</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <h3 id="php-home" class="php-color rounded-3 w-50 mx-auto">
                    php
                </h3>
                <div
                    class="glass mt-5 w-75 mx-auto flex-wrap d-flex justify-content-evenly"
                >
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Php-p-1</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">14</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Php-p-2</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">15</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Php-p-3</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">16</span>
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="card-1">
                            <div class="content-box">
                                <span class="card-title">Php-p-4</span>
                                <p class="card-content">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                </p>
                                <span class="see-more">download</span>
                            </div>
                            <div class="date-box">
                                <span class="month">JUNE</span>
                                <span class="date">17</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 3vh"></div>
            </main>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"
        ></script>
    </body>
</html>