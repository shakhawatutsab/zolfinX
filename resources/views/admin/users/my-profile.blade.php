
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

            <h4 class="card-title">Edit user</h4>
            <hr>
            <form class="forms-sample" method="POST" action="{{route('users.update',$user->id)}}">

                @csrf
                @method('put')
                <div class="form-group">
                    <label for="posttitle">Full Name</label>
                    <input type="text" name="title" class="form-control" id="posttitle" placeholder="Post Title" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label>User Photo</label>
                    <br>
                    <input type="file" name="photo" class="">

                    <div class="user-photo">
                        <img src="{{ route('home') }}/storage/images/{{ $user->photo }}" alt="{{ $user->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Emai Address</label>
                   <input type="text" name="email" class="form-control" id="email" placeholder="Type Emai Address" value="{{$user->email}}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                   <input type="text" name="password" class="form-control" id="password" placeholder="Type Password" value="">
                </div>

                <div class="form-group">
                    <label for="re-password">Re-write Password</label>
                   <input type="text" name="re-password" class="form-control" id="re-password" placeholder="Type password again" value="">
                </div>

                <button type="submit" class="btn btn-success mr-2">Update user</button>
                <button type="reset" class="btn btn-light">Cancel</button>
            </form>
          </div>
  </div>
@endsection('content')

