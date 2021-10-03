@extends('layouts.main-layout')

@section('title', $post->title)
<div class="h-75">
@section('content')
    <article>
        {!! $post->content !!}
    </article>
</div>
@endsection
