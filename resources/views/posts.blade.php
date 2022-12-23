@extends('layouts.main')
@section('content')
    <div>
        <h3>Posts</h3>
        <ul>
            @foreach ($posts as $post)
                <li>{{ $post->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection
