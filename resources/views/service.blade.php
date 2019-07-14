<?php 
    $date_created = $service['created_at']->toDateTimeString();
    $date_created = date("jS F, Y", strtotime($date_created));
	$url = url()->current();
	$images = json_decode($service->gallery);
?>

@extends('layouts.app', ['body_class' => 'single'])

@section('title', 'Autopride')

@section('content')

<main>
    <section class="content">
        <div class="container">
            
            <div class="article">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">{{ $service->title }}</h2>
                        <div class="service-content">
							{!! $service->content !!}
						</div>
                        <a href="order-service/{{ $service->id }}" class="button red">ЗАКАЗАТЬ УСЛУГУ</a>
                    </div>
                    <div class="col-md-6">
						<ul class="service-slider">
                            @if ($images)
                                @foreach($images as $img)
                                    <li data-thumb="{{ Voyager::image( $img ) }}" data-src="{{ Voyager::image( $img ) }}">
                                        <img src="{{ Voyager::image( $img ) }}" />
                                    </li>
							    @endforeach
                            @endif
						</ul>
                    </div>
                </div>
            </div>

            <div class="reviews-block">
                <h2 class="reviews-block-title">Отзывы</h2>
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

            <div class="main-form-block transfer-form">
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
                    <input type="hidden" name="page_url" value="{{ $service->url }}">
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