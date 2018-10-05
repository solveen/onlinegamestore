@extends('layouts.adminmaster')
@section('content')
    <div class="container mr-5" style="margin-top:70px;">
        <div class="row">

            <div class="col-md-8">
                <h2 class="text-center">Accessory</h2>
                <form action="/addaccessory" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Accessory Name</label>
                        <input type="text" class="form-control" name="accessory_name" placeholder="Enter accessory here">
                    </div>
                    <div class="form-group">
                        <label>Accessory Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter accessory here">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Accessory Image</label>
                        <input type="file" name="accessory_image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label>Accessory Details </label>
                        <textarea name="details" class="form-control" id="txtarea" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Accessory category</label>
                        <input type="text" class="form-control" name="accessory_category" placeholder="Enter category here">
                    </div>


                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-outline-primary" value="Add Accessory">
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection



















