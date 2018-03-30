@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input class="form-control @if($errors->has('email')) is-invalid @endif" id="exampleInputEmail1"
                               type="email" aria-describedby="emailHelp" value="{{ old('email') }}"
                               name="email" placeholder="Enter email" required>
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password"
                               name="password" required>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input @if($errors->has('email')) is-invalid @endif"
                                       name="remember" type="checkbox"> Remember
                                Password</label>
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
                    <a class="d-block small mt-3" href="{{ route('password.request') }}">Forgot password</a>
                </div>
            </div>
        </div>
    </div>
@endsection
