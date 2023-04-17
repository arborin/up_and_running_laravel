<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $news = [
        'news1',
        'news2',
        'news3'
    ];

    public function index()
    {
        echo "<a href='" . route('news.create') . "'>ADD NEW</a><br>";
        foreach ($this->news as $news) {
            echo "news=> {$news}<br>";
        }
    }

    public function create()
    {
        return "<h2>ADD NEWS</h2><a href='" . route('news.index') . "'>RETURN NEWS</a>";
    }

    public function edit($id)
    {
        return "<h1>$id</h1>";
    }
}
