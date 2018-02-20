@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}    
        </div>
        <div class="form-group">
            {{Form::file('picture')}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
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
                ['placeholder' => 'Choose Category...']
            )}}
        </div>
        <div class="form-group">
            {{Form::label('tags', 'Tags')}}
            {{Form::text('tags', '', ['class' => 'form-control', 'placeholder' => 'Add Tags ...'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  
    
    {!! Form::close() !!}
@endsection


