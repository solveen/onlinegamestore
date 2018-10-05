@extends('layouts.adminmaster')

@section('content')
    <div class="container" style="margin-top:70px">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <h1 class="log">Edit News</h1>
                <form action="/updatenews/{{$news->id}}"  method="post"  enctype="multipart/form-data" style="margin-top:30px">
                    {{ csrf_field() }}

                    <div class="form-group ">
                        <label for="title" >{{ __('title') }}</label>


                        <input id="title" type="text" value="{{$news->title}}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

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
                        <label>Content </label>
                        <textarea name="content" class="form-control"  id="txtarea" rows="7" required> {{$news->content}}</textarea>
                    </div>




                    <div class="form-group " style="margin-top:30px;">

                        <button type="submit" class="btn btn-primary">
                            {{ __('UPDATE NEWS') }}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
