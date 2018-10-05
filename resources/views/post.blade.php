@extends('layouts.master')
@section('content')
    <div class="container" style="margin-top:70px">
        @if (session()->has('Post'))
            <div class="alert alert-success">
                {{session()->get('Post')}}

            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">


                <h1 class="log">Add Posts</h1>
                <form action="/addposts"  method="post"  enctype="multipart/form-data" style="margin-top:30px">
                    {{ csrf_field() }}


                    <div class="form-group ">
                        <label for="title" >{{ __('Title') }}</label>


                        <input id="title" type="text" placeholder="Enter the title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Content </label>
                        <textarea name="content" class="form-control" id="content" rows="5" placeholder="Enter your disscussion content" required></textarea>
                    </div>

                    <div class="form-group ">



                        <input id="user" type="hidden" value="{{ Auth::user()->first_name }}" class="form-control{{ $errors->has('user') ? ' is-invalid' : '' }}" name="user" value="{{ old('user') }}" readonly>

                        @if ($errors->has('user'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-group " style="margin-top:50px;">

                        <button type="submit" class="btn btn-success">
                            {{ __('Add post') }}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>







<div class="container" style="margin-top:70px;">
        <div class="row">
            <div class="col-md-12">




                    @foreach($posts as $value)
                    <div class="card mt-3">
                        <div class="card-body " >
                    <p class="font-weight-bold"> Title: {{$value->title}}<p>
                    <p >Post by: {{$value->user}}</p>
                    <p>Post id: {{$value->id}}</p>
                    <p >Posted at: {{$value->created_at}}</p>


                    <a class= "btn btn-outline-primary" style="margin-top:20px;margin-bottom:30px;"href="/viewposts/{{$value->id}}">View post</a>
                        <a class= "btn btn-outline-danger" style="margin-top:20px;margin-bottom:30px;"href="/delpost/{{$value->id}}">Delete</a>
    </div></div>
                    @endforeach


            </div>
            <div class="container" >{{$posts->links()}}</div>
        </div>
    </div>
@endsection
