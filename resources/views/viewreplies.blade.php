@extends('layouts.master')

@section('content')
            <div class="container" style="margin-top:70px;">
                    <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h1>Comment</h1>
                        <b>Comment by: {{$comments->user}}</b>
                        <p> {{$comments->comment}}</p>
                            <div class="card">
                                    <div class="card-body">

                                        <h3>Replies of the comment</h3>
                                        @foreach($replies as $value)
                             <div class="display-comment mb-3">
                <strong> {{ $value->user }}</strong>
                <p> {{ $value->reply }}</p>
            </div>
                                            <hr>
                                        @endforeach

                                            <form method="get" action="/addreply">
                                                <div class="form-group ml-5">
                                                    <div class="form-group">
                                                        <input type="text" name="reply"  class="form-control"  required/>
                                                        <input type="hidden" name="comment_id"  class="form-control" value="{{$comments->id}}" />
                                                        <input type="hidden" name="user" class="form-control" value="{{Auth::user()->first_name}}"/>
                                                        <input type="hidden" name="post_id"  class="form-control" value="{{$comments->post_id}}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" value="Reply"/>

                                                    </div>

                                                </div>
                                            </form>


                    </div>
                    </div>
            </div>
                    </div>
            </div>
@endsection