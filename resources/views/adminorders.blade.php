@extends('layouts.adminmaster')

@section('content')
    <div class="container" style="margin-top:70px">
        <div class="row">
            <div class="col">

                <h2>Orders</h2>
                <table class="table table-hover table-bordered mt-4" >
                    <thead>
                    <tr>
                        <th>Order id</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Ordered by</th>
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
                            <td>{{$value->user}}</td>
                            <td>{{$value->created_at}}</td>

                            <td>

                                <a class= "btn btn-success" href="/deliverorder/{{$value->id}}">Deliver order</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection






