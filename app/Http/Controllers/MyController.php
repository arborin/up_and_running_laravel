<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();
        // foreach ($posts as $post) {
        //     var_dump($post->title);
        // }
        return view("posts", ['posts' => $posts]);
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => "from action",
                'content' => "from action",
                'image' => "from action",
                'likes' => "2",
            ],
            [
                'title' => "Other action",
                'content' => "action",
                'image' => "from action",
                'likes' => "1",
            ]
        ];

        foreach ($postsArr as $post) {
            Post::create($post);
        }

        return "OK!";

        // return Post::create([
        //     'title' => "from action",
        //     'content' => "from action",
        //     'image' => "from action",
        //     'likes' => "1",
        // ]);
    }


    public function update()
    {
        $post = Post::find(1);

        $post->update([
            'title' => "AAAAAAAAAAAA"
        ]);

        $post->save();

        return "UPDATED";
    }
}
