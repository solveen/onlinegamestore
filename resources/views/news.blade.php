@extends('layouts.master')
@section('content')
    <h1 class="text-center" style="margin-top:70px;">Latest News</h1>
    <hr>
    @foreach($news as $values)
  <div class="container" >
      <div class="row text-center text-grey">
          <div class="col-md-12">
              <h2 class="mt-3 ">{{$values->title}}</h2>
              <p><img src="{{asset('images/upload/'.$values->news_image)}}" height="500px" width="1000px"></p>

             <div class="card"><div class="card-body"><p class="text-justify">{{$values->content}}</p></div></div>
          </div>
      </div>
<hr>
  </div>

@endforeach
@endsection