@extends('layouts.main');
@section('link' , 'css/About.css')
@section('main')
            <main class="container mt-5">
               <div class="row">
                <div class="col-12 w-100">
                    <h2 class="z-1 p-color text-center text-lg-start down">
                        About <br> Muhammad Taha
                    </h2>
                   </div>
                <div class="col-lg-7">
                    <img id="img" class="d-block mx-auto" src="../assets/Capture.JPG" alt="guy">
                </div>
                <div class="col-lg text-center text-lg-start ps-lg-5 pe-lg-0 mt-5 mt-lg-0">
                    <p id="line" class="d-none d-lg-block"></p>
                    <p class="p-color mb-5 ms-0 ms-lg-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        At iusto quidem suscipit eum et quia velit vero sequi
                        sit nam, fuga modi, repellendus molestiae! Iste vero
                        provident eum laudantium beatae. In ipsum saepe
                        accusamus nisi laborum labore, delectus architecto eos.
                    </p>
                    <p class="p-color ms-0 ms-lg-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repudiandae alias quasi nihil beatae, facilis aliquam,
                        eligendi inventore voluptate quod adipisci, corporis
                        sapiente voluptas officia cum.
                    </p>
                    <a class="d-block text-lg-end" href="Contact.html">
                        <img width="150px" src="../assets/Group 2.svg" alt="get in touch">
                    </a>
                </div>
               </div>
            </main>
@endsection