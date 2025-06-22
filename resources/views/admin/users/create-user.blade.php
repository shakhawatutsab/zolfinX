
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

            <h4 class="card-title">Create user</h4>
            <hr>
            <form class="forms-sample" method="POST" action="{{route('users.store')}}">

                @csrf

                <div class="form-group">
                    <label for="posttitle">Full Name</label>
                    <input type="text" name="name" class="form-control" id="posttitle" placeholder="Post Title" value="">
                </div>
                <div class="form-group">
                    <label>User Photo</label>
                    <br>
                    <input type="file" name="photo" class="">
                </div>
                <div class="form-group">
                    <label for="email">Emai Address</label>
                   <input type="email" name="email" class="form-control" id="email" placeholder="Type Emai Address" value="">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                   <input type="text" name="password" class="form-control" id="password" placeholder="Type Password" value="">
                </div>

                <div class="form-group">
                    <label for="re-password">Re-write Password</label>
                   <input type="text" name="password_confirmation" class="form-control" id="re-password" placeholder="Type password again" value="">
                </div>

                <button type="submit" class="btn btn-success mr-2">Create user</button>
                <button type="reset" class="btn btn-light">Cancel</button>
            </form>
          </div>
  </div>
@endsection('content')

