<form action="{{route('createComment',$post->id)}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">User Name</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="John">
        @if($errors->has('username'))
            <span class="text-danger">{{$errors->first('username')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="comment" class="form-label">Text comment</label>
        <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Text comment"></textarea>
        @if($errors->has('comment'))
            <span class="text-danger">{{$errors->first('comment')}}</span>
        @endif
    </div>
    <div class="d-grid gap-1">
        <button class="btn btn-primary" type="submit">Leave a comment</button>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success mt-4 text-center">
            {{Session::get('success')}}
            @php
                Session::forget('success');
            @endphp
        </div>
    @endif
</form>
