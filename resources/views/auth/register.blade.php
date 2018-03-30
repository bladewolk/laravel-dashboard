@extends('layouts.auth')
@section('content')
    <body class="bg-dark">
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="exampleInputName">First name</label>
                                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                       id="exampleInputName"
                                       type="text"
                                       value="{{ old('name') }}"
                                       aria-describedby="nameHelp" placeholder="Enter first name"
                                       name="name">
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input class="form-control {{  $errors->has('email') ? 'is-invalid' : ''}}"
                               id="exampleInputEmail1"
                               type="email"
                               name="email"
                               value="{{ old('email') }}"
                               aria-describedby="emailHelp"
                               placeholder="Enter email">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Password</label>
                                <input class="form-control @if($errors->has('password')) is-invalid @endif"
                                       id="exampleInputPassword1" type="password"
                                       name="password"
                                       placeholder="Password">
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="exampleConfirmPassword">Confirm password</label>
                                <input class="form-control @if($errors->has('password')) is-invalid @endif"
                                       type="password"
                                       placeholder="Confirm password"
                                       name="password_confirmation"
                                >
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
                </div>
            </div>
        </div>
    </div>
@endsection