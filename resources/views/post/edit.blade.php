@extends('layouts.main')
@section('content')
    <div>
        <h3>Create Posts</h3>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="exampleInputEmail1">Post title</label>
                <input type="text" value="{{ $post->title }}" name="title" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <textarea name="post_content" class="form-control" id="exampleInputEmail1">{{ $post->post_content }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="text" value="{{ $post->image }}" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <select class="form-control" name="category_id">
                    <option>-</option>
                    @foreach ($categories as $category)
                        <option value={{ $category->id }} {{ $post->category_id === $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <select class="select form-control" multiple name="tags[]">

                    @foreach ($tags as $tag)
                        <option
                            @foreach ($post->tags as $postTag)
                            {{ $tag->id === $postTag->id ? ' selected ' : '' }} @endforeach
                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
                <label class="form-label select-label">Example label</label>
            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
