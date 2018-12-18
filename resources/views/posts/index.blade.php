@extends('layouts.app')

@section('content')
<h1>Posts</h1>
@if(count($posts)>0)
    @foreach($posts as $post) 
    <ul class="list-group">
        <div class="row">
            <div class="col-md-4 col-sm-4">
            <img src="storage/cover_images/{{$post->cover_image}}" alt="" style="width=100%">
            </div>
        </div>
       <li class="list-group-item"><h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3></li>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    </ul>
    @endforeach
    {{$posts->links()}}
@else 
<p>No posts found</p>

@endif 

@endsection
