<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    #[Route("/", methods: ["GET"])]
    public function index()
    {
        $posts = Post::paginate(5);
        $categories = Category::sortTitle()->get();
        return view('pages.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function getPostByCategory($slug)
    {
        $current_category = Category::where('slug', $slug)->first();
        $posts = $current_category->posts()->paginate(5);
        $categories = Category::sortTitle()->get();
        return view('pages.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function getPost($slug)
    {
        $post = Post::where("slug", $slug)->first();
        $categories = Category::sortTitle()->get();
        return view('pages.getPost', [
            'post' => $post,
            'categories' => $categories
        ]);
    }

    public function createComment($post_id, Request $request)
    {
        $validData = $request->validate([
            'username' => 'required|max:70|min:2',
            'comment' => 'required|min:2'
        ]);
        $validData['post_id'] = $post_id;
        Comment::create($validData);
        return back()->with('success', 'Comment created');
    }
}
