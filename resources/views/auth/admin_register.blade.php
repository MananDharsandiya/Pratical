@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-danger text-white text-center">
                <h3>Admin Registration</h3>
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form action="{{ url('/register/admin') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">First Name:</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Last Name:</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirm Password:</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-danger w-100">Register</button>
                </form>

                <div class="mt-3 text-center">
                    <a href="{{ url('/admin/login') }}">Already have an account? Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
