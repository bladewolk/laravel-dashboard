@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Reset password</div>
            <div class="card-body">
                <form action="{{ route('password.request') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                               id="exampleInputEmail1"
                               value="{{ old('email') }}"
                               type="email" aria-describedby="emailHelp"
                               name="email" placeholder="Enter email" required>
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                               id="exampleInputPassword1" type="password" placeholder="Password"
                               name="password" required>
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Confitm password</label>
                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password"
                               name="password_confirmation" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Reset password</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
@endsection