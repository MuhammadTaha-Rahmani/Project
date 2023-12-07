@extends('layouts.main');
@section('main')
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
@endsection