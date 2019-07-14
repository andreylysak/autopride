<?php 
	$url = url()->current();
?>

@extends('layouts.app', ['body_class' => 'single'])

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
                    <li aria-current="page">{{ str_limit('Отзывы', $limit = 20, $end = '...') }}</li>
                </ol>
            </nav>
            <div class="article">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Отзывы</h2>
                        <div class="service-content">
							<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.</p>
                            <p>Вы хотите взять машину в аренду? Цены на почасовую аренду автомобиля.</p>
                        </div>
                        <a href="#" class="button red">ОСТАВИТЬ ОТЗЫВ</a>
                    </div>
                    <div class="col-md-6">
                        <img class="thumbnail" src="{{ asset('public/site_img/reviews.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="review-wrap">
                @if ($testimonials)
                    @foreach($testimonials as $testimonial)
                        <div class="review-wrap" id="testimonial_id_{{$testimonial['id']}}">
                            <div class="name"><span>{{ $testimonial['first_name'] }}</span> <span>{{ $testimonial['last_name'] }}</span></div>
                            <div class="date">{{ $testimonial['created_at'] }}</div>
                            <div class="review">
                                <p>{{ $testimonial['content'] }}</p>
                            </div>
                            <hr>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="main-form-block reviews">
                <p class="main-form-block-title">Оставить отзыв</p>
                @if (\Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p class="alert-content"><strong>{!! \Session::get('success') !!}</strong></p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form class="main-form" action="{{ action('Controller@createReview') }}" method="post">
                    @csrf
                    <input type="hidden" name="page_url" value="reviews">
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
                            <div class="rating-block">
                                <p class="rating-title">Оценить трансфер</p>
                                <div class="form-group-reviews">
                                    <select name="customer_rating" class="testimonial-rating">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <textarea name="customer_review" class="form-text" placeholder="Ваш комментарий" required ></textarea>
                            <input type="submit" class="form-btn" value="ОСТАВИТЬ ОТЗЫВ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

@endsection