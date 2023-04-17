@extends('layouts.main')
@section('content')
    <div>
        <h3>Posts</h3>
        <p>{{ $post->title }}</p>
        <p>{{ $post->post_content }}</p>
        <p>{{ $post->image }}</p>
    </div>
    <div>
        <a class="btn btn-sm btn-warning" href="{{ route('post.edit', $post->id) }}">Edit</a>
    </div>
    <div>

        <a href="{{ route('post.index') }}">Back</a>
    </div>
@endsection
