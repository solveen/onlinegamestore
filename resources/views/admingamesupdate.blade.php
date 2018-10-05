@extends('layouts.adminmaster')

@section('content')
    <div class="container" style="margin-top:70px">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <h1 class="log">Edit games</h1>
                <form action="/admingamesupdate/{{$games->id}}"  method="post"  enctype="multipart/form-data" style="margin-top:30px">
                    {{ csrf_field() }}

                    <div class="form-group ">
                        <label for="game_name" >{{ __('GAME NAME') }}</label>


                        <input id="game_name" type="text" placeholder="Enter Game " value="{{$games->game_name}}" class="form-control{{ $errors->has('game_name') ? ' is-invalid' : '' }}" name="game_name" value="{{ old('game_name') }}" required autofocus>

                        @if ($errors->has('game_name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('game_name') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group ">
                        <label for="category_id" >{{ __(' CATEGORY ID') }}</label>


                        <input id="category_id" type="text" placeholder="Enter the game category" value="{{$games->category_id}}" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" value="{{ old('category_id') }}" readonly>

                        @if ($errors->has('category_id'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-group ">
                        <label for="category" >{{ __('GAME CATEGORY') }}</label>


                        <input id="category" type="text" placeholder="Enter the game category" value="{{$games->category}}" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" readonly>

                        @if ($errors->has('category'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">GAME IMAGE</label>
                        <input type="file" name="game_image" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
                        <label>GAME DETAILS </label>
                        <textarea name="game_details" class="form-control"  id="txtarea" rows="5" required> {{$games->game_details}}</textarea>
                    </div>

                    <div class="form-group ">
                        <label for="price" >{{ __('Price') }}</label>


                        <input id="price" type="text" placeholder="Enter price " value="{{$games->price}}" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus>

                        @if ($errors->has('price'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                        @endif

                    </div>


                    <div class="form-group " style="margin-top:50px;">

                        <button type="submit" class="btn btn-primary">
                            {{ __('UPDATE GAME') }}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
