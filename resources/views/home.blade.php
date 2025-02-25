{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}




@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar text-white vh-100 p-3">
            <h4 class="text-center">Dashboard</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link text-white">Users</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('payments.index') }}" class="nav-link text-white">Payments</a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link text-white"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h2>Welcome, {{ auth()->user()->name }}!</h2>
            <p> You are logged in.</p>

            <div class="row">
                <!-- Users Card -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">User Management</h5>
                            <p class="card-text">Manage all users.</p>
                            <a href="{{ route('users.index') }}" class="btn btn-primary">Go to Users</a>
                        </div>
                    </div>
                </div>

                <!-- Payments Card -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Payment Management</h5>
                            <p class="card-text">Manage all payments.</p>
                            <a href="{{ route('payments.index') }}" class="btn btn-primary">Go to Payments</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
