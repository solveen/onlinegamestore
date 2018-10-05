@extends('layouts.adminmaster')

@section('content')
    <div class="container" style="margin-top:70px">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <h1 class="log">Add games</h1>
                <form action="/addgames"  method="post"  enctype="multipart/form-data" style="margin-top:30px">
                    {{ csrf_field() }}

                    <div class="form-group ">
                        <label for="game_name" >{{ __('GAME NAME') }}</label>


                            <input id="game_name" type="text" placeholder="Enter Game " class="form-control{{ $errors->has('game_name') ? ' is-invalid' : '' }}" name="game_name" value="{{ old('game_name') }}" required autofocus>

                            @if ($errors->has('game_name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('game_name') }}</strong>
                                    </span>
                            @endif

                    </div>

                    <div class="form-group">
                        <label>Category id</label>


                        <Select name = "category_id"  class = "form-control">
                            <Option>----Select Category -----</Option>
                            @foreach($categories as $cate)

                                <Option value = "{{$cate->id}}">{{$cate->category}}</Option>

                            @endforeach
                        </Select>
                    </div>
                        <div class="form-group">
                        <label>Category Name</label>
                        <Select name = "category"  class = "form-control">
                            <Option>---Select same category as above--</Option>
                            @foreach($categories as $cate)

                                <Option value = "{{$cate->category}}">{{$cate->category}}</Option>

                            @endforeach
                        </Select>

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">GAME IMAGE</label>
                        <input type="file" name="game_image" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
                        <label>GAME DETAILS </label>
                        <textarea name="game_details" class="form-control" id="txtarea" rows="5"></textarea>
                    </div>
                    <div class="form-group ">
                        <label for="price" >{{ __('Price') }}</label>


                        <input id="price" type="text" placeholder="Enter price " class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus>

                        @if ($errors->has('price'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                        @endif

                    </div>



                    <div class="form-group " style="margin-top:50px;">

                            <button type="submit" class="btn btn-primary">
                                {{ __('ADD GAME') }}
                            </button>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
