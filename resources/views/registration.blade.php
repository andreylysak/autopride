<?php 
    $url = url()->current();
?>

@extends('layouts.login_app', ['body_class' => 'login-content'])

@section('title', 'Autopride')

@section('content')

<main>
    <section class="content">
        <div class="container">
            <h1 class="login-title">Registration</h1>
            @if(session()->has('message'))
                <div class="alert alert-success">
                {{ session()->get('message') }}
                </div>
            @endif
            <div class="login-form">
                <form action="{{ route('postSignup') }}" method="post" class="form" id="registrationForm">
                    @csrf
                    <input type="hidden" name="page_url" value="{{$url}}">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm password</label>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password" id="confirm_password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="no-register">
                <p>Have registered?</p>
                <p><a href="/login" class="btn btn-default registration-btn">Login</a></p>
            </div>
		</div>
	</section>
</main>

@endsection