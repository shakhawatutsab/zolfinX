
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
                    <h2 class="card-title">All Users</h2>
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
                    <th> User id </th>
                    <th> Thumbnail </th>
                    <th> Name </th>
                    <th> User Name </th>
                    <th> Email </th>
                    <th> <> </th>
                  </tr>
                </thead>
                <tbody>

                @foreach ($users->all() as $user)
                  <tr>
                    <td> {{$user->id}} </td>
                    <td class="py-1">
                      <img class="thumb-image" src="{{$user->photo}}" alt="image" />
                    </td>
                    <td> {{$user->name}} </td>
                    <td> {{$user->username}} </td>
                    <td> {{$user->email}} </td>
                    <td>
                        <a class="btn btn-info" href="{{route('posts.edit',$user->id)}}">Edit</a>
                        <form method="POST"action="{{route('posts.destroy',$user->id)}} ">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
              {{$users->links('vendor.pagination.bootstrap-custom')}}
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection('content')
