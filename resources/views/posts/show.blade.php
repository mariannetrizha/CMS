@extends('layouts.app')

@section('content')

<a href="./" class="btn btn-default">Go back</a>
<h1>{{$post->title}}</h1>

<div>
    <img src="storage/cover_images/{{$post->cover_image}}" alt="where's the pic??" style="width=100%">
    {!!$post->body!!}
</div>
<hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)

<a href="{{$post->id}}/edit" class ="btn btn-default">Edit</a>
{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=>'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ["class" => "btn btn-danger"])}}
{!!Form::close()!!}
@endif
@endif
@endsection 