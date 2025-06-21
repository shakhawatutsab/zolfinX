@extends('components.layout')

@section('content')

{{-- Banner Starts --}}
<div class="zol-banner zol-banner--blog t-pt-150 t-pb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="mt-0 t-text-light">
                    {{$title}}
                </h2>
                <ul class="t-list breadcrumbs d-flex justify-content-center align-items-center">
                    <li class="breadcrumbs__list">
                        <a href="{{route('home')}}" class="t-link breadcrumbs__link t-link--light-alpha text-capitalize">
                            home
                        </a>
                    </li>
                    <li class="breadcrumbs__list">
                        <a href="{{route('register')}}" class="t-link breadcrumbs__link t-link--light-alpha text-capitalize">
                            {{$title}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- Banner Ends --}}

<div class="t-pt-120 t-pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="row">
                    <div class="col">
                        <form class="text-center" method="post" action="{{route('registration')}}" enctype="multipart/form-data">

                            @csrf

                            @if ($errors->any())

                                {{-- @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach --}}

                            @endif

                            @if(@session()->has('message') )
                            <div class="alert alert-success">{{session('message')}}</div>
                            @endif

                            <h4>Creat an account</h4>
                            <hr>
                            <div class="mb-3">
                                <input value="{{old('name')}}" type="text" name="name" class="form-controll" placeholder="full name">
                            </div>

                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <input value="{{old('username')}}" type="text" name="username" class="form-controll" placeholder="User name">
                            </div>

                            @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <input value="{{old('photo')}}" type="file" name="photo" class="form-controll" placeholder="photo url">
                            </div>

                            @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <input value="{{old('email')}}" type="email" name="email" class="form-controll" placeholder="Email address">
                            </div>

                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <input type="password" name="password" class="form-controll" placeholder="password">
                            </div>

                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="create account">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
