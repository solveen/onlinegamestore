@extends('layouts.adminmaster')

@section('content')
    <div class="container" style="margin-top:70px;">
        <div class="row">
            <div class="col">
                <h2>Add price</h2> <a href="/adminaddcategory" class="btn btn-outline-primary btn-md">Add <i class="fas fa-plus"></i></a>
                <table class="table table-hover table-bordered mt-3">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Category image</th>
                        <th>Category details</th>

                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->category}}</td>
                            <td><img src="{{asset('images/upload/'.$value->category_image)}}" height="100" width="100"></td>
                            <td>{{$value->category_details}}</td>


                            <td>
                                <a class= "btn btn-primary" href="/editcategory/{{$value->id}}">Edit</a>
                                {{--<a class= "btn btn-outline-danger" href="/deletecategory/{{$value->id}}">Delete</a>--}}

                            </td>
                        </tr>

                    @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection
