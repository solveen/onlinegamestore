@extends('layouts.adminmaster')

@section('content')
    <div class="container" style="margin-top:70px;">
        <div class="row">
            <div class="col">
                <h2>Add accessories</h2> <a href="/accessoryform" class="btn btn-outline-primary btn-md">Add <i class="fas fa-plus"></i></a>
                <table class="table table-hover table-bordered mt-3">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Accessory name</th>
                        <th>Accessory Image</th>
                        <th>Accessory Price</th>

                        <th>Accessory category</th>
                        <th class="w-25">Accessory Details</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($accessories as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->accessory_name}}</td>


                            <td><img src="{{asset('images/upload/'.$value->accessory_image)}}" height="100" width="100"></td>
                            <td>Rs.{{$value->price}}</td>
                            <td>{{$value->accessory_category}}</td>
                            <td>{{$value->details}}</td>



                            <td>
                                <a class= "btn btn-primary" href="/editaccessory/{{$value->id}}">Edit</a>
                                <a class= "btn btn-danger" href="/delaccessory/{{$value->id}}">Delete</a>

                            </td>
                        </tr>

                    @endforeach
                    </tbody>

                </table>
                {{$accessories->links()}}
            </div>
        </div>
    </div>
@endsection
