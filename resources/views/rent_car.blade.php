<?php 
    $date_created = $car['created_at']->toDateTimeString();
    $date_created = date("jS F, Y", strtotime($date_created));
    $url = url()->current();
    $images = json_decode($car->images);
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
                    <li>
                        <a href="/autopark">Autopark</a>
                        <span class="breadcrumbs__separator" aria-hidden="true">
                            <svg class="breadcrumbs-icon" viewBox="0 0 16 16"><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline></g></svg>
                        </span>
                    </li>
                    <li aria-current="page">{{ str_limit($car->title, $limit = 20, $end = '...') }}</li>
                </ol>
            </nav>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4">
                        @if ($images)
                        <div class="section-gallery">
                            <ul id="car_images_gallery" class="images-gallery-slider">
                                @foreach($images as $img)
                                <li data-thumb="{{ Voyager::image( $img ) }}" data-src="{{ Voyager::image( $img ) }}">
                                    <img src="{{ Voyager::image( $img ) }}" style="height: 310px; object-fit: cover;"/>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- <div class="images-gallery-nav">
                            <button class="images-gallery-nav-btn images-gallery-nav-btn-prev" type="button" id="goToPrevSlide"><</button>
                            <button class="images-gallery-nav-btn images-gallery-nav-btn-next" type="button" id="goToNextSlide">></button>
                        </div> -->
                        @else
                        <img src="{{ asset('public/site_img/no_image.png') }}">
                        @endif
                        <div class="alert alert-success item-delivery-alert margin-top-big" role="alert">
                            Доставка и возврат автомобиля в пределах Праги - БЕСПЛАТНО!
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h1 class="section-title">{{ $car->title }}</h1>
                        <div class="row car_detail_highlights">
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <span class="carDetail__highlights__caption">Год выпуска</span>
                                <span class="carDetail__highlights__item">{{ $car->year_of_manufacture }}</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <span class="carDetail__highlights__caption">Кол-во чел</span>
                                <span class="carDetail__highlights__item">{{ $car->number_of_people }}</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <span class="carDetail__highlights__caption">Расход</span>
                                <span class="carDetail__highlights__item">{{ $car->fuel_consumption }}</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <span class="carDetail__highlights__caption">Мощность</span>
                                <span class="carDetail__highlights__item">{{ $car->engine_power }}</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <span class="carDetail__highlights__caption">Топливо</span>
                                <span class="carDetail__highlights__item">{{ $car->fuel_type }}</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <span class="carDetail__highlights__caption">Класс</span>
                                <span class="carDetail__highlights__item">{{ $car->class }}</span>
                            </div>
                        </div>
                        <div class="row margin-top-big">
                            <div class="col-md-6">
                                <h4 class="carDetail__caption complect-title">Комплектация</h4>
                                <p class="complect-description">{{ $car->equipment }}</p>
                            </div>
                            <!-- <div class="col-md-6">
                                <h4 class="carDetail__caption">Рейтинг автомобиля:</h4>
                            </div> -->
                        </div>
                        <div class="rent-car-link margin-top-big">
                            <a href="rent/{{ $car->id }}" class="rent-car-button">Забронировать автомобиль</a>
                        </div>
                        @if ($short_term_rental_price)
                        <div class="rent-car-info margin-top-bigger">
                            <div>
                                <h3 class="rent-price-tittle">Краткосрочная аренда</h3>
                                <!-- <h4 class="rent-price-subtitle">Ценник с лимитом</h4> -->
                                <!-- <span style="font-size: 12px">(200km/день, 3000 km/месяц) <span style="font-size: 11px">Над лимит - дополнительная оплата 4,- Кроны/км</span></span> -->
                                <div id="pricelistConteiner1" class="">
                                    <table class="table rent-price-table" cellspacing="1">
                                        <thead id="pricelist1Head">
                                            <tr>
                                                @foreach ($short_term_rental_price as $item)
                                                    <th class="">{{$item['rent_term']}}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                @foreach ($short_term_rental_price as $item)
                                                    <td class="">{{$item['rent_price']}}</td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="text-small text-muted">* Цены не включают 21% НДС.</p>
                                <p class="text-small text-muted">** Тариф выходной: Начало: Пятница 12:00, возвращение: Понедельник: 12:00.</p>
                            </div>
                        </div>
                        @endif
                        @if ($long_term_rental_price)
                        <div class="rent-car-info margin-top-big">
                            <div>
                                <h3 class="rent-price-tittle">Долгосрочная аренда</h3>
                                <!-- <h4 class="rent-price-subtitle">Ценник с лимитом</h4> -->
                                <!-- <span style="font-size: 12px">(200km/день, 3000 km/месяц) <span style="font-size: 11px">Над лимит - дополнительная оплата 4,- Кроны/км</span></span> -->
                                <div id="pricelistConteiner1" class="">
                                    <table class="table rent-price-table" cellspacing="1">
                                        <thead id="pricelist1Head">
                                            <tr>
                                                @foreach ($long_term_rental_price as $item)
                                                    <th class="">{{$item['rent_term']}}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                @foreach ($long_term_rental_price as $item)
                                                    <td class="">{{$item['rent_price']}}</td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="text-small text-muted">* Цены не включают 21% НДС.</p>
                                <p class="text-small text-muted">** Тариф выходной: Начало: Пятница 12:00, возвращение: Понедельник: 12:00.</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
		</div>
	</section>
</main>

@endsection