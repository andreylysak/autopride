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
                    <li aria-current="page">{{ str_limit('Как стать партнером', $limit = 20, $end = '...') }}</li>
                </ol>
            </nav>
            <div class="article">
                <div class="row">
                    <div class="col-md-6" >
                        <h2 class="title-section">Как стать партнером</h2>
                        <p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее,
                            чем вызвать такси или обращаться в транспортные компании.
                        </p>
                        <p>Вы хотите взять машину в аренду? Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях.
                            Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="partner-thumbnail-block">
                            <img class="thumbnail partner-thumbnail" src="{{ asset('public/site_img/partner.png') }}" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="main-form-block">
                <p class="main-form-block-title">Регистрация перевозчика</p>
                @if (\Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p class="alert-content"><strong>{!! \Session::get('success') !!}</strong></p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form class="main-form" action="{{ action('Controller@carrierRegistration') }}" method="post">
                    @csrf
                    <input type="hidden" name="page_url" value="{{ $url }}">
                    <div class="trasporter-type-block">
                        <p>Тип перевозчика:</p>
                        <label class="type-block-label radio"><input type="radio" class="form-checkbox type-block-radio" name="trasporter_type" value="legal" required checked><div class="radio__text">Юридическое лицо</div></label>
                        <label class="type-block-label radio"><input type="radio" class="form-checkbox type-block-radio" name="trasporter_type" value="individual" required ><div class="radio__text">Физическое лицо</div></label>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" name="first_name" class="form-input" placeholder="Ваше имя" required >
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" name="last_name" class="form-input" placeholder="Ваша фамилия" required >
                                </div>
                            </div>
                            <input type="email" class="form-input" placeholder="E-mail" name="email" required >
                            <input type="tel" class="form-input" placeholder="Контактный телефон" name="phone" required >
                            <input type="text" class="form-input" placeholder="Город расположения" name="city" required >
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <textarea class="form-text" placeholder="Ваш комментарий" name="message" required ></textarea>
                            <label><input type="checkbox"  class="form-checkbox" name="privacy_policy_checkbox" value="true" required >Я принимаю политику конфиденциальности</label>
                            <input type="submit" class="form-btn" value="ЗАРЕГИСТИРОВАТЬСЯ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

@endsection