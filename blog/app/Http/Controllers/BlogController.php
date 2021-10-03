<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    #[Route("/", methods: ["GET"])]
    public function index()
    {
        return view('pages.index');
    }
}
