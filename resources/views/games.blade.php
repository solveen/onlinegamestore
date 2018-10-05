@extends('layouts.master')

@section('content')

<a href="/games">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:50px">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner mainslider">
                <div class="carousel-item active">
                    <img class="d-block  justify-content-center  rounded" src="images/8.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block justify-content-center rounded"  src="images/7.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block justify-content-center rounded"  src="images/6.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</a>

    <!--<products>-->


    <h1 class="text-center" style="margin-top:30px">All games</h1>
        <div class = "container-fluid mt-5  mb-lg-5" style="margin-top:30px">

                <div class="row">
                    @foreach($games as $value)
                        <div class="col-3 mb-5">
                            <div class="card-group">
                                <div class="card mr-2">
                                    <img class="card-img-top" src="{{('images/upload/'.$value->game_image)}}" alt="Card image cap">
                                    <div class="card-body">

                                        <h4 class="card-title"><b>{{$value->game_name}}</b></h4>

                                        <p class="card-text"> {{$value->game_details}}</p>

                                    </div>
                                    <div class="card-footer">
                                        <div class="fa-pull-left price">Rs.{{$value->price}}</div>

                                        <a class="btn btn-success fa-pull-right" href="/gamedetails/{{$value->id}}" role="button">More details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach




                </div>
                <div class="container" style="margin-left:725px;">{{$games->links()}}</div>
            </div>

    </div>
<div class="container-fluid" style="margin-top:30px; margin-left:200px">
    <h2 class="ml-2">Game Reviews</h2>
    <div class="row">
        <div class="col-md-9 mt-3">
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
    <div class="mt-4">{{$reviews->links()}}</div>

</div>


@endsection




