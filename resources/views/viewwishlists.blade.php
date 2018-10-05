@extends('layouts.master')

@section('content')

    <div class="container" style="margin-top:70px;">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center" ><b>View your wishlists </b> </h1>
                <div class="card">
                    <div class="card-body" style="margin-bottom:60px;">
                        <a class= "btn btn-success mt-5" href="/wishlist/{{auth::user()->id}}">Games wishlist</a>
                        <a class= "btn btn-success mt-5 fa-pull-right" href="/accwishlist/{{auth::user()->id}}">Accessories wishlist</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






