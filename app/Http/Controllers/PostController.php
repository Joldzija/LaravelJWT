<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt');
    }
    public function index(){
        $posts = Post::all();
        return json_encode($posts);
    }
}
