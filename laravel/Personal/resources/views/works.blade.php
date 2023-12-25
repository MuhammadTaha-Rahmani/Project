@extends('layouts.header')
@section('tilte' , 'Pages')
@section('link_css' , 'three.css')
@section('safa_bg_text' , 'bg-black text-white')
@section('home_color' , 'text-secondary')
@section('about_color' , 'text-secondary')
@section('portfolio_color' , 'text-secondary')
@section('pages_color' , 'text-danger')
@section('contact_color' , 'text-secondary')
@section('name_1' , 'Home')
@section('name_2' , 'About')
@section('name_3' , 'Portfolio')
@section('name_4' , 'Contact')
@section('name_link_1' , '/')
@section('name_link_2' , 'about')
@section('name_link_3' , 'portfolio')
@section('name_link_4' , 'contact')
@section('head')
    <main class="container">
      <div
      id="carouselExampleSlidesOnly"
      class="carousel slide text-center"
      data-bs-ride="carousel"
  >
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="mb-3" src="../assets/mountain2.PNG" alt="noyhing" />
              <p>Testimonials</p>
              <p class="fs-3">
                  Some representative placeholder content for <br />
                  the first slide of the carousel.
              </p>
              <div
                  class="d-flex align-items-center justify-content-center"
              >
                  <img
                      src="../assets/guy.avif"
                      class="w-10"
                      alt="nothing"
                  />
                  <div class="ms-3">
                      <p class="mb-0">Muhammad</p>
                      <p class="mb-0">ceo of Hello</p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
            <img class="mb-3" src="../assets/mountain2.PNG" alt="noyhing" />
            <p>Testimonials</p>
            <p class="fs-3">
                Some representative placeholder content for <br />
                the first slide of the carousel.
            </p>
            <div
                class="d-flex align-items-center justify-content-center"
            >
                <img
                    src="../assets/guy.avif"
                    class="w-10"
                    alt="nothing"
                />
                <div class="ms-3">
                    <p class="mb-0">ALi</p>
                    <p class="mb-0">CEO of pepsi</p>
                </div>
            </div>                       
          </div>
          <div class="carousel-item">
            <img class="mb-3" src="../assets/mountain2.PNG" alt="noyhing" />
            <p>Testimonials</p>
            <p class="fs-3">
                Some representative placeholder content for <br />
                the first slide of the carousel.
            </p>
            <div
                class="d-flex align-items-center justify-content-center"
            >
                <img
                    src="../assets/guy.avif"
                    class="w-10"
                    alt="nothing"
                />
                <div class="ms-3">
                    <p class="mb-0">Forst</p>
                    <p class="mb-0">CEO of Baba-GAmp</p>
                </div>
            </div>
          </div>
      </div>
  </div>
      
      <div class="container mt-5 text-lg-center">
        <ul class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 justify-content-center list-unstyled">
          <li class="col my-2"><img src="../assets/1.PNG" alt=""></li>
          <li class="col my-2"><img src="../assets/2.PNG" alt=""></li>
          <li class="col my-2"><img src="../assets/3.PNG" alt=""></li>
          <li class="col my-2"><img src="../assets/4.PNG" alt=""></li>
          <li class="col my-2"><img src="../assets/6.PNG" alt=""></li>
          <li class="col my-2"><img src="../assets/2-1.PNG" alt=""></li>
          <li class="col my-2"><img src="../assets/2-2.PNG" alt=""></li>
          <li class="col my-2"><img src="../assets/2-3.PNG" alt=""></li>
          <li class="col my-2"><img src="../assets/2.PNG" alt=""></li>
          <li class="col my-2"><img src="../assets/2-4.PNG" alt=""></li>
        </ul>
      </div>
      <div class="container mt-5 overflow-hidden">
        <div class="row">
          <div class="col-lg-6 px-0 position-relative">
            <img class="h-100 w-100 object-fit-cover" src="../assets/threeguy.avif" alt="nothing">
            <a href="#!" class="position-absolute bg-white p-4 mooj" style="top: 50%;left: 50% ; transform: translate(-50%, -50%);" ><i class="bi bi-play-fill text-danger"></i></a>
          </div>
          <div class="col-lg-6 p-5 z-1 text-center" style="background-color: #111;color: #fff;">
            <img class="mb-3" src="../assets/mauntain4.PNG" alt="nothing">
            <p class="c-45">Fun Facts</p>
            <h1>Our experience allows to bring disruptive</h1>
            <p class="c-45 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing Porro repudiandae, fuga placeat omnis similique dolor veniam ducimus quasi facere consequatur reiciendis est rem vel? if you have ab php call me</p>
            <div class="row">
              <div class="col d-flex align-items-center mt-4 justify-content-center">
                <img src="../assets/4k.PNG" alt="nothing">
                <p class="m-0 ms-3">Projects<br>Done</p>
              </div>
              <div class="col d-flex align-items-center mt-4 justify-content-center">
                <img src="../assets/1k.JPG" alt="nothing">
                <p class="m-0 ms-3">Happy<br>Clients</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="height: 2vh;"></div>
    </main>
@endsection