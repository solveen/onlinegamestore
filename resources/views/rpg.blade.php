@extends('layouts.master')

@section('content')
    <style>
        .carousel-inner img {

            height: 500px;

        }

    </style>
    <!--<products>-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:50px">

        <div class="carousel-inner mainslider">
            <div class="carousel-item active">
                <img class="d-block  justify-content-center  rounded" src="images/j.jpg" alt="First slide">
            </div>
            <div class="carousel-caption">
                <h2>Role playing Games</h2>
            </div>

        </div>
    </div>

    <h1 class="text-center" style="margin-top:70px">Role Playing games</h1>


        <div class ="container-fluid mt-5  mb-lg-5" style="margin-top:30px">

            <div class="row">
                @foreach($games as $game)
                    <div class="col-3 mb-5">
                        <div class="card-group">
                            <div class="card mr-2">
                                <img class="card-img-top" src="{{('images/upload/'.$game->game_image)}}" alt="Card image cap">
                                <div class="card-body">
                                    <h3 >{{$game->game_name}}</h3>

                                    <p class="card-text"> {{$game->game_details}}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="fa-pull-left price">Rs.{{$game->price}}</div>
                                    <a class="btn btn-success fa-pull-right" href="/gamedetails/{{$game->id}}" role="button">More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>

    <div class="container" style="margin-top:30px; margin-right:60px">
        <h2 class="ml-2">RPG game Reviews</h2>
        <div class="row ">
            <div class="col-md-10 ">
                @foreach($reviews as $value)
                    <div class="card mt-3"><div class="card-body">


                            <h3 class="font-weight-bold fa-pull-left"> {{$value->game_name}}</h3>  <p class="fa-pull-right"> Rating: {{$value->rating}}/10</p>
                            <br>
                            <hr>

                            <br>



                            <p > {{$value->review}}</p>
                            <br>

                            <p class="fa-pull-left">Reviewed by: {{$value->reviewed_by}}</p>
                        </div></div>
                @endforeach


            </div>
        </div>
    </div>


@endsection


