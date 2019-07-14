<?php 
    $url = url()->current();
?>

@extends('layouts.login_app', ['body_class' => 'login-content'])

@section('title', 'Autopride')

@section('content')

<main>
    <section class="content">
        <div class="container">
            <h1 class="login-title">Login</h1>
            <div class="login-form">
                <form action="" method="post" class="form" id="loginForm">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email" required >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="password" required >
                    </div>
                    <div class="form-group form-group-check">
                        <div class="checkReplace checkReplace--checkbox">
                            <input type="checkbox" class="checkReplace__input" name="remember_me" id="remember_me" value="1">
                            <label class="checkReplace__label" for="remember_me"><span class="checkReplace__label__indicator"></span>
                                <p class="no-margin">Remember me</p>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="no-register">
                <p>Not registered?</p>
                <p><a href="/registration" class="btn btn-default registration-btn">Registration</a></p>
            </div>
		</div>
	</section>
</main>

@endsection