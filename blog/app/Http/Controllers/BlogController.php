<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    #[Route("/", methods: ["GET"])]
    public function index()
    {
        $posts = Post::paginate(5);
        $categories = Category::all();
        return view('pages.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function getPostByCategory($slug)
    {
        $current_category = Category::where('slug', $slug)->first();
        $posts = $current_category->posts()->paginate(5);
        $categories = Category::all();
        return view('pages.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }
}
