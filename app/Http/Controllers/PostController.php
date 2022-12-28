<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();


        // $post = Post::find(1);

        // $tag = Tag::find(1);
        // dd($tag->posts);
        // dd($post->tags());

        return view("post.index", [
            'posts' => $posts,

        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.create', [
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string',
            'category_id' => 'integer',
            'tags' => ''
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        dd($data, $tags);

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
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.edit', [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string',
            'category_id' => 'integer'
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
