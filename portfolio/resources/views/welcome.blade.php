@extends('layouts.main');
@section('link' , 'css/style.css');
@section('main')
    {{--<x-alert type="danger" message="goodnight"/>--}}
        <main class="container c-mt">
                    <div class="row justify-content-center justify-content-lg-between">
                        <div class="col-lg-9 col-md-12 row">
                            <div class="col-md align-self-center text-sm-center text-md-start">
                                <h3 class="fs-2 p-color mb-3">UI/UX Developer</h3>
                                <h2 class="h-size h-color name fw-semibold">Muhammad Taha</h2>
                                <p class="p-color mt-5 p-size">Lorem ipsum dolor sit amet consectetur  adipisicing elit.
                                    Ducimus, ratione. Consectetur est eaque, ab tempora  porro perspiciatis
                                    adipisci,autem laborum maiores ullam  reprehenderit.</p>
                                <a id="main-link" style="color: #f8e7a1;" class="d-inline-block mt-lg-5 mt-sm-3 text-decoration-none p-size" href="#!">
                                    Let's talk
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-md">
                                <img class="rounded h-100 d-block mx-auto" style="width: 400px; object-fit: cover;" src="assets/guy.avif" alt="guy">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 row flex-lg-column justify-content-between text-center mx-auto mt-sm-5 mt-lg-0">
                                <div class="col-md">
                                    <h3 class="p-color fw-normal fs-4">Years of<br>Experience</h3>
                                    <div class="fs-big h-color fw-semibold">3+</div>
                                </div>
                                <div class="col-md">
                                    <h3 class=" p-color fw-normal fs-4">Complete<br>Project</h3>
                                    <div class="fs-big h-color fw-semibold">220+</div>
                                </div>
                                <div class="col-md">
                                    <h3 class="p-color fw-normal fs-4" id="t">Client</h3>
                                    <div class="fs-big h-color fw-semibold">60+</div>
                                </div>
                        </div>
                    </div>
        </main>
@endsection