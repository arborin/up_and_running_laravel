<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        return "Hello laravel!";
    }

    public function store(){
        $getData = request()->only(['title', 'description']);
        /*
            request()->only() takes an associative array of
            input names and returns them:
            [
                'title' => 'Whatever title the user typed on the previous page',
                'description' => 'Whatever description the user typed on the previous page',
            ]

            And Task::create() takes an associative array and creates a new task from it:

            Task::create([
                'title' => 'Buy milk',
                'description' => 'Remember to check the expiration date this time, Norbert!',
            ]);
        */

        return redirect('/');
    }
}
