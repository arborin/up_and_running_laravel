<?php

namespace App\Http\Controllers\Post;

use App\Models\Tag;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories         = Category::all();
        $tags               = Tag::all();

        return view('post.create', [
            'categories'    => $categories,
            'tags'          => $tags
        ]);
    }



















    // public function index()
    // {
    //     $posts = Post::where('is_published', 1)->get();


    //     // $post = Post::find(1);

    //     // $tag = Tag::find(1);
    //     // dd($tag->posts);
    //     // dd($post->tags());

    //     return view("post.index", [
    //         'posts' => $posts,

    //     ]);
    // }

    // public function create()
    // {
    //     $categories = Category::all();
    //     $tags = Tag::all();

    //     return view('post.create', [
    //         'categories' => $categories,
    //         'tags' => $tags
    //     ]);
    // }

    // public function store()
    // {
    //     $data = request()->validate([
    //         'title' => 'string',
    //         'post_content' => 'string',
    //         'image' => 'string',
    //         'category_id' => 'integer',
    //         'tags' => ''
    //     ]);

    //     $tags = $data['tags'];
    //     unset($data['tags']);

    //     $post = Post::create($data);

    //     // foreach ($tags as $tag) {
    //     //     PostTag::firstOrCreate([
    //     //         'tag_id' => $tag,
    //     //         'post_id' => $post->id,
    //     //     ]);
    //     // }

    //     $post->tags()->attach($tags);


    //     return redirect()->route('post.index');
    // }

    // public function show(Post $post)
    // {
    //     // $post = Post::findOrFail($id);

    //     return view('post.show', compact('post'));
    // }

    // public function edit(Post $post)
    // {
    //     $categories = Category::all();
    //     $tags = Tag::all();

    //     return view('post.edit', [
    //         'post' => $post,
    //         'categories' => $categories,
    //         'tags' => $tags
    //     ]);
    // }

    // public function update(Post $post)
    // {
    //     $data = request()->validate([
    //         'title' => 'string',
    //         'post_content' => 'string',
    //         'image' => 'string',
    //         'category_id' => 'integer',
    //         'tags' => ''
    //     ]);

    //     $tags = $data['tags'];

    //     unset($data['tags']);

    //     $post->update($data);

    //     $post->tags()->sync($tags);

    //     return redirect()->route('post.show', $post->id);
    // }


    // public function destroy(Post $post)
    // {
    //     $post->delete();
    //     return redirect()->route('post.index');
    // }
}
