<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

       $posts = Post::latest()->paginate(5); // paginate 10 posts per page

        return view('welcome',compact('posts'));
    }
}
