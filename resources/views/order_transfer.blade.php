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
                    <li aria-current="page">Order transfer</li>
                </ol>
            </nav>
            <div class="article">
				<h1 class="text-center">Order transfer</h1>
                <div class="row">
                    <div class="col-12 bookForm-fieldset border">
                        <div class="rent_car_form">
                            <form action="{{route('orderTransfer')}}" method="post">
                                @csrf
                                <input type="hidden" name="page_url" value="{{$url}}">
                                <input type="hidden" name="departure" value="">
                                <input type="hidden" name="destination" value="">
                                <input type="hidden" name="selected_car_id" value="">
                                <input type="hidden" name="selected_car_rent_price" value="">
                                <input type="hidden" name="total_price" value="">
                                <legend class="">Адреса отправления и назначения</legend>
                                <fieldset class="margin-top">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name" class=" required">Пункт отправления</label>
                                                <select id="home-form-input-departure" class="form-control" name="point_departure">
                                                    <option value="selected-2" id="input-departure-option-selected-2" style="display: none;">Выбрать...</option>
                                                    <option value="1" selected>Прага аеропорт</option>
                                                    <option value="2">Прага адресс</option>
                                                    <option value="3">Станция, автобус / поезд</option>
                                                    <option value="4">Прага отель</option>
                                                    <option value="5">Города CZ & EU</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name" class=" required">Пункт назначения</label>
                                                <select id="home-form-input-destination" class="form-control" name="point_destination">
                                                    <option value="selected-2" id="input-destination-option-selected-2" style="display: none;" selected>Выбрать...</option>
                                                    <option value="1" selected>Прага аеропорт</option>
                                                    <option value="2">Прага адресс</option>
                                                    <option value="3">Станция, автобус / поезд</option>
                                                    <option value="4">Прага отель</option>
                                                    <option value="5">Города CZ & EU</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="header-form-input-pick-up" class="required">Дата отправления</label>
                                            <div class="form-row">
                                                <div class="col-xs-7 col-sm-7">
                                                    <div class="input-group" id="datetimepicker_borrowDate">
                                                        <input type="text" name="pick_up_date" id="header-form-input-pick-up" value="@php echo date('d/m/Y'); @endphp" class="form-control" placeholder="" size="12" maxlength="10" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xs-5 col-sm-5 no-padding-left">
                                                    <div class="input-group" id="datetimepicker-borrowTime">
                                                        <div class="input-group-addon clickable"><i class="far fa-clock order-transfer-date-icon"></i></div>
                                                        <input type="text" name="pick_up_time" id="header-form-input-pick-up-time" value="8:00" placeholder="" class="form-control form-input-pick-up-time" size="5" maxlength="5" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="header-form-input-return" class="required">Дата возвращения</label>
                                            <div class="form-row">
                                                <div class="col-xs-7 col-sm-7">
                                                    <div class="input-group" id="datetimepicker_borrowDate">
                                                        <input type="text" name="return_date" id="header-form-input-return" value="" class="form-control" placeholder="" size="12" maxlength="10" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xs-5 col-sm-5 no-padding-left">
                                                    <div class="input-group" id="datetimepicker-borrowTime">
                                                        <div class="input-group-addon clickable"><i class="far fa-clock order-transfer-date-icon"></i></div>
                                                        <input type="text" name="return_time" id="header-form-input-return-time" value="8:00" placeholder="" class="form-control form-input-return-time" size="5" maxlength="5" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top">
                                        <div class="col-2">
                                            <label for="header-form-input-passengers" class="required">Кол. пас.</label>
                                            <div class="dropdown">
                                                <button class="btn btn-passangers dropdown-toggle btn-passangers-count" type="button" id="dropdownPassangersButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    1
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-passangers" aria-labelledby="dropdownPessangersButton">
                                                    <div class="dropdown-title">Пассажиры</div>
                                                    <div class="num-picker form-inline">
                                                        <div class="form-group">
                                                            <label for="adult-count">Adult (age 12+):</label>
                                                            <input type="text" class="form-control" id="adult-count" name="AdultCount" placeholder="" value="1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="child5plus-count">Child (age 5-12):</label>
                                                            <input type="text" class="form-control" id="child5plus-count" name="Child5AndOlderCount" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="child2plus-count">Child (age 1-5):</label>
                                                            <input type="text" class="form-control" id="child1plus-count" name="Child1AndOlderCount" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="infant-count">Infant (age 0-1):</label>
                                                            <input type="text" class="form-control" id="infant-count" name="InfantCount" placeholder="">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary fullwidth" type="button" id="passengers-button-ok">OK</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                        </div>
                                    </div>
                                </fieldset>
                                <legend class="margin-top">Choose car</legend>
                                <fieldset class="margin-top">
                                <div class="form-block-tab-content">
                                    <div class="choose-car">
                                        @foreach ($cars as $car)
                                        <div class="car-wrapper">
                                            <div class="card-item select-car-item-{{$loop->iteration}}">
                                                <div class="card-heading-outer">
                                                    <div class="card-heading">
                                                        <div class="card-selector"><i class="fas fa-check-circle card-selector-check"></i></div>
                                                        <span class="card-block-item-name">Седан</span>
                                                    </div>
                                                </div>
                                                <div class="card-image">
                                                    @if ($car->car_image)
                                                    <div class="card-image-container card-car-image-item" style="background-image: url('{{ Voyager::image( $car->car_image ) }}');" car-image="{{ Voyager::image( $car->car_image ) }}"></div>
                                                    @else
                                                    <div class="card-image-container card-car-image-item" style="background-image: url('{{ asset('public/site_img/no_image.png') }}');" car-image="{{ asset('public/site_img/no_image.png') }}"></div>
                                                    @endif
                                                </div>
                                                <div class="card-info">
                                                    <p class="card-car-id">{{$car->id}}</p>
                                                    <h4 class="card-car-title">{{$car->title}}</h4>
                                                    <div class="car-name">1 - {{$car->number_of_people}} Пассажиров</div>
                                                    <div>
                                                        <div class="card-price">
                                                            Цена: <span class="card-price car_rent_price_day">{{$car->day_rent_price}}</span> CZK / 1 день
                                                            <span class="card-price-vat-note">Все цены включают НДС и сборы</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                </fieldset>
                                <legend class="margin-top">Price</legend>
                                <fieldset class="margin-top">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="order-transfer-total-price">Price: <b class="home-form-total-price">0</b> CZK</div>
                                            <!-- <div>Car ID: <span id="car-id"></span></div>
                                            <div>Car rent price: <span id="car-rent-price"></span></div>
                                            <div>pick_up_date: <span id="pick_up_date"></span></div>
                                            <div>return_date: <span id="return_date"></span></div>
                                            <div>point_departure: <span id="point_departure"></span></div>
                                            <div>point_destination: <span id="point_destination"></span></div> -->
                                        </div>
                                    </div>
                                </fieldset>
                                <legend class="margin-top">Contacts</legend>
                                <fieldset class="margin-top">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="form_customer_first_name" class=" required">
                                                    Имя
                                                </label>
                                                <input type="text" name="customer_first_name" id="form_customer_first_name" value="" class="form-control" size="32" maxlength="200" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="form_customer_last_name" class=" required">
                                                    Фамилия
                                                </label>
                                                <input type="text" name="customer_last_name" id="form_customer_last_name" value="" class="form-control" size="32" maxlength="200" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="form_customer_email" class=" required">
                                                    E-mail
                                                </label>
                                                <input type="email" name="customer_email" id="form_customer_email" value="" class="form-control" size="30" maxlength="100" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="form_customer_phone" class=" required">
                                                    Мобильный тел.
                                                </label>
                                                <input type="text" name="customer_phone" id="form_customer_phone" value="" class="form-control" size="14" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="form_customer_message" class="">
                                                    Примечание
                                                </label>
                                                <textarea name="customer_message" id="form_customer_message" value="" class="form-control" cols="30" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col">

                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="margin-top">
                                    <button type="submit" class="button red home-form-rent-car-btn form-order-transfer-button-active" id="home-form-order-car-btn">Забронировать</button>
                                    <button type="submit" class="button red home-form-rent-car-btn form-order-transfer-button-disable" id="home-form-order-car-btn" disabled="disabled">Забронировать</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</section>
</main>

@endsection