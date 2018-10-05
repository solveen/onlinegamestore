@extends('layouts.adminmaster')

@section('content')
    <div class="container" style="margin-top:70px">
        <div class="row">
            <div class="col">

                <h1>Edit Games</h1>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th  width="5">S.N</th>
                        <th>Game Name</th>
                        <th>Category</th>

                        <th>Game Image</th>
                        <th>Price</th>
                        <th class="w-25">Game details</th>

                        <th >Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($games as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->game_name}}</td>
                            <td>{{$value->category}}</td>

                            <td><img src="{{asset('images/upload/'.$value->game_image)}}" height="100" width="100"></td>
                            <td>Rs.{{$value->price}}</td>
                            <td>{{$value->game_details}}</td>

                            <td>
                                <a class= "btn btn-primary" href="/admingameschange/{{$value->id}}">Edit</a>
                                <a class= "btn btn-danger" href="/admingamesdelete/{{$value->id}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$games->links()}}
            </div>

        </div>
    </div>
@endsection
