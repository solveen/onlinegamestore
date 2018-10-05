@extends('layouts.master')

@section('content')

    <div class="container" style="margin-top:70px;">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center" ><b>Account Settings</b> </h1>
                <div class="card mt-3">
                    <div class="card-body " >

                        <p>User id: {{auth::user()->id}}</p><hr>

                        <p>User Name: {{auth::user()->first_name}} {{auth::user()->last_name}}</p>
                        <hr>


                            <p>Address: {{auth::user()->address}}</p><hr>
                            <p>Phone Number: {{auth::user()->phone_number}}</p><hr>
                                <p>Email: {{auth::user()->email}}</p><hr>


                                <a class= "btn btn-primary" href="/edituserprofile/{{auth::user()->id}}">Edit your profile</a>

                                <a class= "btn btn-danger" href="/deleteuserprofile/{{auth::user()->id}}">Delete Your Account</a>




            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
