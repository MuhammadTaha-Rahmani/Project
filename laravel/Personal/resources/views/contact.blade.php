@extends('layouts.header')
@section('tilte' , 'Contact')
@section('link_css' , 'get-tu.css')
@section('safa_bg_text' , 'bg-black text-white')
@section('home_color' , 'text-secondary')
@section('about_color' , 'text-secondary')
@section('portfolio_color' , 'text-secondary')
@section('pages_color' , 'text-secondary')
@section('contact_color' , 'text-danger')
@section('name_1' , 'Home')
@section('name_2' , 'About')
@section('name_3' , 'Portfolio')
@section('name_4' , 'Pages')
@section('name_link_1' , '/')
@section('name_link_2' , 'about')
@section('name_link_3' , 'portfolio')
@section('name_link_4' , 'works')
@section('head')
    <main class="container">
        <div class="row pt-4 justify-content-center">
            <div class="col-lg-6 text-center text-lg-start">
                    <img class="mb-3" src="../assets/mountain2.PNG" alt="nothing">
                    <p class="c-b8">Contact Me</p>
                    <h1>Get in Touch</h1>
            <div class="mt-5">
                <ul class="list-unstyled">
                    <li class="d-flex flex-column flex-lg-row align-items-center mb-5">
                        <i class="bi bi-geo-alt me-3 i"></i>
                        <div>
                            <p class="fw-medium">Get in Touch</p>
                            <a class="c-b8 text-decoration-none">IR,Gonbad,123.569</a>
                        </div>
                    </li>
                    <li class="d-flex flex-column flex-lg-row align-items-center mb-5">
                        <i class="bi bi-telephone me-lg-3 i"></i>
                        <div>
                            <p class="fw-medium">Phone Number</p>
                            <a class="text-decoration-none c-b8" href="tel:+989116535684">+989116598431</a>
                        </div>
                    </li>
                    <li class="d-flex flex-column flex-lg-row align-items-center">
                        <i class="bi bi-envelope-paper me-3 i"></i>
                        <div>
                            <p class="fw-medium">Email Address</p>
                            <a class="text-decoration-none c-b8" href="mailto:msr.cp.safarahmani@gmail.com">msr.cp.safarahmani@gmail.com</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <form action="/contact" method="post" style="background-color: #f7f7f7;" class="col-lg-6  mt-4 mt-md-0 row p-3 mb-3 mb-lg-0">
        @csrf
            <div class="col-12">
                <label for="subject" class="form lable">How Can We Help?</label>
                <select id="subject" class="form-select" aria-label="Default select example">
                    <option selected class="d-none">Select a Subject</option>
                    <option value="1">UI/Ux</option>
                    <option value="2">Front</option>
                    <option value="3">Back</option>
                </select>
            </div>
            <div class="w-100"></div>
            <div class="col-6">
                <label for="first_name" class="form-label">First Name</label>
                <input id="first_name" name="first_name" type="text" class="form-control" placeholder="type your First Name" required>
            </div>
            <div class="col-6">
                <label for="last name" class="form-label">Last Name</label>
                <input name="last_name" id="last name" type="text" class="form-control" placeholder="Type Your Last Name" required>
            </div>
            <div class="col-6">
                <label for="email" class="form-label">Email</label>
                <input name="email" id="email" type="text" class="form-control" placeholder="Type Your Email">
            </div>
            <div class="col-6">
                <label for="phone number" class="form-label">Phone Number</label>
                <input name="phone_num" id="phone number" type="text" class="form-control" placeholder="Type Your Phone Number" required>
            </div>
            <div class="col-12">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" id="message" type="text" style="height: 8rem;" class="form-control" placeholder="Enter message" required></textarea>
            </div>
            <div class="mt-4">
             <input type="submit" value="Send" class="text-decoration-none btn btn-danger p-lg-2">
            </div>
        </form>
        </div>
    </main>
@endsection