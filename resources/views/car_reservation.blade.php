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
                        <a href="/autopark">Autopark</a>
                        <span class="breadcrumbs__separator" aria-hidden="true">
                            <svg class="breadcrumbs-icon" viewBox="0 0 16 16"><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline></g></svg>
                        </span>
                    </li>
                    <li>
                        <a href="/autopark/{{ $car->url }}">{{ str_limit($car->title, $limit = 20, $end = '...') }}</a>
                        <span class="breadcrumbs__separator" aria-hidden="true">
                            <svg class="breadcrumbs-icon" viewBox="0 0 16 16"><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline></g></svg>
                        </span>
                    </li>
                    <li aria-current="page">Бронирование</li>
                </ol>
            </nav>
            <div class="section-content">
                <h1 class="rent-car-title">Бронирование</h1>
                @if (\Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p class="alert-content"><strong>{!! \Session::get('success') !!}</strong></p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <!-- -->
                <div class="margin-top-big">
                    <div class="rent_car_form">
                        <form action="{{ action('Controller@rentCar') }}" method="post" class="form" id="reservationForm">
                            @csrf
                            <input type="hidden" name="page_url" value="{{ $url }}">
                            <input type="hidden" name="car_title" value="{{$car->title}}">
                            <input type="hidden" name="car_id" value="{{$car->id}}">
                            <div class="row">
                                <div class="col-lg-12 padding-top padding-bottom border bookForm-fieldset">
                                    <div class="row">
                                        <div class="col-5">
                                            <legend>Время аренды</legend>
                                            <div class="row">
                                                <label for="from" class="col-xs-12 col-sm-2 control-label required">от:</label>
                                                <div class="col-xs-7 col-sm-6">
                                                    <div class="input-group" id='datetimepicker_borrowDate'>
                                                        <div class="input-group-addon clickable"><i class="far fa-calendar-alt rent-date-icon"></i></div>
                                                        <input type="text" name="borrowDate" id="borrowDate" value="" class="form-control" placeholder="Дата проката" size="12" maxlength="10" required>
                                                    </div>
                                                </div>
                                                <div class="col-xs-5 col-sm-4 no-padding-left">
                                                    <div class="input-group" id='datetimepicker-borrowTime'>
                                                        <div class="input-group-addon clickable"><i class="far fa-clock rent-date-icon"></i></div>
                                                        <input type="text" name="borrowTime" id="borrowTime" value="9:00" placeholder="Время проката" class="form-control" size="5" maxlength="5" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row margin-top">
                                                <label for="from" class="col-xs-12 col-sm-2 control-label required">до:</label>
                                                <div class="col-xs-7 col-sm-6">
                                                    <div class="input-group" id='datetimepicker-returnDate'>
                                                        <div class="input-group-addon clickable"><i class="far fa-calendar-alt rent-date-icon"></i></div>
                                                        <input type="text" name="returnDate" id="returnDate" value="" placeholder="Дата возвращения " class="form-control" size="12" maxlength="10" required>
                                                    </div>
                                                </div>
                                                <div class="col-xs-5 col-sm-4 no-padding-left">
                                                    <div class="input-group" id='datetimepicker-returnTime'>
                                                        <div class="input-group-addon clickable"><i class="far fa-clock rent-date-icon"></i></div>
                                                        <input type="text" name="returnTime" id="returnTime" value="9:00" placeholder="Время возвращения " class="form-control" size="5" maxlength="5" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <legend>Выбранный автомобиль</legend>
                                            <div class="booking__carSelected">
                                                <div class="booking__carImg" data-storage="carImg">
                                                    @if ($car->car_image)
                                                    <img src="{{ Voyager::image( $car->car_image ) }}" alt="{{ $car->title }}">
                                                    @else
                                                    <img src="{{ asset('public/site_img/no_image.png') }}">
                                                    @endif
                                                </div>
                                                <p class="no-margin" id="carName">{{$car->title}}</p>
                                                <a href="/autopark" id="changeCar" class="btn btn-default margin-top">Поменять авто</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <fieldset class="margin-top-big">
                                            <div class="row">
                                                <legend class="col-12">Тип проката</legend>
                                                <div class="col-sm-4">
                                                    <div class="checkReplace checkReplace--radio checkReplace--border">
                                                        <input type="radio" class="checkReplace__input" name="type_of_rental" id="pricelistType-with" value="with limit" checked="checked" required>
                                                        <label class="checkReplace__label check-type-block type-of-rental" for="pricelistType-with">
                                                            <span class="checkReplace__label__indicator"></span>
                                                            <p class="checkReplace__label__caption">с лимитом (200km/день, 3000 km/месяц)</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="checkReplace checkReplace--radio checkReplace--border">
                                                        <input type="radio" class="checkReplace__input" name="type_of_rental" id="pricelistType-without" value="without limit" required>
                                                        <label class="checkReplace__label check-type-block type-of-rental" for="pricelistType-without">
                                                            <span class="checkReplace__label__indicator"></span>
                                                            <p class="checkReplace__label__caption">Тариф комфорт (400km/день, 4500 km/месяц)</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="row margin-top-big">
                                        <div class="col-lg-3">
                                            <fieldset class="margin-top">
                                                <legend>Способ оплаты</legend>
                                                <div class="checkReplace checkReplace--radio">
                                                    <input type="radio" class="checkReplace__input" name="payment_method" id="payment-Наличные" value="Cash" checked="checked" required>
                                                    <label class="checkReplace__label" for="payment-Наличные"><span class="checkReplace__label__indicator"></span>Наличные</label>
                                                </div>
                                                <div class="checkReplace checkReplace--radio">
                                                    <input type="radio" class="checkReplace__input" name="payment_method" id="payment-Кредитная/ дебетовая карта" value="Credit card" required>
                                                    <label class="checkReplace__label" for="payment-Кредитная/ дебетовая карта"><span class="checkReplace__label__indicator"></span>Кредитная/ дебетовая карта</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3">
                                            <fieldset class="margin-top"><legend>Аксессуары для авто</legend><div class="checkReplace checkReplace--checkbox"><input type="checkbox" class="checkReplace__input" name="accessories[]" id="equipment-20" value="Baby seat"><label class="checkReplace__label" for="equipment-20"><span class="checkReplace__label__indicator"></span>Детское сиденье (40 крон/день)</label></div><div class="checkReplace checkReplace--checkbox"><input type="checkbox" class="checkReplace__input" name="accessories[]" id="equipment-11" value="GPS Tom Tom"><label class="checkReplace__label" for="equipment-11"><span class="checkReplace__label__indicator"></span>GPS Tom Tom (80 крон/день)</label></div></fieldset>
                                        </div>
                                    </div>
                    </div>
                    <div class="col-lg-9">
                        <legend class="margin-top">Контакт</legend>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="name" class=" required">
                                    Имя и фамилия
                                    </label>
                                        
                <input type="text" name="customer_name" id="name" value="" class="form-control" size="32" maxlength="200" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="company" class="">
                                    Компания
                                    </label>
                                    
                <input type="text" name="customer_company" id="company" value="" class="form-control" size="30" maxlength="100">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="ico" class="">
                                    IČO/ID
                                    </label>
                                    
                <input type="text" name="customer_ico_id" id="ico" value="" class="form-control" size="10" maxlength="100">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="mail" class=" required">
                                    E-mail
                                    </label>
                                    
                <input type="email" name="customer_email" id="mail" value="" class="form-control" size="30" maxlength="100" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="mobile" class=" required">
                                    Мобильный тел.
                                    </label>
                                    
                <input type="text" name="customer_phone" id="mobile" value="" class="form-control" size="14" required>
                                </div>
                            </div>
                        </div>
                        <fieldset class="margin-top">
                            <div class="form-group">
                                <legend>Куда доставить автомобиль</legend>
                                <textarea name="delivery" id="place" placeholder="Напишите пожалуйста куда доставить авто" class="form-control" cols="30" rows="3" required></textarea>
                            </div>
                        </fieldset>
                    <fieldset class="margin-top-big"><div class="checkReplace checkReplace--checkbox">
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
                                <input type="submit" name="submit" id="reservationFormSubmitButton" value="Бронировать" class="btn btn-primary"> 
                                <!-- <input type="reset" name="cancel" id="cancel" value="Отменить" class="btn btn-default"> -->
                            </div>
                        </fieldset>
                    </div>
                </div>
                            <input type="hidden" name="formName" value="reservationForm" id="formName">
                        </form>
                    </div>
                </div>
        
                <!-- -->
			</div>
		</div>
	</section>
</main>

@endsection