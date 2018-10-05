@extends('layouts.adminmaster')

@section('content')
    <div class="container" style="margin-top:70px;">
        <div class="row">
            <div class="col">
                <h2>Add News</h2> <a href="/showform" class="btn btn-outline-primary btn-md">Add <i class="fas fa-plus"></i></a>
                <table class="table table-hover table-bordered mt-3">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>News Image</th>
                        <th class="w-50">Content</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->title}}</td>
                            <td><img src="{{asset('images/upload/'.$value->news_image)}}" height="100" width="100"></td>
                            <td>{{$value->content}}</td>

                            <td>
                                <a class= "btn btn-primary" href="/editnews/{{$value->id}}">Edit</a>
                                <a class= "btn btn-danger" href="/deletenews/{{$value->id}}">Delete</a>

                            </td>
                        </tr>

                    @endforeach
                    </tbody>

                </table>
                {{$news->links()}}
            </div>
        </div>
    </div>
@endsection
