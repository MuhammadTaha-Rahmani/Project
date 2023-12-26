@extends('layouts.header')
@section('tilte' , 'Portfolio')
@section('link_css' , 'port.css')
@section('link_css_home' , 'card-2.css')
@section('safa_bg_text' , 'bg-black text-white')
@section('home_color' , 'text-secondary')
@section('about_color' , 'text-secondary')
@section('portfolio_color' , 'text-danger')
@section('pages_color' , 'text-secondary')
@section('contact_color' , 'text-secondary')
@section('name_1' , 'Home')
@section('name_2' , 'About')
@section('name_3' , 'Pages')
@section('name_4' , 'Contact')
@section('name_link_1' , '/')
@section('name_link_2' , 'about')
@section('name_link_3' , 'works')
@section('name_link_4' , 'contact')
@section('head')
            <main class="container">
             <div class = "text-center">
             <img class="mb-3" src="../assets/mountain2.PNG" alt="nothing" />
            <p>PORTFOLIO</p>
            <h1>My <span class="text-danger">Portfolio</span></h1>
             </div>
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
                <h3 id="html-home" class="html-color rounded-3 w-50 mx-auto text-center">
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
                <h3 id="css-home" class="css-color rounded-3 w-50 mx-auto text-center">
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
                <h3 id="js-home" class="js-color rounded-3 w-50 mx-auto text-center">js</h3>
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
                <h3 id="php-home" class="php-color rounded-3 w-50 mx-auto text-center">
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
@endsection