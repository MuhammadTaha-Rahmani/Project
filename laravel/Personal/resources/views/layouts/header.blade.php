<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/@yield('link_css')">
    <link rel="stylesheet" href="../css/@yield('link_css_home')">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/search-2.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon-32x32.png">   
</head>
<body>
    <header class="mb-3 container-fluid ps-0 pe-4">
        <nav class="d-flex align-items-center justify-content-between">
            <div>
                <h1 class="fs-2 @yield('safa_bg_text') p-2">Safa <span class="text-danger">.</span></h1>
            </div>
            <ul
                class="list-unstyled d-none d-lg-flex align-items-center mb-0"
            >
                <li class="me-5"><a class="text-decoration-none @yield('home_color')" href="/">Home</a></li>
                <li class="me-5"><a class="text-decoration-none @yield('about_color')" href="about">About</a></li>
                <li class="me-5"><a class="text-decoration-none @yield('portfolio_color')" href="portfolio">Portfolio</a></li>
                <li class="me-5"><a class="text-decoration-none @yield('pages_color')" href="works">Pages+</a></li>
                <li class="me-5"><a class="text-decoration-none @yield('contact_color')" href="contact">Contact</a></li>
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
                          <li class="col-6"><a class="text-decoration-none text-white" href="@yield('name_link_1')">@yield('name_1')</a></li>
                          <li class="col-6"><a class="text-decoration-none text-white" href="@yield('name_link_2')">@yield('name_2')</a></li>
                          <li class="col-6"><a class="text-decoration-none text-white" href="@yield('name_link_3')">@yield('name_3')</a></li>
                          <li class="col-6"><a class="text-decoration-none text-white" href="@yield('name_link_4')">@yield('name_4')</a></li>                    
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
    @yield('head')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
