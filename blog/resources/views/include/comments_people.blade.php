
@foreach($post->comments as $comment)
    <div class="card mt-4">
        <div class="card-header">
            {{$comment->username}}
        </div>
        <div class="card-body">
            <p class="card-text">{{$comment->comment}}</p>
        </div>
        <div class="card-footer text-muted">
            {{$comment->created_at}}
        </div>
    </div>
@endforeach()

