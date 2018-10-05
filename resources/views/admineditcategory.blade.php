@extends('layouts.adminmaster')

@section('content')
    <div class="container" style="margin-top:70px">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <h1 class="log">Edit category</h1>
                <form action="/updatecategory/{{$categories->id}}"  method="post"  enctype="multipart/form-data" style="margin-top:30px">
                    {{ csrf_field() }}


                    <div class="form-group ">
                        <label for="category" >{{ __('GAME CATEGORY') }}</label>


                        <input id="category" type="text" placeholder="Enter the game category" value="{{$categories->category}}" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" required autofocus>

                        @if ($errors->has('category'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Category image</label>
                        <input type="file" name="category_image" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
                        <label>CATEGORY DETAILS </label>
                        <textarea name="category_details" class="form-control" id="txtarea" rows="5" required> {{$categories->category_details}}</textarea>
                    </div>

                    <div class="form-group " style="margin-top:50px;">

                        <button type="submit" class="btn btn-primary">
                            {{ __('Update Category') }}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
