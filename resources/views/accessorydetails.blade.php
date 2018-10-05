@extends('layouts.master')

@section('content')


    <script>
        jQuery(document).ready(function($){

            $('#etalage').etalage({
                thumb_image_width: 600,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 800,
                show_hint: true,
                click_callback: function(image_anchor, instance_id){
                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                }
            });

        });
    </script>


    @foreach($accessories as $value)
        <div class="container product-view">
            @if (session()->has('notif'))
                <div class="alert alert-success">
                    {{session()->get('notif')}}

                </div>
            @endif
                @if (session()->has('notify'))
                    <div class="alert alert-success">
                       {{session()->get('notify')}}

                    </div>
                @endif

            <h3 class="text-center">{{$value->accessory_name}}</h3>
            <div class="row">
                <div class="col-sm-8 view-pic" style="margin-top:20px">
                    <div class="single_grid">
                        <div class="grid images_3_of_2">
                            <ul id = "etalage">
                                <li>
                                    <img src = "{{asset('images/upload/'.$value->accessory_image)}}" class="etalage_thumb_image">
                                    <img src = "{{asset('images/upload/'.$value->accessory_image)}}" class="etalage_source_image">
                                </li>
                                <li>
                                    <img src = "{{asset('images/upload/'.$value->accessory_image)}}" class="etalage_thumb_image">
                                    <img src = "{{asset('images/upload/'.$value->accessory_image)}}" class="etalage_source_image">
                                </li>
                                <li>
                                    <img src = "{{asset('images/upload/'.$value->accessory_image)}}" class="etalage_thumb_image">
                                    <img src = "{{asset('images/upload/'.$value->accessory_image)}}" class="etalage_source_image">
                                </li>
                            </ul>
                        </div></div>
                </div>

                <div class="col-sm-4 view-info" >

                    <hr class="view-hr">
                    <h5><b>Accessory Details</b></h5>

                    <h6 class="view-topic mt-5">Category: {{$value->accessory_category}}</h6>   <br>
                    <h6 class="view-topic">{{$value->details}} </h6>  <br>
                    <hr class="view-hr" >
                    <h5 class="view-topic"  ><b>Price: Rs.{{$value->price}}</b> </h5><br>

                    <form  method = 'get' action = "/ordernow/{{$value->id}}">

                        <input type = "hidden" name = "product_name" value = "{{$value->accessory_name}}">
                        <input type = "hidden" name = "price" value = "{{$value->price}}"><br>
                        <button type="submit" class="btn btn-success">
                            {{ __('Order now') }}
                        </button>
                        <input type = "hidden" name = "euser_id" value = "{{auth::user()->id}}"><br>
                        <input type = "hidden" name = "user" value = "{{auth::user()->first_name}}"><br>

                    </form>

                    <form  method = 'get' action = "/addaccwishlist">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add to wishlist') }}
                        </button>
                        <input type = "hidden" name = "accessory_name" value = "{{$value->accessory_name}}">
                        <input type = "hidden" name = "price" value = "{{$value->price}}"><br>
                        <input type = "hidden" name = "euser_id" value = "{{auth::user()->id}}"><br>
                        <input type = "hidden" name = "user" value = "{{auth::user()->first_name}}"><br>


                    </form>



                </div>
            </div>
            @endforeach
        </div>
        <div class="container " style="margin-top:80px">
            <hr class="bg-dark">
            @if (session()->has('Review'))
                <div class="alert alert-success">
                    {{session()->get('Review')}}

                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-8">


                    <h2 >Add review of {{$value->accessory_name}}</h2>
                    <form action="/accreview"  method="post"  enctype="multipart/form-data" style="margin-top:30px">
                        {{ csrf_field() }}


                        <input type = "hidden" name = "accessory_name" value = "{{$value->accessory_name}}">
                        <input type = "hidden" name = "accessory_id" value = "{{$value->id}}">

                        <div class="form-group">
                            <label>Review details</label>
                            <textarea name="review" class="form-control" id="review" rows="5" placeholder="Enter your review details" required></textarea>
                        </div>
<div class="form-group"><label>Rating</label>
                        <Select name = "rating"  class = "form-control">
                            <Option>---Select rating --</Option>

                            <Option value = "1">Waste of money</Option>
                            <Option value = "2">Worse</Option>
                            <Option value = "3">Very Poor</Option>
                            <Option value = "4">Poor</Option>
                            <Option value = "5">Mediocre</Option>
                            <Option value = "6">Fair</Option>
                            <Option value = "7">Good</Option>
                            <Option value = "8">Great</Option>
                            <Option value = "9">Superb</Option>
                            <Option value = "10">Excellent</Option>
                        </Select>
</div>
                        <div class="form-group ">

                            <input id="reviewed_by" type="hidden" value="{{ Auth::user()->first_name }}" class="form-control{{ $errors->has('reviewed_by') ? ' is-invalid' : '' }}" name="reviewed_by" value="{{ old('reviewed_by') }}" readonly>

                            @if ($errors->has('reviewed_by'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('reviewed_by') }}</strong>
                                    </span>
                            @endif

                        </div>
                        <div class="form-group " style="margin-top:50px;">

                            <button type="submit" class="btn btn-success">
                                {{ __('Post review') }}
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:30px; margin-right:60px">
            <div class="row">
                <div class="col-md-10">
                    @foreach($accreviews as $value)
                        <div class="card mt-3"><div class="card-body">


                                <h3 class="font-weight-bold fa-pull-left"> {{$value->accessory_name}}</h3>  <p class="fa-pull-right"> Rating: {{$value->rating}}/10</p>
                                <br>
                                <hr>

                                <br>



                                <p > {{$value->review}}</p>
                                <br>

                                <p class="fa-pull-left">Reviewed by: {{$value->reviewed_by}}</p>
                            </div></div>
                    @endforeach


                </div>
            </div>
        </div>
@endsection