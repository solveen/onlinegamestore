@extends('layouts.adminmaster')

@section('content')
    <div class="container" style="margin-top:70px">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <h1 class="log">Add category</h1>
                <form action="/addcategory"  method="post"  enctype="multipart/form-data" style="margin-top:30px">
                    {{ csrf_field() }}


                    <Select name = "category"  class = "form-control">
                        <Option>---Select category --</Option>

                            <Option value = "Shooting">Shooting</Option>
                             <Option value = "Rpg">Rpg</Option>
                            <Option value = "Racing">Racing</Option>


                    </Select>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Category image</label>
                        <input type="file" name="category_image" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
                        <label>CATEGORY DETAILS </label>
                        <textarea name="category_details" class="form-control" id="txtarea" rows="5" required></textarea>
                    </div>

                    <div class="form-group " style="margin-top:50px;">

                        <button type="submit" class="btn btn-primary">
                            {{ __('ADD CATEGORY') }}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
