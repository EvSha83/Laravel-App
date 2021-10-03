@extends('layouts.main-layout')

@section('title','My Blog')

@section('content')

    @foreach($posts as $post)
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{route("getPostByCategory",$post->category['slug'])}}">{{$post->category['title']}}</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <a href="{{route('getPost',$post->slug)}}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    @endforeach
    {{$posts->links('vendor.pagination.bootstrap-4')}}
@endsection
