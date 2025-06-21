
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

            <h4 class="card-title">Edit Post</h4>
            <hr>
            <form class="forms-sample" method="POST" action="{{route('posts.update',$post->id)}}">

                @csrf
                @method('put')
                <div class="form-group">
                    <label for="posttitle">Post Title</label>
                    <input type="text" name="title" class="form-control" id="posttitle" placeholder="Post Title" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label>Post Thumbnail</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                    <input type="text" name="thumbnail" class="form-control file-upload-info" placeholder="Post Thumbnail" value="{{$post->thumbnail}}">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                    </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="postexcerpt">Post Excerpt</label>
                    <textarea name="excerpt" class="form-control" id="postexcerpt" rows="2">
                        {{$post->excerpt}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="postcontent">Post Content</label>
                    <textarea name="content" class="form-control" id="postcontent" rows="2">
                        {{$post->content}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="postcategory">Post Category</label>
                    <select class="form-control" name="category_id" id="">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success mr-2">Edit Post</button>
                <button type="reset" class="btn btn-light">Cancel</button>
            </form>
          </div>
  </div>
@endsection('content')

