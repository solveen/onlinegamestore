@extends('layouts.adminmaster')
@section('content')
    <div class="container" style="margin-top:70px">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <h1 class="log">Add News</h1>
                <form action="/addnews"  method="post"  enctype="multipart/form-data" style="margin-top:30px">
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
                        <label for="exampleFormControlFile1">News Image</label>
                        <input type="file" name="news_image" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
                        <label>News Content </label>
                        <textarea name="content" class="form-control" id="content" rows="5" placeholder="Enter your news content" required></textarea>
                    </div>

                    <div class="form-group " style="margin-top:50px;">

                        <button type="submit" class="btn btn-primary">
                            {{ __('Add news') }}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
