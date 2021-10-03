<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    #[Route("/", methods: ["GET"])]
    public function index()
    {
        $posts=Post::all();
        return view('pages.index',[
            'posts'=>$posts,
        ]);
    }
}
