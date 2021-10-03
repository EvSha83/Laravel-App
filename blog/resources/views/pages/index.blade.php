@extends('layouts.main-layout')

@section('title','My Blog')

@section('content')

@foreach($posts as $post)
    <div class="card mb-4">
        <div class="card-header">
            <a href="#">{{$post->category['title']}}</a>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->description}}</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>
    </div>
@endforeach
@endsection



