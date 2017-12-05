<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index(){
      return view('posts.index');
    }

    public function show(){
      return view('posts.show');
    }    

    public function create(){
      return view('posts.create');
    }    

    public function store(){
      // Create a new post using the request data
      // Save it to the db
      Post::create(request(['title', 'body']));
      // Redirect to the homepage.
      return redirect('/');
    }
}
