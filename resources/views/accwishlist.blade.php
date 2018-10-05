
@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top:70px">
        @if (session()->has('notify'))
            <div class="alert alert-success">
                {{session()->get('notify')}}

            </div>
        @endif
            @if (session()->has('notifi'))
                <div class="alert alert-danger">
                    {{session()->get('notifi')}}

                </div>
            @endif
        <div class="row">
            <div class="col">

                <h1>Your wishlist {{Auth::user()->first_name}} </h1>
                <table class="table table-hover table-bordered mt-4" >
                    <thead>
                    <tr>
                        <th  width="5">S.N</th>
                        <th>Accessory Name</th>
                        <th>Price</th>
                        <th>User</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($accwishlists as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->accessory_name}}</td>
                            <td>{{$value->price}}</td>
                            <td>{{$value->user}}</td>

                            <td>
                                <form  method = 'get' action = "/ordernow/{{$value->id}}" enctype="multipart/form-data">


                                    <input type = "hidden" name = "product_name" value = "{{$value->accessory_name}}">

                                    <input type = "hidden" name = "price" value = "{{$value->price}}"><br>
                                    <input type = "hidden" name = "euser_id" value = "{{ Auth::user()->id }}">
                                    <input type = "hidden" name = "user" value = "{{ Auth::user()->first_name }}">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Order Now') }}
                                    </button> <a class= "btn btn-danger" href="/deleteaccwishlist/{{$value->id}}">Delete wishlist item</a>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection






