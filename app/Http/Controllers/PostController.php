<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();

        $cateogry = Category::find(1);
        $post = Post::find(1);
        dd($post->category());

        return view("post.index", ['posts' => $posts]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string'
        ]);


        Post::create($data);

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);

        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string'
        ]);

        $post->update($data);

        return redirect()->route('post.show', $post->id);
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
