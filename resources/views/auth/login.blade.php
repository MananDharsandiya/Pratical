@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-success text-white text-center">
                <h3>Customer Login</h3>
            </div>
            <div class="card-body">
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Login</button>
                </form>

                <div class="mt-3 text-center">
                    <a href="{{ url('/register/customer') }}">Don't have an account? Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
