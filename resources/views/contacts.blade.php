<?php 
	$url = url()->current();
?>

@extends('layouts.app', ['body_class' => 'contacts-template'])

@section('title', 'Autopride')

@section('content')

<main>
    <section class="content">
        <div class="container">
            <nav class="breadcrumbs" aria-label="Breadcrumbs">
                <ol class="breadcrumbs__list">
                    <li>
                        <a href="/">Home</a>
                        <span class="breadcrumbs__separator" aria-hidden="true">
                            <svg class="breadcrumbs-icon" viewBox="0 0 16 16"><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline></g></svg>
                        </span>
                    </li>
                    <li aria-current="page">{{ str_limit('Контакты', $limit = 20, $end = '...') }}</li>
                </ol>
            </nav>
            <div class="article">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Контакты</h2>
                        <div class="service-content">
                            <div class="contact-info-block">
                                <i class="fas fa-phone"></i>
                                <div class="info">
                                    <a href="tel:+380667808080">+38 066 780 80 80</a>
                                    <a href="tel:+380667808080">+38 066 780 80 80</a>
                                    <a href="tel:+380667808080">+38 066 780 80 80</a>
                                    <a href="tel:+380667808080">+38 066 780 80 80</a>
                                </div>
                            </div>
                            <div class="contact-info-block">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <a class="email" href="mailto:info@autopride.com">info@autopride.com</a>
                                    <a class="email" href="mailto:info@autopride.com">info@autopride.com</a>
                                </div>
                            </div>
                            <div class="contact-info-block">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    Украина, г. Киев<br>
                                    ул. центральная 38 оф. 22
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="thumbnail" src="{{ asset('public/site_img/map.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="main-form-block transfer-form">
                <h2 class="reviews-block-title">Обратная связь</h2>
                @if (\Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p class="alert-content"><strong>{!! \Session::get('success') !!}</strong></p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form class="main-form contacts" action="{{ action('Controller@contactForm') }}" method="post">
                    @csrf
                    <input type="hidden" name="page_url" value="{{ $url }}">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" name="customer_first_name" class="form-input" placeholder="Ваше имя" required >
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" name="customer_last_name" class="form-input" placeholder="Ваша фамилия" required >
                                </div>
                            </div>
                            <input type="email" name="customer_email" class="form-input" placeholder="E-mail" required >
                            <input type="text" name="customer_phone" class="form-input" placeholder="Контактный телефон" required >
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <textarea name="customer_message" class="form-text" placeholder="Ваш комментарий" required ></textarea>
                            <input type="submit" class="form-btn" value="ОТПРАВИТЬ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

@endsection