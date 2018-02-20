@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::file('picture')}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'description')}}
            {{Form::textarea('description', $post->description, ['class' => 'form-control', 'placeholder' => 'description Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('type', 'Type of Structure')}}
            {{Form::select('type', 
                [
                    'Skyscraper' => 'Skyscraper', 
                    'Castle' => 'Castle',
                    'Palace' => 'Palace',
                    'Hotel' => 'Hotel',
                    'Airport' => 'Airport',
                    'Landmark and Monument' => 'Landmark and Monument',
                    'Temple and Monastery' => 'Temple and Monastery',
                    'Islamic Architecture' => 'Islamic Architecture',
                    'Museum' => 'Museum',
                    'Shopping Mall' => 'Shopping Mall'], 
                $post->type
            )}}
        </div>
        <div class="form-group">
            {{Form::label('tags', 'Tags')}}
            {{Form::text('tags', $post->tags, ['class' => 'form-control', 'placeholder' => 'Add Tags ...'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  
    {!! Form::close() !!}
@endsection