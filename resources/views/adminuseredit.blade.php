@extends('layouts.adminmaster')
@section('content')
    <div class="container" style="margin-top:70px">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1 style="margin-bottom:40px" >Update user profile</h1>
                    <form action="/update/{{$users->id}}" method="get"  enctype="multipart/form-data">
                        @csrf {!! method_field('patch')!!}
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" value="{{$users->first_name}}" name="first_name" placeholder="Enter your first Name here">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control"  value="{{$users->last_name}}" name="last_name" placeholder="Enter your last Name here">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control"  value="{{$users->address}}" name="address" placeholder="Enter your address here">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control"  value="{{$users->phone_number}}" name="phone_number" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control"  value="{{$users->email}}" name="email" placeholder="Enter your email">
                        </div>

                        <div class="form-group ">
                            <label>Password</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group ">
                            <label>Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                        </div>

                        <div class="form-group  mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>

            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection



















