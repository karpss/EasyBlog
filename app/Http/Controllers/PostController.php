<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Posts::where('active',1)->orderBy('created_at','desc')->paginate(5);
        $title = 'New Posts';
        return view ('home')->withPosts($posts)->withTitle($title);
    }

}
