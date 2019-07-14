<?php 
    $url = url()->current();
?>

@extends('layouts.app', ['body_class' => 'single'])

@section('title', 'Autopride')

@section('content')

<main>
    <section class="content">
        <div class="container">
            <div class="section-content">
                <h1 class="rent-car-title">Бронирование</h1>
                <div class="" style="margin-top: 60px;margin-bottom: 70px;border: 2px solid #dff0d8;padding: 30px;">
                    <h2 style="font-weight: normal;font-size: 22px;text-align: center;margin-bottom: 25px;">Спасибо!</h2>
                    <h2 style="font-weight: normal;font-size: 22px;text-align: center;">Ваша заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.</h2>
                    <a href="/autopark" class="btn btn-default" style="margin: 0 auto;display: block;width: 120px;">Автопарк</a>
                </div>
            </div>
		</div>
	</section>
</main>

@endsection