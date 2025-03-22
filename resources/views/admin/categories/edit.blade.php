
@extends('admin.master-admin')

@section('content')

@include('admin.left-sidemenu')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                @if(session()->get('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="row">
                <div class="col">
                    <h2 class="card-title">{{ $title }}</h2>
                </div>
            </div>
            <div class="category-form">

                <form action="{{ route('categories.update', $current_category->id) }}" method="POST">
                    @csrf

                    @method('put')
                    <label for="category_name">Category Name</label>
                    <input class="form-control mb-2" id="category_name" value="{{ $current_category->title }}" name="category_name" type="text" placeholder="category name">

                    <label for="category_slug">Category Slug</label>
                    <input class="form-control mb-2" id="category_slug" value="{{ $current_category->slug }}" name="category_slug" type="text" placeholder="category name">
                    <button type = "submit" class="btn btn-primary" >
                        Update category
                    </button>
                </form>
            </div>

            </div>
          </div>
        </div>

        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

              <div class="row">
                  <div class="col">
                      <h2 class="card-title">All Categories</h2>
                  </div>
                  <div class="col">
                      <form class="ml-auto search-form d-none d-md-block" method="GET" action="{{route('categories.index')}}">
                          <div class="form-group">
                            <input class="input-group input-group-lg" value="{{ $keyword }}" name="search" type="search" class="form-control" placeholder="Search From Categories">
                          </div>
                      </form>
                  </div>
              </div>

                <table class="table table-striped mb-5">
                  <thead>
                    <tr>
                      <th> Post ID </th>
                      <th> Category Name </th>
                      <th> Updated at </th>
                      <th> <> </th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach ($categories->all() as $category)
                    <tr>
                      <td> {{$category->id}} </td>
                      <td> {{$category->title}} </td>
                      <td> {{ $category->name }} </td>
                      <td> {{ $category->slug }} </td>
                      <td> {{date('F d,Y',strtotime($category->updated_at))}} </td>
                      <td>
                          <a class="btn btn-info" href="{{route('categories.edit',$category->id)}}">Edit</a>
                          <form method="POST"action="{{route('categories.destroy',$category->id)}} ">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                          </form>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
                {{$categories->links('vendor.pagination.bootstrap-custom')}}
              </div>
            </div>
          </div>
      </div>
  </div>
@endsection('content')
