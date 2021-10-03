<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="btn" aria-current="page"
                           href="{{route("getPostByCategory",$category->slug)}}">{{$category->title}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
