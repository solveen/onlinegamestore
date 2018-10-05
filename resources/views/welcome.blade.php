@extends('layouts.master')
@section('script')
    <script>
        $(document).ready(function(){
            $('.navbar').addClass('transparent');

            $(window).scroll(function(){
                if($(window).scrollTop()>=50){
                    $('.navbar').removeClass('transparent');
                }else{
                    $('.navbar').addClass('transparent');
                }
            });
        });

    </script>
@append
@section('content')

    <!-- Main Contents -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="/home">
                <img class="d-block w-100" src="{{asset('images/2.jpg')}}"  alt="First slide">
                </a>
            </div>
            <div class="carousel-item">
                <a href="/home">
                <img class="d-block w-100" src="{{asset('images/3.jpg')}}"   alt="Second slide">
                </a>
            </div>
            <div class="carousel-item">
                <a href="/home">
                <img class="d-block w-100" src="{{asset('images/4.jpg')}}"   alt="Third slide">
                </a>
            </div>
            <div class="carousel-item">
                <a href="/home">
                <img class="d-block w-100" src="{{asset('images/5.jpg')}}"  alt="Fourth slide">
                </a>
            </div>
            <div class="carousel-item">
                <a href="/home">
                <img class="d-block w-100" src="{{asset('images/6.jpg')}}"   alt="Fifth slide">
                </a>
            </div>
            <div class="carousel-item">
                <a href="/home">
                <img class="d-block w-100" src="{{asset('images/7.jpg')}}"   alt="Sixth slide">
                </a>
            </div>
            <div class="carousel-item">
                <a href="/home">
                <img class="d-block w-100" src="{{asset('images/8.jpg')}}"   alt="Seventh slide">
                </a>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class = "container-fluid mt-5  mb-lg-5">


        <div class = "category-title">

            <h1 class = "text-center">Welcome to our site </h1>
        </div><hr><br>

        <div class = "row">

            <div class = "col-sm-4  ">
                <div class = "outer">	<img src = "images/cate/cat1.jpg">
                    <div class = "inner">
                        <h4 class = "text-center pt-2 pb-3">SHOOTING</h4>
                    </div>
                </div>

            </div>

            <div class = "col-sm-4 ">
                <div class = "outer">
                    <img src = "images/cate/cat2.jpg">
                    <div class = "inner">
                        <h4 class = "text-center pt-2 pb-3">RPG</h4>
                    </div>
                </div>
            </div>
            <div class = "col-sm-4 ">
                <div class = "outer">	<img src = "images/cate/ngames/r4.jpg">
                    <div class = "inner">
                        <h4 class = "text-center pt-2 pb-3">Racing</h4>
                    </div>
                </div>
            </div>
        </div>


    </div>

    </div>
    <a href="/login">
    <div class = "intersection-image-section" href="login">

        <div class = "intersection-divider"></div>

    </div>
    </a>
    <div class = "about-us-section container-fluid mt-5">

        <div class = "about-title">
            <h1 class = "text-center"> About Us</h1>

        </div><hr>

        <div class = "jumbotron about-body">

            <p>Download games for Windows instantly to your Windows device. Browse thousands of free and paid games by category. This video games store is as diverse as the games themselves. Get your daily dose of PC games , check out a console system like the PS4 , Xbox One , or Nintendo Wii U , or take your hobby on the road with a Nintendo 3DS or PS Vita . </p>
        </div>

    </div>
    <a href="/login">
    <div class = "intersection-image-section2">
    </div>
    </a>
    </div>


@endsection