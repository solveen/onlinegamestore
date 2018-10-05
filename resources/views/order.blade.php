@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top:70px">
        @if (session()->has('cancel'))
            <div class="alert alert-danger">
                {{session()->get('cancel')}}

            </div>
        @endif
        <div class="row">
            <div class="col">

                <h1 class="text-center">Your order products {{Auth::user()->first_name}}</h1>
                <table class="table table-hover table-bordered mt-4" >
                    <thead>
                    <tr>
                        <th>Order id</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Ordered at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->product_name}}</td>
                            <td>{{$value->price}}</td>
                            <td>{{$value->created_at}}</td>

                            <td>

                                <a class= "btn btn-danger" href="/deliverorder/{{$value->id}}">Cancel order</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection






