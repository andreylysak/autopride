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
                    <li>
                        <a href="/services">Услуги</a>
                        <span class="breadcrumbs__separator" aria-hidden="true">
                            <svg class="breadcrumbs-icon" viewBox="0 0 16 16"><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline></g></svg>
                        </span>
                    </li>
                    <li aria-current="page">{{ str_limit($service->title, $limit = 20, $end = '...') }}</li>
                </ol>
            </nav>
            <section class="section-content order-service-block">
                <h1 class="order-service-title">Заказать услугу <b>{{$service->title}}</b></h1>
                <!-- -->
                <div class="margin-top-big">
                    <div class="rent_car_form">
                        <form action="{{ action('Controller@orderService') }}" method="post" class="form" id="orderServiceForm">
                            @csrf
                            <input type="hidden" name="page_url" value="{{ $url }}">
                            <input type="hidden" name="service_title" value="{{$service->title}}">
                            <input type="hidden" name="service_id" value="{{$service->id}}">
                            <input type="hidden" name="order_id" value="{{$order_id}}">
                            <div class="row">
                                <div class="col-lg-9 border bookForm-fieldset">
                                    <div class="row service-id-value">
                                        <div class="col-6">
                                            <p class="mb-0">ID услуги: {{$service->id}}</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="mb-0 text-right">Order ID: {{$order_id}}</p>
                                            @if (Auth::check())
                                            <p class="mb-0 text-right">Account ID: {{Auth::user()->id}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <legend>Контакт</legend>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name" class=" required">Имя и фамилия</label>
                                                <input type="text" name="customer_name" id="name" value="" class="form-control" size="32" maxlength="200" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="mail" class=" required">E-mail</label>
                                                <input type="email" name="customer_email" id="mail" value="" class="form-control" size="30" maxlength="100" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="mobile" class=" required">Мобильный тел.</label>
                                                <input type="text" name="customer_phone" id="mobile" value="" class="form-control" size="14" required>
                                            </div>
                                        </div>
                                    </div>
                                    <legend class="margin-top">Адреса отправления и назначения</legend>
                                    <fieldset class="margin-top">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name" class=" required">Пункт отправления</label>
                                                    <textarea name="departure_point" id="place" placeholder="Напишите пожалуйста адрес отправления" class="form-control" cols="30" rows="3" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name" class=" required">Пункт назначения</label>
                                                    <textarea name="destination_point" id="place" placeholder="Напишите пожалуйста адрес назначения" class="form-control" cols="30" rows="3" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <legend>Дата и время отправления</legend>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-xs-7 col-sm-6">
                                                    <label for="name" class=" required">Дата</label>
                                                    <div class="input-group" id='datetimepicker_borrowDate'>
                                                        <div class="input-group-addon clickable"><i class="far fa-calendar-alt rent-date-icon"></i></div>
                                                        <input type="text" name="date" id="borrowDate" value="" class="form-control" placeholder="Дата проката" size="12" maxlength="10" required>
                                                    </div>
                                                </div>
                                                <div class="col-xs-5 col-sm-4 no-padding-left">
                                                    <label for="name" class=" required">Время</label>
                                                    <div class="input-group" id='datetimepicker-borrowTime'>
                                                        <div class="input-group-addon clickable"><i class="far fa-clock rent-date-icon"></i></div>
                                                        <input type="text" name="time" id="borrowTime" value="9:00" placeholder="Время проката" class="form-control" size="5" maxlength="5" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name" class=" required">Примечание:</label>
                                                <textarea name="comment" id="place" placeholder="Примечание" class="form-control" cols="30" rows="3" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <legend>Автомобиль</legend>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="name" class=" required">Сколько пассажиров?</label>
                                                <select name="number_of_passengers" class="form-control form-control-select" required>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input type="hidden" name="car" value="">
                                                <label for="name" class=" required">Автомобиль</label>
                                                <select name="car_id" id="input_car_id" class="form-control form-control-select" required>
                                                    @foreach ($cars as $car)
                                                    <option value="{{$car->id}}">{{$car->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <fieldset class="margin-top-big">
                                        <div class="checkReplace checkReplace--checkbox">
                                            <input type="checkbox" class="checkReplace__input" name="zpracovani" id="zpracovani" value="1" required>
                                            <label class="checkReplace__label" for="zpracovani"><span class="checkReplace__label__indicator"></span>
                                                <p class="no-margin">Я согласен с <a href="/" target="_blank">обработкой личных данных</a> (мы используем ваши данные только для обработки вашего заказа)</p>
                                            </label>
                                        </div>
                                        <div class="checkReplace checkReplace--checkbox">
                                            <input type="checkbox" class="checkReplace__input" name="accept" id="accept" value="1" required>
                                            <label class="checkReplace__label" for="accept"><span class="checkReplace__label__indicator"></span>
                                                <p class="no-margin"><a href="/" target="_blank">Я согласен с условиями договора</a></p>
                                            </label>
                                        </div>
                                        <div class="margin-top-big">
                                            <input type="submit" name="submit" id="orderServiceFormSubmitButton" value="Отправить" class="btn btn-primary"> 
                                            <!-- <input type="reset" name="cancel" id="cancel" value="Отменить" class="btn btn-default"> -->
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <input type="hidden" name="formName" value="orderServiceForm" id="formName">
                        </form>
                    </div>
                </div>
                <!-- -->
            </section>
		</div>
	</section>
</main>

@endsection