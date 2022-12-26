@extends('layouts.main')
@section('content')
    <div>
        <h3>Posts</h3>
        <table class="table">
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Content</td>

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

                </tr>
            @endforeach
            </ul>
    </div>
@endsection
