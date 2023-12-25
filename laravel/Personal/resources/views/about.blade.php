@extends('layouts.header')
@section('tilte' , 'About')
@section('link_css' , 'ab.css')
@section('safa_bg_text' , 'bg-black text-white')
@section('home_color' , 'text-secondary')
@section('about_color' , 'text-danger')
@section('portfolio_color' , 'text-secondary')
@section('pages_color' , 'text-secondary')
@section('contact_color' , 'text-secondary')
@section('name_1' , 'Home')
@section('name_2' , 'Portfolio')
@section('name_3' , 'Pages')
@section('name_4' , 'Contact')
@section('name_link_1' , '/')
@section('name_link_2' , 'portfolio')
@section('name_link_3' , 'works')
@section('name_link_4' , 'contact')
@section('head')
    <div class="about pb-5">
        <div class="container pt-3">
            <div class="row align-items-center">
                <div class="col-lg-6 ps-5 text-center text-lg-start">
                    <img class="mb-3" src="../assets/mountain1.PNG" alt="nothing">
                    <p class="c-a2">About</p>
                    <h1>Global network of <br>talent that,s changing <br>the way creatives</h1>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <p class="c-a2 text-center text-lg-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus veritatis, <br> modi officiis obcaecati repudiandae, quaerat numquam ea cum <br> soluta tempora porro quam accusamus perferendis ad sed explicabo <br> quo similique inventore, eius rerum ab tenetur. Tenetur <br> et vitae earum fugit consectetur?</p>
                    <h6 class="mb-3 text-center text-lg-start mt-4 mt-lg-0">Design Strategy <span class="ms-5">82%</span></h6>
                    <div class="progress w-50 mx-auto mx-lg-0" role="progressbar" aria-label="Example 4px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                        <div class="progress-bar bg-danger" style="width: 82%"></div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 container">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <img class="mb-3" src="../assets/mountain2.PNG" alt="nothing">
                <p class="c-a2">Services</p>
                <h1>What I Do</h1>
            </div>
        </div>
        <div class="mx-5">
            <ul class="list-unstyled row flex-wrap">
                <li class="col-lg-3 col-md-6 my-4">
                    <h1>01</h1>
                    <h3>Front End</h3>
                    <p class="c-a2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, architecto.</p>
                    <a class="text-decoration-none bg-like p-2" href="#!">+</a>
                </li>
                <li class="col-lg-3 col-md-6 my-4">
                    <h1>02</h1>
                    <h3>Back End</h3>
                    <p class="c-a2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, architecto.</p>
                    <a class="text-decoration-none bg-like p-2" href="#!">+</a>
                </li>
                <li class="col-lg-3 col-md-6 my-4">
                    <h1>03</h1>
                    <h3>UI/UX</h3>
                    <p class="c-a2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, architecto.</p>
                    <a class="text-decoration-none bg-like p-2" href="#!">+</a>
                </li>
                <li class="col-lg-3 col-md-6 my-4">
                    <h1>04</h1>
                    <h3>Data Science</h3>
                    <p class="c-a2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, architecto.</p>
                    <a class="text-decoration-none bg-like p-2" href="#!">+</a>
                </li>
            </ul>
        </div>
    </div>
@endsection