@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Welcome to Admin Dashboard, {{ auth()->user()->first_name }}!</h2>
</div>
@endsection
