<!-- show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top:70px;">
        @if (session()->has('Comment'))
            <div class="alert alert-success">
                {{session()->get('Comment')}}

            </div>
        @endif
            @if (session()->has('Reply'))
                <div class="alert alert-success">
                    {{session()->get('Reply')}}

                </div>
            @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <p><b>Title: {{ $post->title }}</b></p>
                        <p class="text-right"><b>Posted at: {{ $post->created_at }}</b></p>
                        <p>
                            {{ $post->content }}
                        </p>
                        <p class="text-right ">
                            <b>Posted by: {{ $post->user}}</b>
                        </p>
                        <hr/>
                        <h4>Display Comments</h4>
                        @foreach($comments as $comment)
                            <div class="display-comment mb-3">
                                <strong> {{ $comment->user }}</strong>
                                <p> {{ $comment->comment }}</p>

                            <form method="get" action="/addreply">
                            <div class="form-group ml-5">
                                <div class="form-group">
                                    <input type="text" name="reply"  class="form-control"  required/>
                                <input type="hidden" name="comment_id"  class="form-control" value="{{$comment->id}}" />
                                    <input type="hidden" name="user" class="form-control" value="{{Auth::user()->first_name}}"/>
                                    <input type="hidden" name="post_id"  class="form-control" value="{{$comment->post_id}}" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Reply"/>

                                    <a class= "btn btn-primary fa-pull-right" href="/viewreply/{{$comment->id}}">View replies</a>
                                </div>

                            </div>
                            </form>
                            </div>
                        @endforeach



                        <hr />
                        <h4>Add comment</h4>
                        <form method="get" action="/addcomments">
                            <div class="form-group">
                                <input type="hidden" name="user" class="form-control" value="{{Auth::user()->first_name}}"/>
                                <input type="hidden" name="post_id" class="form-control" value="{{$post->id}}"/>
                                <input type="text" name="comment" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Comment" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

