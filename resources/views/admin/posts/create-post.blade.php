
@extends('admin.master-admin')

@section('content')

@include('admin.left-sidemenu')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="card-body">
            @if (session()->has('message '))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <h4 class="card-title">Create new Post</h4>
            <hr>
            <form class="forms-sample" method="POST" action="{{ route('posts.store')}}"enctype="multipart/form-data>

                @csrf
                <div class="form-group">
                    <label for="posttitle">Post Title</label>
                    <input type="text" name="title" class="form-control" id="posttitle" placeholder="Post Title" value="{{old('title')}}">
                    @error('title')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Post Thumbnail</label>
                </br>
                    <input type="file" name="thumnail">
                    @error('thumbnail')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="postexcerpt">Post Excerpt</label>
                    <textarea name="excerpt" class="form-control" id="postexcerpt" rows="2">
                        {{old('excerpt')}}
                    </textarea>
                    @error('excerpt')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="postcontent">Post Content</label>
                    <textarea name="content" class="form-control" id="postcontent" rows="2">
                        {{old('content')}}
                    </textarea>
                    @error('content')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="postcategory">Post Category</label>
                    <select class="form-control" name="category_id" id="">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success mr-2">Publish Post</button>
                <button type="reset" class="btn btn-light">Cancel</button>
            </form>
          </div>
  </div>
@endsection('content')

