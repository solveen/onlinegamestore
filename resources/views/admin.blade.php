@extends('layouts.adminmaster')

@section('content')
    <div class="container" style="margin-top:70px">
        <div class="row">
            <div class="col">
                <h1>Edit users profile</h1>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th  width="5">S.N</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->first_name}}</td>
                            <td>{{$value->last_name}}</td>
                            <td>{{$value->address}}</td>
                            <td>{{$value->phone_number}}</td>
                            <td>{{$value->email}}</td>
                            <td>
                                <a class= "btn btn-primary" href="/edit/{{$value->id}}">Edit</a>
                                <a class= "btn btn-danger" href="/datadel/{{$value->id}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection
