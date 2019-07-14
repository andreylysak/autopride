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
                    <li aria-current="page">Autopark</li>
                </ol>
            </nav>
            <div class="section-content">
                <h2>Авто парк</h2>
                <h3 class="section-subtitle">Предлагаем Вам только новые автомобили в идеальном состоянии!</h3>
                <div class="row margin-10">
                    @foreach ($cars as $car)
                    <div class="col-sm-6 col-lg-4 padding-10">
                        <div class="car_list_item">
                            <div class="car-list-item-content">
                                @if ($car->car_image)
                                    <a class="car_list_img" href="autopark/{{ $car->url }}">
                                        <img src="{{ Voyager::image( $car->car_image ) }}" alt="{{ $car->title }}">
                                    </a>
                                @else
                                    <a class="car_list_img" href="autopark/{{ $car->url }}">
                                        <img src="{{ asset('public/site_img/no_image.png') }}">
                                    </a>
                                @endif
                                @if ($car->month_rent_price)
                                    <div class="car-list-item-price"><p> <span class="f-w-n">1-4 дня</span> {{$car->month_rent_price}} $</p></div>
                                @endif
                                <h4 class="car_list_title"><a href="autopark/{{ $car->url }}">{{ $car->title }}</a></h4>
                            </div>
                            <div class="car-list-item-footer group">
                                <a href="autopark/{{ $car->url }}" class="btn btn-primary">Просмотреть</a>
                                <a href="autopark/rent/{{ $car->id }}" class="btn btn-success">Забронировать</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
		</div>
	</section>
</main>

@endsection