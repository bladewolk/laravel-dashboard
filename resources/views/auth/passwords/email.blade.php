@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Reset password</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input class="form-control @if($errors->has('email')) is-invalid @endif" id="exampleInputEmail1"
                               type="email" aria-describedby="emailHelp"
                               name="email" placeholder="Enter email" required>
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Reset password</button>
                </form>
            </div>
        </div>
    </div>
@endsection
