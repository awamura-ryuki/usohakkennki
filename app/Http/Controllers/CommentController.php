<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;

class CommentController extends Controller
{
    //
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post, 'comments' => $post ->comments()]);
    }
    
     public function create(Post $post, Category $category)
    {
        return view('comments/create')->with(['post' => $post, 'categories' => $category->get()]);
    }
    
    public function store(Comment $comment, Request $request)
    {
        $input = $request['comment'];
        $comment->fill($input)->save();
        $post = $comment -> post() -> first();
        return redirect('/posts/' . $post->id);
    }
}
