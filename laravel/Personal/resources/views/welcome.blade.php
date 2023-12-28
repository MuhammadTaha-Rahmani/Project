@extends('layouts.header')
@section('tilte' , 'Contact')
@section('link_css' , 'ff.css')
@section('link_css_home' , 'style2.css')
@section('safa_bg_text' , 'bg-white text-black')
@section('home_color' , 'text-danger')
@section('about_color' , 'text-secondary')
@section('portfolio_color' , 'text-secondary')
@section('pages_color' , 'text-secondary')
@section('contact_color' , 'text-secondary')
@section('name_1' , 'About')
@section('name_2' , 'Portfolio')
@section('name_3' , 'Pages')
@section('name_4' , 'Contact')
@section('name_link_1' , 'about')
@section('name_link_2' , 'portfolio')
@section('name_link_3' , 'works')
@section('name_link_4' , 'contact')
@section('head')
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
                        <a class="text-decoration-none text-white me-2 me-lg-0 mt-lg-2" target = "_blank" href="https://www.github.com/MuhammadSafa-Rahmani"><i class="bi bi-github"></i></a>
                        <a class="text-decoration-none text-white me-2 me-lg-0 mt-lg-2" href="#"><i class="bi bi-behance"></i></a>
                        <a class="text-decoration-none text-white me-2 me-lg-0 mt-lg-2" href="assets/Its Mine.pdf"><i class="bi bi-facebook"></i></a>
                        <a class="text-decoration-none text-white mt-lg-2" target = "_blank" href="https://www.linkedin.com"><i class="bi bi-linkedin"></i></a>
                    </div>
                </aside>
            </div>
        </main>
@endsection