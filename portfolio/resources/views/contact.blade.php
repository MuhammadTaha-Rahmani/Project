<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Muhammad Taha Rahmani">
        <title>Contact</title>
        <link
            rel="shortcut icon"
            href="../assets/favicon/favicon-32x32.png"
            type="image/png"
        >
        <link rel="stylesheet" href="../css/Contact.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
            crossorigin="anonymous"
        >
    </head>
    <body class="pb-5 pt-3">
        <header class="container">
                <nav class="d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                            <h1 class="mb-0 fs-2 h-color ff-mm">Taha</h1>
                            <span class="dot"></span>
                        </div>
                        <ul class="list-unstyled d-none d-md-flex mb-0">
                            <li class="nav-item"><a class="me-5 text-decoration-none l-color" href="/">Home</a></li>
                            <li class="nav-item"><a class="me-5 text-decoration-none l-color" href="portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="me-5 text-decoration-none l-color active" href="#!">Contact</a></li>
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
                                <li class="nav-item col-6 my-2"><a class="text-decoration-none l-color" href="portfolio">Portfolio</a></li>
                                <li class="nav-item col-6 my-2"><a class="text-decoration-none l-color active" href="#!">Contact</a></li>
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
                <div class="text-center c-mt">
                    <h1 class="h-color h-size mb-3">Contact Me</h1>
                    <h2 class="h4 p-color mb-3">(440)-271-2726</h2>
                    <h3 class="h6 mb-5 p-color">
                        Mon - Fri 10:00 AM - 08:00 PM EST
                    </h3>
                    <a class="btn btn-primary py-2 px-3" href="#!"
                        ><i class="bi bi-telephone me-3"></i>Call Us
                    </a>
                </div>
                <hr class="mt-5 mb-5 border border-secondary">
                <div>
                    <h2 class="h3 h-color text-center mb-5">
                        Or fill out this form, I'll<br />quickly get back to you.
                    </h2>
                    <div class="w-75 mx-auto">
                        <form action="" class="row h-color">
                            <div class="col-md-6 col-sm-12">
                                <label for="subject" class="form-label">How Can We Help?</label>
                                <select id="subject" class="form-select" aria-label="Default select example">
                                    <option selected value="" class="d-none">Select a subject</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6 mt-4 col-sm-12">
                                <label for="first-name" class="form-label">First Name</label>
                                <input id="first-name" type="text" class="form-control" placeholder="Type your first name" required>
                            </div>
                            <div class="col-md-6 mt-4 col-sm-12">
                                <label for="last-name" class="form-label">Last Name</label>
                                <input id="last-name" type="text" class="form-control" placeholder="Type your last name" required>
                            </div>
                            <div class="col-md-6 mt-4 col-sm-12">
                                <label for="email" class="form-label">Email Address</label>
                                <input id="email" type="email" class="form-control" placeholder="Type your email" required>
                            </div> 
                            <div class="col-md-6 mt-4 col-sm-12">
                                <label for="phone-number" class="form-label">Phone Number</label>
                                <input id="phone-number" type="text" class="form-control" placeholder="Type your phone number" required>
                            </div>
                            <div class="col-12 mt-4 mb-5">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" style="height: 8rem;" id="phone-number" type="text" class="form-control"required>
                                </textarea>
                            </div>
                            <a class="mx-auto btn btn-primary col-md-2 col-sm-3" href="#!">Send Message</a>
                        </form>
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