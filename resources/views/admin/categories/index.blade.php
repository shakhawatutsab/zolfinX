
@extends('admin.master-admin')

@section('content')

@include('admin.left-sidemenu')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                @if(session()->get('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
            <div class="row">
                <div class="col">
                    <h2 class="card-title">All Posts</h2>
                </div>
                <div class="col">
                    <form class="ml-auto search-form d-none d-md-block" method="GET" action="{{route('posts.index')}}">
                        <div class="form-group">
                          <input class="input-group input-group-lg" value="{{ $keyword }}" name="search" type="search" class="form-control" placeholder="Search From Posts">
                        </div>
                    </form>
                </div>
            </div>

              <table class="table table-striped mb-5">
                <thead>
                  <tr>
                    <th> Post ID </th>
                    <th> Thumbnail </th>
                    <th> Post Title </th>
                    <th> Post Categories </th>
                    <th> Post Author </th>
                    <th> Total View </th>
                    <th> Updated on </th>
                    <th> <> </th>
                  </tr>
                </thead>
                <tbody>

                @foreach ($posts->all() as $post)
                  <tr>
                    <td> {{$post->id}} </td>
                    <td class="py-1">
                      <img class="thumb-image" src="{{$post->thumbnail}}" alt="image" />
                    </td>
                    <td> {{$post->title}} </td>
                    <td> {{$post->title}} </td>
                    <td> {{$post->slug}} </td>
                    <td> {{$post->views}} </td>
                    <td> {{date('F d,Y',strtotime($post->updated_at))}} </td>
                    <td>
                        <a class="btn btn-info" href="{{route('posts.edit',$post->id)}}">Edit</a>
                        <form method="POST"action="{{route('posts.destroy',$post->id)}} ">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
              {{$posts->links('vendor.pagination.bootstrap-custom')}}
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection('content')
