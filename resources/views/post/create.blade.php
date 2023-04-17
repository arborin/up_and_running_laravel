@extends('layouts.main')
@section('content')
    <div>
        <h3>Create Posts</h3>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Post title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter title">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <textarea name="post_content" class="form-control" id="exampleInputEmail1"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="text" name="image" value="{{ old('image') }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                        <option {{ old('category_id') == $category->id ? ' selected ' : '' }} value={{ $category->id }}>
                            {{ $category->title }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label class="form-label select-label">Tags</label>
                <select class="select form-control" multiple name="tags[]">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
