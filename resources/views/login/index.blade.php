@extends('layout.main')

@section('container')
<div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-md-6">
        <div class="card shadow p-4">
            <div class="row">
                <div class="col-md-5 d-flex align-items-center justify-content-center mb-4">
                  <img src="https://clipground.com/images/buku-png-16.png" class="img-fluid" alt="Book image">
                </div>
                <div class="col-md-7">
                    <h1 class="text-center mb-4">Sign In</h1>
                    <form action="/login" method="POST">
                        @csrf
                        @if (session()->has('register'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('register') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                        <div class="text-center mt-3">
                            <small>Not Registered? <a href="/register">Register Now!</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@php
    $hideHeader = true;
@endphp
