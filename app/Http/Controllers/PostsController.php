<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct(){
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Posts $posts){
      $posts = $posts->all();

      $archives = Post::archives();

      return view('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $posts){
      return view('posts.show', compact('post'));
    }

    public function create(){
      return view('posts.create');
    }

    public function store(){
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      auth()->user()->publish(
        new Post(request(['title', 'body']))
      );

      // Redirect to the homepage.
      return redirect('/');
    }
}
