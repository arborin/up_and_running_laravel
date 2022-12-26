@extends('layouts.main')
@section('content')
    <div>
        <h3>Posts</h3>
        <a href={{ route('post.create') }} class="btn btn-warning btn-sm">New Post</a>
        <table class="table">
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Content</td>
                <td>action</td>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post->id }}
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->post_content }}
                    </td>
                    <td>
                        <a class="btn btn-sm btn-success" href={{ route('post.show', ['post' => $post->id]) }}>show</a>
                        <a class="btn btn-sm btn-warning" href={{ route('post.edit', ['post' => $post->id]) }}>edit</a>
                        <form action="{{ route('post.delete', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                    </td>

                </tr>
            @endforeach
    </div>
@endsection
