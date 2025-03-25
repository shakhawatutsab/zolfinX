
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
                    <h2 class="card-title">Add new category</h2>
                </div>
            </div>
            <div class="category-form">

                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <input class="form-control mb-2" name="category_name" type="text" placeholder="category name">
                    <button type = "submit" class="btn btn-primary" >
                        create category
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
                              <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Remove Category: {{ $category->title }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    Are you sure you remove the category permanently
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                                </div>
                            </div>

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
