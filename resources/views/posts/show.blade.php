@extends('layouts.app')

@section('content')
    
    <div class="well">
        <h1>{{$post->title}}</h1>
        <img style="width:100%" src="/storage/pictures/{{$post->picture}}">
        <br><br>
        <p>{{$post->description}}</p>
        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    </div>
    <hr>
    @if(!Auth::guest() && Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit Post</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endsection