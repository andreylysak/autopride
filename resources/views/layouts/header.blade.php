<header>
    <div class="navb-container top-line">
    	<div class="row header-top">
	    	<div class="container info-top-bottom">
			    <div class="social">
			        <a href="" class="blue"><img src="{{ asset('public/site_img/telegram.png') }}" alt=""></a>
			        <a href="" class="purpure"><img src="{{ asset('public/site_img/phone-call.png') }}" alt=""></a>
			        <a href="" class="green"><img src="{{ asset('public/site_img/phone-circle.png') }}" alt=""></a>
			        <a href=""><img src="{{ asset('public/site_img/facebook.png') }}" alt=""></a>
			        <a href=""><img src="{{ asset('public/site_img/instagramm.png') }}" alt=""></a>
			        <a href=""><img src="{{ asset('public/site_img/skype.png') }}" alt=""></a>
			    </div>
			    <div class="phone">
			    	<img src="{{ asset('public/site_img/phone.png') }}" alt=""> +38 066 780 80 80
			    </div>
			    <div class="email">
			    	<img src="{{ asset('public/site_img/mail.png') }}" alt=""> info@autopride.com
                </div>
			    <div class="right-block">
			    	<div class="cabinet">
			    		<a href="/account" class="header-profile-link"><img src="{{ asset('public/site_img/cabinet.png') }}" alt=""> Кабинет</a>
			    	</div>
                    <div class="dropdown lang_selector" id="lang_choice_1">
                        <a class="btn btn-info btn-locales dropdown-toggle" href="#" role="button" id="dropdownLocales" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{App::getLocale()}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-locale" aria-labelledby="dropdownLocales">
                            <a class="dropdown-item" href="{{url('setlocale/en')}}">EN</a>
                            <a class="dropdown-item" href="{{url('setlocale/cz')}}">CZ</a>
                            <a class="dropdown-item" href="{{url('setlocale/ru')}}">RU</a>
                        </div>
                    </div>
			    </div>
			</div>
		</div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-4 col-lg-2 col-xl-2 logo-wrap">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('public/site_img/logo.png') }}" class="logo" alt="logo">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 nav-info">
                        <nav class="menu header-menu">
                            @if(App::getLocale() == 'en')
                            {{menu('Header menu en', 'main_menu')}}
                            @elseif(App::getLocale() == 'cz')
                            {{menu('Header menu cz', 'main_menu')}}
                            @elseif(App::getLocale() == 'ru')
                            {{menu('Header menu ru', 'main_menu')}}
                            @endif
                        </nav>
                        <form class="searchbox search-form" action="/search" role="search" method="get" >
                            <input type="search" placeholder="Поиск" id="s" name="s" class="searchbox-input" onkeyup="buttonUp();">
                            <button type="submit" value="" class="searchbox-submit"><img src="{{ asset('public/site_img/search.png') }}" alt="search" /></button>
                            <span class="searchbox-icon"><img src="{{ asset('public/site_img/search.png') }}" alt="search" /></span>
                        </form>
                    </div>
                        <a class="cabinet-mob" href=""><i class="fas fa-user"></i></a>
                    <select name="lang_choice_2" id="lang_choice_2" class="lang_selector lang-mob">
                        <option value="cz" selected="selected">CZ</option>
                        <option value="ru">RUS</option>
                    </select>
                    <div class="mobile-btn">
	                    <p class="line-1"></p>
	                    <p class="line-2"></p>
	                    <p class="line-3"></p>
	                </div>
                </div>
            </div>
        </div>
    </div>
    @if(Request::is('/'))
    <section class="main-banner">
        <div class="banners  owl-carousel">
            <div class="banner item" style="background-image: url('{{ asset('public/site_img/slide-front.png') }}');" >
                <div class="container">
                    <div class="row">
                        <div class="text">
                            <h2>
                                @if(App::getLocale() == 'en')
                                Deliver on time<br> at the desired car
                                @elseif(App::getLocale() == 'cz')
                                Dodejte včas<br> na požadované auto
                                @elseif(App::getLocale() == 'ru')
                                Доставим вовремя<br> на желаемом<br> автомобиле
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner item" style="background-image: url('{{ asset('public/site_img/slide-front-2.jpg') }}');" >
                <div class="container">
                    <div class="row">
                        <div class="text">
                            <h2>
                                @if(App::getLocale() == 'en')
                                Deliver on time<br> at the desired car
                                @elseif(App::getLocale() == 'cz')
                                Dodejte včas<br> na požadované auto
                                @elseif(App::getLocale() == 'ru')
                                Доставим вовремя<br> на желаемом<br> автомобиле
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-place">
            <div class="container">
                <div class="header-form">
                    <ul class="nav nav-tabs" id="pick-car-form-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="step-tab-1-tab" data-toggle="tab" href="#step-tab-1-content" role="tab" aria-controls="step-tab-1-content" aria-selected="true">tab-1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="step-tab-2-tab" data-toggle="tab" href="#step-tab-2-content" role="tab" aria-controls="step-tab-2-content" aria-selected="false">tab-2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="step-tab-3-tab" data-toggle="tab" href="#step-tab-3-content" role="tab" aria-controls="step-tab-3-content" aria-selected="false">tab-3</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pick-car-form-tab-content">
                        <div class="tab-pane fade show active" id="step-tab-1-content" role="tabpanel" aria-labelledby="step-tab-1-tab">
                            <div class="form-row header-form-block-top">
                                <div class="form-group col text-center">
                                    <label for="home-form-input-departure">Пункт отправления</label>
                                    <select id="home-form-input-departure" class="form-control" name="point_departure">
                                        <option value="selected-2" id="input-departure-option-selected-2" style="display: none;">Выбрать...</option>
                                        <option value="1" selected="selected">Прага аеропорт</option>
                                        <option value="2">Прага адресс</option>
                                        <option value="3">Станция, автобус / поезд</option>
                                        <option value="4">Прага отель</option>
                                        <option value="5">Города CZ & EU</option>
                                    </select>
                                </div>
                                <div class="form-group col text-center">
                                    <label for="home-form-input-destination">Пункт назначения</label>
                                    <select id="home-form-input-destination" class="form-control" name="point_destination">
                                        <option value="selected-2" id="input-destination-option-selected-2" style="display: none;" selected="selected">Выбрать...</option>
                                        <option value="1">Прага аеропорт</option>
                                        <option value="2">Прага адресс</option>
                                        <option value="3">Станция, автобус / поезд</option>
                                        <option value="4">Прага отель</option>
                                        <option value="5">Города CZ & EU</option>
                                    </select>
                                </div>
                                <div class="form-group col-3 text-center">
                                    <label for="header-form-input-pick-up">Дата отправления</label>
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
                                <div class="form-group col-3 text-center">
                                    <label for="header-form-input-return">Дата возвращения</label>
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
                                <div class="form-group col-1 text-center">
                                    <label for="header-form-input-passengers">Кол. пас.</label>
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="step-tab-2-content" role="tabpanel" aria-labelledby="step-tab-2-tab">
                            <div class="header-form-block-top">
                                <div class="row">
                                    <div class="col text-left">
                                        <a class="tab-previous-button"><i class="fa fa-angle-left fa-2x fa-fw"></i></a>
                                    </div>
                                    <div class="col text-center">
                                        <div class="tab-heading-title">
                                            Choose car
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a class="tab-next-button"><i class="fa fa-angle-right fa-2x fa-fw"></i></a>
                                    </div>
                                </div>
                                <div class="form-block-tab-content">
                                    <div class="choose-car">
                                        @foreach ($cars as $car)
                                        <div class="car-wrapper">
                                            <div class="card-item card-item-{{$loop->iteration}}">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="step-tab-3-content" role="tabpanel" aria-labelledby="step-tab-3-tab">
                            <div class="header-form-block-top">
                                <div class="row">
                                    <div class="col text-left">
                                        <a class="tab-previous-button"><i class="fa fa-angle-left fa-2x fa-fw"></i></a>
                                    </div>
                                    <div class="col text-center">
                                        <div class="tab-heading-title">
                                            Summary
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a class="tab-next-button"><i class="fa fa-angle-right fa-2x fa-fw"></i></a>
                                    </div>
                                </div>
                                <div class="form-block-tab-content">
                                    <input type="hidden" name="page_url" value="{{ $url }}">
                                    <input type="hidden" name="car_title" value="">
                                    <input type="hidden" name="car_id" value="">
                                    <div class="row">
                                        <div class="col-6 border-right">
                                            <legend class="margin-top tab-heading-title">Контакты</legend>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="form_customer_first_name" class=" required">
                                                            Имя
                                                        </label>
                                                        <input type="text" name="customer_name" id="form_customer_first_name" value="" class="form-control" size="32" maxlength="200" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="form_customer_last_name" class=" required">
                                                            Фамилия
                                                        </label>
                                                        <input type="text" name="customer_name" id="form_customer_last_name" value="" class="form-control" size="32" maxlength="200" required>
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
                                            <div class="form-group">
                                                <label for="form_customer_message" class="">
                                                    Примечание
                                                </label>
                                                <textarea name="customer_message" id="form_customer_message" value="" class="form-control" cols="30" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <legend class="margin-top tab-heading-title">Детали заказа</legend>
                                            <label>Выбранный автомобиль</label>
                                            <div class="booking__carSelected group">
                                                <div class="booking__carImg" data-storage="carImg">
                                                    <img class="form-selected-car-image" src="{{ asset('public/site_img/no_image.png') }}">
                                                </div>
                                                <p class="no-margin form-selected-car-name" id="carName">Автомобиль не выбрано</p>
                                                <a id="changeCar" class="btn btn-default margin-top home-header-form-change-car">Поменять авто</a>
                                            </div>
                                            <table class="home-form-summary-table">
                                                <tr>
                                                    <th>Пункт отправления</th>
                                                    <td class="home-form-departure"></td>
                                                </tr>
                                                <tr>
                                                    <th>Пункт назначения</th>
                                                    <td class="home-form-destination"></td>
                                                </tr>
                                                <tr>
                                                    <th>Дата и время отправления</th>
                                                    <td><span class="home-form-departure-date"></span> <span class="home-form-departure-time"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>Дата и время возвращения</th>
                                                    <td><span class="home-form-return-date"></span> <span class="home-form-return-time"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>Количество пассажиров</th>
                                                    <td class="home-form-passangers-count"></td>
                                                </tr>
                                            </table>
                                            <div class="home-total-price">Total price: <b class="home-form-total-price"></b> CZK</div>
                                        </div>
                                    </div>
                                    <fieldset class="margin-top-big text-center" style="display: none;">
                                        <div class="checkReplace checkReplace--checkbox">
                                            <input type="checkbox" class="checkReplace__input" name="zpracovani" id="zpracovani" value="1" required>
                                            <label class="checkReplace__label" for="zpracovani"><span class="checkReplace__label__indicator"></span>
                                                <p class="no-margin">Я согласен с <a href="/" target="_blank">обработкой личных данных</a></p>
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row header-form-block-errors">
                        <div class="form-block-error-message"><p>Заполните все поля формы!</p></div>
                    </div>
                    <div class="row header-form-block-bottom">
                        <div class="col text-left">
                        <div class="tab-control">
                            <a class="tab-previous-button wizard-button-disactive disabled" aria-disabled="true"><i class="fa fa-angle-left fa-3x fa-fw"></i></a>
                            <div class="form-step">step <span class="wizard_click"></span> of 3</div>
                            <a class="tab-next-button"><i class="fa fa-angle-right fa-3x fa-fw"></i></a>
                        </div>
                        </div>
                        <div class="col text-center">
                            <form class="home-order-transfer-form" id="homeFormOrderTransfer" action="{{route('postOrderTransfer')}}" method="post">
                                @csrf
                                <input type="hidden" name="input_page_url" value="{{$url}}">
                                <input type="hidden" name="input_selected_car_id" value="">
                                <input type="hidden" name="input_selected_car_rent_price" value="">
                                <input type="hidden" name="input_departure" value="">
                                <input type="hidden" name="input_destination" value="">
                                <input type="hidden" name="input_departure_date" value="">
                                <input type="hidden" name="input_return_date" value="">
                                <input type="hidden" name="input_departure_time" value="">
                                <input type="hidden" name="input_return_time" value="">
                                <input type="hidden" name="input_adult_count" value="">
                                <input type="hidden" name="input_child5plus_count" value="">
                                <input type="hidden" name="input_child1plus_count" value="">
                                <input type="hidden" name="input_infant_count" value="">

                                <input type="hidden" name="input_customer_first_name" value="">
                                <input type="hidden" name="input_customer_last_name" value="">
                                <input type="hidden" name="input_customer_email" value="">
                                <input type="hidden" name="input_customer_phone" value="">
                                <input type="hidden" name="input_customer_message" value="">
                                <input type="hidden" name="total_price" value="">

                                <div class="pick-car-btn">
                                    <button type="button" class="button red continue_pick_car">Заказать трансфер</button>
                                </div>
                                <div class="order-car-btn">
                                    <button type="submit" class="button red home-form-rent-car-btn" id="home-form-order-car-btn">Забронировать</button>
                                </div>
                            </form>
                        </div>
                        <div class="col text-right">
                            <div class="home-form-contacts">
                                <span class="home-form-phone-title"></span> <span><i class="fas fa-phone-square home-form-phone-icon"></i></span><span class="home-form-phone-value">+38 066 780 80 80</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</header>

<!-- Departure Modals -->
<div class="modal fade" id="modal-departure-address" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Write custom address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="departure-address" class="control-label label-modal">Напишите адрес местонахождения</label>
                    <input name="departure_address" type="text" class="form-control input-modal" id="departure-address">
                </div>
                <div class="form-group">
                    <div id="home-order-transfer-map-departure-address" class="home-order-transfer-map-address"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="departure-address-continue" data-dismiss="modal">Продолжить</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-departure-station" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Write custom address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="departure-address" class="control-label label-modal">Выбирете станцию...</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="departure_station" id="departure_station1" value="Zličín bus station">
                        <label class="form-check-label" for="departure_station1">
                            Zličín bus station
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="departure_station" id="departure_station2" value="Florenc Central bus station">
                        <label class="form-check-label" for="departure_station2">
                            Florenc Central bus station
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="departure_station" id="departure_station3" value="Černý Most bus station">
                        <label class="form-check-label" for="departure_station3">
                            Černý Most bus station
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="departure_station" id="departure_station4" value="Na Knížecí bus station">
                        <label class="form-check-label" for="departure_station4">
                            Na Knížecí bus station
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="departure_station" id="departure_station5" value="Holešovice bus station">
                        <label class="form-check-label" for="departure_station5">
                            Holešovice bus station
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="departure_station" id="departure_station6" value="Hlavní nádraží / Main Train Station / Wilsonova 300/8">
                        <label class="form-check-label" for="departure_station6">
                            Hlavní nádraží / Main Train Station / Wilsonova 300/8
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="departure_station" id="departure_station7" value="Holešovice vlakové nádraží / Holesovice train station / Partyzánská">
                        <label class="form-check-label" for="departure_station7">
                            Holešovice vlakové nádraží / Holesovice train station / Partyzánská
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="departure_station" id="departure_station8" value="Masarykovo nádraží / Masarykovo train station / Havlíčkova">
                        <label class="form-check-label" for="departure_station8">
                            Masarykovo nádraží / Masarykovo train station / Havlíčkova
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="departure_station" id="departure_station9" value="Smíchovské nádraží / Smichov train station / Nádražní">
                        <label class="form-check-label" for="departure_station9">
                            Smíchovské nádraží / Smichov train station / Nádražní
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="departure-station-continue" data-dismiss="modal">Продолжить</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-departure-hotels" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Write custom address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="departure-address" class="control-label label-modal">Choose your hotel or address</label>
                    
                    <div id="hotels-list">
                        <div id="departure-hotels-list">
                        <input class="list-search list-search-hotels" placeholder="Search for your hotel" />
                        <ul class="list">
                            
                        <li><div class="hotel suggestion-item">1.Republic Hotel, V Tunich 1625/8</div></li>
                    
                        <li><div class="hotel suggestion-item">1Bed4U 2Hostel,Lublanska 800/65</div></li>
                    
                        <li><div class="hotel suggestion-item">4 Arts Suites, Rybna 650/3</div></li>
                    
                        <li><div class="hotel suggestion-item">4 Bears House, Cimicka 150a</div></li>
                    
                        <li><div class="hotel suggestion-item">7 Tales Suites, Karlova 21, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">987 Design Prague Hotel, Senovazne Namesti 15</div></li>
                    
                        <li><div class="hotel suggestion-item">A &amp; O Prague Rhea, V Úžlabině 19, 108 00 Strašnice</div></li>
                    
                        <li><div class="hotel suggestion-item">A&amp;O Prague Metro Strizkov, Děčínská 1, Prague, 180 00</div></li>
                    
                        <li><div class="hotel suggestion-item">AA Pension Hoffmann, Na dolnici 35</div></li>
                    
                        <li><div class="hotel suggestion-item">A-Apartments Harley Style, Václavské náměstí 36, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">ABE Hotel, Legerova 24, Prague, 120 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Abri Hotel, Jana Masaryka 36, Prague, 12000</div></li>
                    
                        <li><div class="hotel suggestion-item">Absolutum Boutique Hotel, Jablonského 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Academic Hotel &amp; Congress Centre, Tyršovo nám. 2222, 252 63 Roztoky u Prahy</div></li>
                    
                        <li><div class="hotel suggestion-item">Adalbert Ecohotel, Markétská 28/1, Prague, 169 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Agricola, Rostovska 25, Prague, 101 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Ahoy hostel Prague, na Perstyne 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Ai Quattro Angeli, Opatovická 11, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Alchymist Grand Hotel and Spa, Tržiště 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Alchymist Nosticova Palace, Nosticova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Alchymist Prague Castle Suites, Snemovni 164/8, Prague 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Alqush Downtown Hotel, legerova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Ambiance  Hotel, Tyrsova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Ametyst Hotel Praha, Jana Masaryka 11, Prague, 120 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Amigo City Centre Hotel, Legerova 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Anděl Apartments Praha, Nádražní 114, Prague, 15000</div></li>
                    
                        <li><div class="hotel suggestion-item">Anděl Apartments Praha, Nádražní 114, Prague, 15000</div></li>
                    
                        <li><div class="hotel suggestion-item">Andel City Center, Plzeňská 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Andel’s Suites Apartments, Stroupeznickeho 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Andel's by Vienna House Prague, Stroupeznickeho 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Anenská Loft Apartments, Anenska 220</div></li>
                    
                        <li><div class="hotel suggestion-item">Angel Apartment with Garage, Karla Engliše 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Angel Apartments, Nádražní 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Angelo by Vienna House Prague, Radlická 3216/1G, Anděl, 150 00 Praha-Smíchov</div></li>
                    
                        <li><div class="hotel suggestion-item">Anna Hotel, Budecská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Antik City, Malá Štěpánská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Antik Hotel Prague, Dlouha 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Anyday Apartments, Sokolská 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparment Hradčanské Náměstí, Hradčanské náměstí 61/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Apart Hotel Susa, Jana Masaryka 49</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartamenty Central Park Praha, Malešická 2855/2b</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel &amp; Spa Carolline, Karolíny Světlé 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel &amp; Spa Carolline, Karolíny Světlé 20, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel Angel, Karla Englise 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel Austria Suites, Stefanikova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel City 5, Vltavska 667/11, Smichov, Prague 150 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel Davids, Biskupský dvůr 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel Lublanka, Lublanska 59</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel Sibelius, Jana Masaryka 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Jungmannova, Jungmannova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Kaiser, NÁRODNÍ 17/981</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Kristýna, Nuselská 128</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Letná, Letohradská 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Malá strana, Všehrdova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartman Musilkova, Musílkova 236/46</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Na Kampě, Na Kampě 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartman Prague, Nad Jezem 0812</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartman Pstrossova, Pštrossova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Speranza, Národní 981/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartman Stare Mesto, Anenska 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartman u Hradcan, Heleny Malířové 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Wuchterlova, Wuchterlova 566/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmant Grossmann, Politických vězňů 14, Pasáž Jiřího Grossmanna</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány a hostel SKLEP, Seifertova 53</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Bára, Ke Smíchovu 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Letná, Veletržní 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmany Machek, Záhřebská 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Národní, Národní 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmany Olita, Vaclavske namesti 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Salabka, K Bohnicím 2/57</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Šárka, Ve Skalách 2597/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Simona, Hrubinova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Železná, Železná 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Zlatý Anděl, Staropramenná 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment - hotels in Prague 01, Karoliny Svetle 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment - The Modern Flat, Ve Smeckach 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment 5.Května, 5.května 68</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Abricos, Dlouha 715/38</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Alena, Zborovská 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Alice, Soukenická 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Alina, Pstrossova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Amadeus, Uhelný trh 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Amandment, Kamenická 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Anděl Tomáškova, Tomáškova 4, Praha 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Anna, Ve Smeckach 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment at Wenceslas Square, Ve Smeckach 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Attic Klimentska, Klimentska 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Attic Kozi, Kozí 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Attic Olivova, Olivova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Beer Spa, Masná 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Benediktska, Benediktská 687/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Benediktska, Benediktska 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Betlemska, Betlemska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Brehova, Břehova 40/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Březinova, Březinova 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Britania, Sazovicka 479/19</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Casa Olivova, Olivova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Charles Bridge - View, U Lužického semináře 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Cholupická, Cholupická 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Čkalova, V.P.Čkalova 449/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Court, Haštalská 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Dalimilova, Dalimilova 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Divoká Šárka, Ke Džbánu 27/380</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment DL centrum, Dlouha 735/25</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Dům U Černého beránka, Praha 1 - Malá Strana, Valdštejnská 150/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Dusni, Dušní 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Eliška, Freyova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Florenc, Klimentská 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment for Friends, Vlkova 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Gabriela, Nepomuckych 766/16, Praha 9 - Letnany</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Halkova, Halkova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Havanská, Havanská 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Havelska, Havelská 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Havlíčkova, Havlíčkova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Helen, Truhlarska 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Heleny Malířové, Heleny Malířové 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Hládkov,</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Hostivar, R. A. Dvorského 109</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment House - The Modern Flat, Soukenicka 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment House Anenska, Anenska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment House Troja, V Podhoří 2a</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment House Žižkov, Roháčova 18, Prague, 13000</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Hradešínská, Hradešínská 46/1830</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Hrozen, Hroznová 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Husinecká, Husinecká 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Hybernska, Hybernska 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment in historical center - Masná 15, Masná 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment in Prague Centre, Klimentska 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment in Prague, Na Krcske Strani 1442/38</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment In Prague, Říční 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Jan, Na Cihlářce 3062/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Jelinex, libocanska 836/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Jičínská, Jičínská 31/1617</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Karolina, Karolíny Světlé 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Karoliny Svetle II,</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Klamovka, Plzenska 160</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Klara 2, Šlikova 1229/46</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Klara, Vodňanského 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Konvikt, Konviktská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Korunní Dvůr, Korunní 810/104</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Kozi, Kozi 5/916</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Krakovská 5, Krakovská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Krizikova II,</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment LaNoblessa 2, Legerova 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Lea, Klimentska 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Londýnská, Londýnská 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Lublanska, Lublanska 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Lucemburská, Lucemburská 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Lužická, Lužická 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Malá Štěpánská, Malá Štěpánská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Malá Strana Petřínská, Petřínská 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Malovanka, Mládeže 1375/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Manesova, Mánesova 310/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Marilyn, Soukenická 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Masna, Masna 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Michalska, Michalská 512/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Mojmirova, Mojmírova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Myslbekova, Myslbekova 19/685</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Celne, Na Celne 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Děkance, Na Děkance 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Hrebenkach, Na Hřebenkách 3203/1a</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Hrobci, Na Hrobci 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Kozačce, Na Kozačce 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Petřinách, Na Petřinách 1905/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Valech, Na Valech 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Zbořenci, Na zbořenci 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Náprstkova, Náprstkova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Narodni Prague, Národní 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Natalie, Růžová 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Navratilova 16, Navratilova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment near Lesser Town, P. Švandy ze Semčic 16, Smíchov</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment near the Castle, Rooseveltova 25/400</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Nebovidská, Nebovidská 462</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Nezamyslova, Nezamyslova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Ondra, Dubečská 2365/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Osadní Prague 7, Osadní 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Ostrovskeho, Ostrovskeho 2264/33</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Parléřova 8, Parléřova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Penthouse Linhartova, Linhartova 1288/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Pod Sychrovem, Pod Sychrovem I 938/32</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prague Central, Opletalova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prague Centre, Ječná 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prague City, Pod Pramenem 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prague, Tyrsova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prokopová, Prokopová 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prubezna, Prubezna 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Pstrossova, Pštrossova 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Radlická, Radlická 3301/68</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Reznicka, Reznicka 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Romana, Melantrichova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Ruzova, Růžová 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Rybalkova, Rybalkova 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Rybná 24, Rybná 24/716</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Saturn 6, Opletalova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Saturn 7, Masná 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Saturn 9, U Nemocenské pojišťovny 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Sedlčanská, Sedlčanská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Šeříková, Šeříková 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Slatinka, Na Slatince 3284/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Slavojova, Slavojova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Slovenská, Slovenská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Smeralova, Smeralova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Smichov, Na Neklance 3233/40</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Sochařská, Socharska 343/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Sophia, Soukenická 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Soukenicka, Soukenická 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Soukromí, Rižská 1527/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Square Havlíčkovo, Havlíčkovo náměstí 2859</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Starého Hřbitova, U Starého Hřbitova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Starkova, Stárkova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Staroměstské, Staroměstské náměstí 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Sturova, Štúrova 1701/55</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Taurus 11, Revoluční 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Tina, Petrske namesti 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Trojska, Trojská 67</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Tusarova, Tusarova 1527/38</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment U hroznu, Hroznová 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment U Muzea, Mezibranska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment U Zlaté Konvice, Melantrichova 477/20</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Újezd, Újezd / 42/452</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vinohrady, Americka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vinohrady, Korunni 1164/49</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vitkov, Kališnická 390/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vítkova, Vítkova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vrsovice, Kubánské náměstí 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vyšehrad, Lumírova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment With Balcony Prague Center, Ve Smečkách 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment with fireplace, V dolině 1157/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Záhřebská, Záhřebská 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Žižkov Tower, Kubelikova 44</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Žižkov, Viklefova 1811/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment-hotels RENTeGO, Ujezd 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment-Národní 17, Národní 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Almandine, Rytířská 409/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Barbora Prague, Doudova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Betlemske Square Old Town, Betlemske namesti 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Bob, Svornosti 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Cidlinska, Cidlinska 788/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Comfort, Jungmannova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Emma, Oldřichova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Happy Days, Husitska 41</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Happy Life Praha, Mala Stepanska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Hollareum, Soukenická 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments JB, Kochanova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Jeronymova, Jeronýmova 750/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Jiránkova Vila, Mezitraťová 343/26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Jizera, Václavské náměstí 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Katarina, Celakovskeho sady 434/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Kolej Vltava, Chemická 953</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Krakovská 18, Krakovská 18/1339</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Krasova, Krasova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments LENKA, Václavské náměstí 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Letna, Františka Křížka 460/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Lux Prague, V Zahradach 802/23</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments MG, Nuselská 159/114</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Mikovec, Mikovcova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Mlynářská 4, Mlynářská 1361/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Nademlejnská, Nademlejnská 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments near beautiful garden, Na kozacce 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Old Town Square 27, Staroměstské náměstí 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Old Town Square, Melantrichova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Orebitská, Orebitská 66/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Pod Vysehradem, Vratislavova 3/25</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Praha 6, Heleny Malířové 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Pushkin, Husova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Soukenická, Soukenická 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments staropramenna, Staropramenna 530/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Těšnov, Těšnov 1744/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Tronicek, Purkyňova 2053/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Týnská 7, Týnská 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments U Staropramenu, Na Valentince 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments U Švejků, Újezd 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Valentinka, Na Valentince 362/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Vysehrad With Free Parking, Vratislavova Street 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Wenceslas Square, Wenceslas Square 36, 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Appartamento Praga Centro, Trojanova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Appartment Rytířova, Rytířova 856</div></li>
                    
                        <li><div class="hotel suggestion-item">Appia Hotel Residences, Sporkova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Aquapalace Hotel Prague, Pražská 137, Čestlice</div></li>
                    
                        <li><div class="hotel suggestion-item">Archibald City hotel, Zitna 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Archibald Hotel At the Charles Bridge, Na Kampe 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Aria Hotel, Trziste 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Ariston &amp; Ariston Patio Hotel, Seifertova 65</div></li>
                    
                        <li><div class="hotel suggestion-item">Arkada Hotel Praha, Balbinova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Apartments Celakovskeho Sady, Čelakovskeho sady 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Apartments Prague, Petrská 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Deco Imperial Hotel, Na Poříčí 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Gallery Apartment Prague, Karlovo náměstí 557/30</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Hole Hostel, Soukenicka 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Hotel Prague, Nad Kralovskou oborou 53</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Nouveau Palace Hotel, Panska 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Noveau beauty, Uruguayská 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Art-Apartments Čelakovskeho Sady 2, Čelakovského Sady 434/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Art-Apartments Seifertova, Seifertova 1021/19</div></li>
                    
                        <li><div class="hotel suggestion-item">Artapartments, Balbínova 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Artharmony Pension &amp; Hostel, Ječná 509/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Astoria Hotel, Rybna 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Astronomical Clock Apartment, Týnská ulička 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Astronomical Clock Suite, Kozna 473/2</div></li>
                    
                        <li><div class="hotel suggestion-item">At the Green Grape - U Zeleného hroznu, Jánský Vršek 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Atelier Centrum, Plzeňská 1270/103</div></li>
                    
                        <li><div class="hotel suggestion-item">Atlantic Hotel, Na Porici 9</div></li>
                    
                        <li><div class="hotel suggestion-item">ATS Hostel Arnosta, Voršilská 1</div></li>
                    
                        <li><div class="hotel suggestion-item">ATS Hostel Jednota, Opletalova 38</div></li>
                    
                        <li><div class="hotel suggestion-item">ATS Hostel Svehlova, Slavikova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Attic Hotel, Hanusova 496/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Aureus Clavis Hotel, Nerudova 243/27, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Avenue Legerova 19, 9 1864 Legerova, 120 00 Praha 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Avidi Apartment, Jeseniova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">AXA Hotel, Na Porici 40</div></li>
                    
                        <li><div class="hotel suggestion-item">AZ-Hostel, Jindřišská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">B&amp;B Hotel Prague City, Prvního pluku 29</div></li>
                    
                        <li><div class="hotel suggestion-item">B&amp;B Ivana, Klecanská 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Balu Apartments, Pod Krejcárkem 975/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Bambur Residence, Opletalova 923/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Baroque Hall, Jecna 510/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Baroque House at the Black Lamb, Valdštejnská 150/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Barrandov Apartments, Pod Třešněmi 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Baryton Apartments, Řehořova 1003/34</div></li>
                    
                        <li><div class="hotel suggestion-item">Bastia Residence, Molakova 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Bastien Studio, Sazovická 488/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Bed &amp; Breakfast Na Farkáně, Na Farkáně I 241/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Bed&amp;Books Art Hotel, Nekázanka 14, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Belehradska Cozy apartment, Belehradska 126</div></li>
                    
                        <li><div class="hotel suggestion-item">Bertramka Apartment, Na Provaznici 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Best Place in Prague, Valentinská 56/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Best Western Amedia Praha, Türkova 5a/2318</div></li>
                    
                        <li><div class="hotel suggestion-item">Best Western City Hotel Moran, Na Morani 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Best Western Plus Hotel Meteor Plaza, Hybernska 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Beta Pension, Jaromírova 46</div></li>
                    
                        <li><div class="hotel suggestion-item">Betlem Club Hotel, Betlemske nam. 9/257</div></li>
                    
                        <li><div class="hotel suggestion-item">Bilkova apartments, Bílkova 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Bishop's House, Dražického Náměstí 6-9</div></li>
                    
                        <li><div class="hotel suggestion-item">Black Bridge - Hotel Apartment, Národních hrdinů 891, Prague, 19012</div></li>
                    
                        <li><div class="hotel suggestion-item">Blue Orange Business Resort Prague, Tupolevova 676</div></li>
                    
                        <li><div class="hotel suggestion-item">Boat Hotel Matylda, Masarykovo nabrezi</div></li>
                    
                        <li><div class="hotel suggestion-item">Bohem Prague Hotel, Plzeňská 56</div></li>
                    
                        <li><div class="hotel suggestion-item">Bohemia Apartments Prague Centre, Vodickova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Bohemia Plaza Residence, Zitna 50</div></li>
                    
                        <li><div class="hotel suggestion-item">Boho Hotel Prague, Senovazna 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Bona Serva, Konevova 1107/54</div></li>
                    
                        <li><div class="hotel suggestion-item">Botanical garden apartment, Na Hrádku 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Botel Albatros, Nábřeží Ludvíka Svobody 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Botel Matylda, Masarykovo nabrezi, Prague 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Botel Racek, Podolské nábřeží</div></li>
                    
                        <li><div class="hotel suggestion-item">Botel Vodnik, Strakonická 1032 / 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Botic Student House, K Botici 1439/5 Praha 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Boutique Hotel Constans, Bretislavova 309/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Boutique Hotel Seven Days, Žitná 46/572</div></li>
                    
                        <li><div class="hotel suggestion-item">Branik Garden, Branicka 106</div></li>
                    
                        <li><div class="hotel suggestion-item">Bravo Apartment, Víta Nejedlého 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Bredovský dvůr Apartment, Olivova 4/2096</div></li>
                    
                        <li><div class="hotel suggestion-item">Brezina Pension, Legerova 41</div></li>
                    
                        <li><div class="hotel suggestion-item">Bright Apartment Close to Subway, Prušánecká 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Bright spacious apartment, Musílkova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Buddha studio, Haštalská 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Buddha-Bar Hotel Prague, Jakubska 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Budget Apartment, Kubelíkova 40</div></li>
                    
                        <li><div class="hotel suggestion-item">Budget Rehorova Apartment, Rehorova 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Budget Reznicka apartment, Reznicka 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Capital Apartmens, Václavské náměstí 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Carlo IV Prague, Autograph Collection, Senovazne Namesti 13/991</div></li>
                    
                        <li><div class="hotel suggestion-item">Castle Residence Praha, Květinářská 755, Prague, 182 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Cathedral Prague Apartments, Týnská 11, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">Central Hotel praha, Rybná  677/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Central National Apartments, Charvátova 10, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Central Station Studios, Rehorova 3, Prague, 130 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Centrum Apartments Old Town Square,  Dlouhá 735/25, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">Century Old Town Prague - MGallery by Sofitel, Na Poříčí 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Bridge Apartments, U lužického semináře 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Bridge Bed And Breakfast, Drazickeho Namesti 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Bridge Palace, Anenske namesti 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Bridge Premium Apartments, Karlova 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Bridge Residence, Mostecka 12/49</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles IV apartment, Mostecka 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles IV Apartments, Karlova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Square Apartment, Charles Square 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Charming Prague Apartments At the Black Star, Seminářská 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Chateau St. Havel - Wellness Hotel, Před nádražím 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Cherry Apartment near the City Center, Křižíkova 70/65</div></li>
                    
                        <li><div class="hotel suggestion-item">Chili Hostel, Pstrossova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Chopin Hotel Prague City, Opletalova 960/33</div></li>
                    
                        <li><div class="hotel suggestion-item">Church Pension Praha - Husuv Dum, Jungmannova 9/22</div></li>
                    
                        <li><div class="hotel suggestion-item">City Apartment, V lesíčku 656/7</div></li>
                    
                        <li><div class="hotel suggestion-item">City Crown Hotel, Borivojova 94</div></li>
                    
                        <li><div class="hotel suggestion-item">City Lounge Crown Hotel, Borivojova 94, Prague, 13000</div></li>
                    
                        <li><div class="hotel suggestion-item">City Lounge Hotel, Borivojova 92</div></li>
                    
                        <li><div class="hotel suggestion-item">CityStay Apartments, Sokolska 66</div></li>
                    
                        <li><div class="hotel suggestion-item">Citystay Hostel, Sokolska 66</div></li>
                    
                        <li><div class="hotel suggestion-item">Clarion Congress Hotel Prague, Freyova 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Clarion Hotel Prague City, Tylovo namesti 15/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Clarion Hotel Prague Old Town, Hradební 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Climentine, Klimentská 1215/26</div></li>
                    
                        <li><div class="hotel suggestion-item">Cloister Inn Hotel, Konviktska 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Clown and Bard Hostel, Borivojova 102/758</div></li>
                    
                        <li><div class="hotel suggestion-item">Club Hotel Praha, Ječná 509/12, 120 00 Nové Město</div></li>
                    
                        <li><div class="hotel suggestion-item">Colloseum Hotel, Myslikova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Congress and Sport Hotel Olsanka, Táboritská 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Contemp Castle, Londýnská 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Copernicus Apartments, Kopernikova 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Corinthia Hotel Prague, Kongresová 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Cosmopole hostel, Spalena 83/3 Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Courtyard by Marriott Prague Airport, Aviaticka 1092/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Courtyard by Marriott Prague Flora, Lucemburska Street 46</div></li>
                    
                        <li><div class="hotel suggestion-item">Czech Bohemia Apartments Prague, Hellichova 394/7, Malá Strana</div></li>
                    
                        <li><div class="hotel suggestion-item">Czech Bohemia Design Apartments Prague, Vodičkova 710/31</div></li>
                    
                        <li><div class="hotel suggestion-item">Czech Inn Hostel, Francouzska 76</div></li>
                    
                        <li><div class="hotel suggestion-item">Dancing House Hotel, Jiráskovo náměstí 1981/6, 120 00 Praha</div></li>
                    
                        <li><div class="hotel suggestion-item">DC Rezidence, Novodvorska 1061/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Delux Apartment Kolínská, Kolínská 1741/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Deluxe Apartment Andel, Vltavská 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Deminka Palace, Skretova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Apartment Agata, Ruská 58</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Apartment at Vysehrad, Boleslavova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Design apartment in Prague 6, Brixiho 1619/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Hotel Jewel Prague, Rytířská 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Hotel Neruda, Nerudova 44</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Merrion Hotel, Jeseniova 49</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Metropol Hotel Prague, Národní 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Designer Prague City Apartments, Šmeralova 146/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Designer Prague City Apartments, Šmeralova 146/6, Prague, 170 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Designhotel Elephant Prague, Na Florenci 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Discounts Prague Hotel, Cukrovarnická 64, Prague, 16200</div></li>
                    
                        <li><div class="hotel suggestion-item">Dizzy Daisy Hostel, Dittrichova 330/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Dolce Villa, Nebušická 93</div></li>
                    
                        <li><div class="hotel suggestion-item">Dolce Vita Suites Boutique, Vejvodova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Domino Pension, Ašská 107</div></li>
                    
                        <li><div class="hotel suggestion-item">Domus Balthasar Design Hotel, Mostecka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Domus Henrici Boutique Hotel, Loretanska 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Don Giovanni Apartments, Na Porici 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Dorint Hotel Don Giovanni Prague, Vinohradska 157 a</div></li>
                    
                        <li><div class="hotel suggestion-item">Down Town Residence, Příčná 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Downtown Apartments, U Milosrdnych 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Downtown Suites Chlumova***, Chlumova 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Downtown Suites Prague, Kodaňská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Dream Home Dlouhá, Dlouhá 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Dream Home Expo, Molakova 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Dream Home Kampa, Na Kampe 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Dream Home Vinohrady, Šafaříkova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Drtinova Prague Apartments, Drtinova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Dusni Apartments, Dusni 1</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Embassy Prague Hotel, Petrská 31</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Crystal Palace, Malá Štěpánská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Downtown, Žitná 53</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Jasmín, Skloněná 515</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Jeleni dvur Prague Castle, Jelení 197/7, 118 00 Praha 1</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Julis, Václavské náměstí 22</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Mánes, Myslíkova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Populus, U Staré Cihelny 11</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Rokoko, Václavské nám. 38</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Royal Esprit, Jakubská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Sonata, Sokolská 1576/68</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Tosca, Blanická 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Easy Star Hotel, Blazimska 1781/14</div></li>
                    
                        <li><div class="hotel suggestion-item">easyHotel, U Vystaviste 1, Prague 170 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Ela Apartments, Molákova 577/34</div></li>
                    
                        <li><div class="hotel suggestion-item">Elens Apartments Koněvova 47, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Elens Apartments Koněvova 49, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Elens Apartments, Koněvova 22, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Elens Apartments, Národni 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Elen's Prague Castle Suites, Jánský Vršek 313/10, Prague, 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Eliska Ruterra Apartment, Elišky Krásnohorské 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Eliška Tower Apartments Prague, Freyova 983/25</div></li>
                    
                        <li><div class="hotel suggestion-item">Elišky Krásnohorské Apartments, Elišky Krásnohorské 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Elite Hotel, Ostrovni 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Elysee Apartments, Václavské nám. 43</div></li>
                    
                        <li><div class="hotel suggestion-item">Elysee Hotel, Vaclavske Namesti 43</div></li>
                    
                        <li><div class="hotel suggestion-item">Empirent Apartments, Křižíkova 71, Praha, Prague, 180 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Emporio Prague Apartments, Soukenicka 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Epstein Apartments, Benediktska 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Equity Point Prague, Ostrovni 131/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Erbenova Apartment, Erbenova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Esplanade Prague hotel, Washingtonova 1600/19</div></li>
                    
                        <li><div class="hotel suggestion-item">Europa Apartments, Na Bělidle 302/27</div></li>
                    
                        <li><div class="hotel suggestion-item">Eurostars hotel David, Naplavni 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Eurostars Thalia hotel, Narodni Trida 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Eurowings Hotel, Milíčova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Excellent Apartments, Klapkova 165/67</div></li>
                    
                        <li><div class="hotel suggestion-item">Exe City Park, Opletalova 960/33</div></li>
                    
                        <li><div class="hotel suggestion-item">Expo Hostel Prague, Beranových 65</div></li>
                    
                        <li><div class="hotel suggestion-item">Expo Hotel, Za Elektrarnou 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Extol Inn hotel, Pristavni 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Falkensteiner Hotel Maria Prag, Opletalova 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Fashion Loft, Vladislavova 18, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">Florenc Apartments, Konevova 60</div></li>
                    
                        <li><div class="hotel suggestion-item">Florentina boat, Dvořákovo nábřeží</div></li>
                    
                        <li><div class="hotel suggestion-item">Foerster Apartments, Pštrossova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Fontána hotel, Edisonova 149</div></li>
                    
                        <li><div class="hotel suggestion-item">Four Seasons Hotel Prague, Veleslavínova 2a/1098</div></li>
                    
                        <li><div class="hotel suggestion-item">Four Trees, Petrská 1132/4, 110 00 Prague-Nové Město</div></li>
                    
                        <li><div class="hotel suggestion-item">Franciscan Garden Apartments, Jungmannova 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Franciscan Garden Apartments, Jungmannova 28, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Franz Apartments, Konviktská 2/319</div></li>
                    
                        <li><div class="hotel suggestion-item">Friday Hotel, Na Prikope 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Fusion Hotel, Panska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Galaxie Hotel, Suchdolské náměstí 801</div></li>
                    
                        <li><div class="hotel suggestion-item">Galerie Royale, Křižíkova 87</div></li>
                    
                        <li><div class="hotel suggestion-item">Gallery Hostel, V Jame 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Gallery Hotel SIS, Rostislavova 17/253</div></li>
                    
                        <li><div class="hotel suggestion-item">Garden Residence Prague Castle, Nový Svět 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Garden studios, Košická 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Gay Hotel Villa Mansland, Štěpničná 9-11</div></li>
                    
                        <li><div class="hotel suggestion-item">Germes Apartments Klimentska, Klimentska 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Germes Apartments Prague, Soukenicka 23</div></li>
                    
                        <li><div class="hotel suggestion-item">GH Prague Apartments, Vinohradska 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Giovanni Apartments Palladium, Truhlarska 5</div></li>
                    
                        <li><div class="hotel suggestion-item">GJ Residence Na Vinohradu, Na vinohradu 217/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Angel Apartment, Vltavská 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Apple Apartments, Uvoz 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Family Apartments, Molakova 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Karlín Apartment, Sokolovská 85/104</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Key, Nerudova 243/27</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Prague Residence, náměstí Curieových 43/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Star hotel, Nerudova 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Well Hotel Prague, U Zlaté Studně 4/166</div></li>
                    
                        <li><div class="hotel suggestion-item">Gorgeous Prague Rooms, Kostecna 121/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Grand Hotel Bohemia, Kralodvorska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Grand Hotel Praha, Staromestske Namesti 481/22</div></li>
                    
                        <li><div class="hotel suggestion-item">Grand Terrace, Mezibranska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Grandior Hotel Prague, Na Poříčí 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Green Garden Hotel, Fügnerovo náměstí 1865/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Green Oasis Wenceslas Square Apartments, Na Smetance 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Greg Apartments Vinohrady Prague, Ondříčkova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Grus Apartments Prague, Wuchterlova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Guest House DD, U 1.baterie 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Guest house Seifertova, Seifertova 545/44</div></li>
                    
                        <li><div class="hotel suggestion-item">Guesthouse Saturnin, Orebitská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">H7 Palace, Hálkova 1642/7, 120 00 Praha 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hanabi Apartments, Baranova 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hanspaulka apartment, Na Hanspaulce 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hapimag Resort Prague, Václavské náměstí 60</div></li>
                    
                        <li><div class="hotel suggestion-item">Happy Guest Apartment, Spalena 35</div></li>
                    
                        <li><div class="hotel suggestion-item">Happy Guest National Theatre Apartment, Ostrovní 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Happy House, Sazovicka 479/19</div></li>
                    
                        <li><div class="hotel suggestion-item">Happy Memories Guest House, Lysolajské údolí 54</div></li>
                    
                        <li><div class="hotel suggestion-item">Happy Prague Apartments, Betlemske Namesti 254/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hastal Gallery, Haštalská 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Haštalské náměstí Apartment, Haštalské náměstí 2/1046</div></li>
                    
                        <li><div class="hotel suggestion-item">Haštalské Náměstí Studio, Haštalské náměstí 1046/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Haute Couture Apartment, Zborovská 58</div></li>
                    
                        <li><div class="hotel suggestion-item">High Spec Apartment Downtown Prague, Zlatnická 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hilton Prague Hotel, Pobrezni 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hilton Prague Old Town, V Celnici 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hoffmeister Hotel, Pod Bruskou 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Holec Apartments, Pštrossova 3, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Holečkova Apartments, Holečkova 119</div></li>
                    
                        <li><div class="hotel suggestion-item">Holečkova Hostel, Holečkova 107</div></li>
                    
                        <li><div class="hotel suggestion-item">Holiday Inn Prague Airport, Prague International Airport, K Letisti 1074/32</div></li>
                    
                        <li><div class="hotel suggestion-item">Holiday Inn Prague Congress Centre, Na Pankraci 15/1684</div></li>
                    
                        <li><div class="hotel suggestion-item">HomeRez – Apartment Kamenicka, Kamenicka 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel 4 U - Dolni Chabry, Ústecká 239/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Advantage, Sokolská 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Alia, Vladimírova 8/234</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Ananas, Václavské nám. 846/1, 110 00 Prague 1-Můstek</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Boathouse, Lodnická 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Bohemia, Poděbradská 540/26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Bonvolon, Jungmannova 5/18, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Boudnik, Dalimilova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Briliant, Náchodská 708/79</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Centre, Sokolska 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Cortina, Arbesovo náměstí 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Dakura, Národní Obrany 544/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Daniela, Jungmannova 5/18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Downtown, Narodni 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Elf, Husitska 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel EMMA, Na Zderaze 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Florenc, Pod Výtopnou 2, Prague, 186 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Fontána, Národní Obrany 935/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Franz Kafka, Kaprova 13/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel GoldenBridge, Staroměstské náměstí 929/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Homer, Melantrichova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Kaktus, Karlovo náměstí 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Kolbenka, Kolbenova 159/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Kotva, Varhulíkové 134</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Libeň, U Meteoru 29/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Lípa, Tachovské náměstí 6/288</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Mango, Míšeňská 68/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Marabou Prague, Koněvova 55</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Marrakesh, Biskupská 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Miles, Vodickova 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Modrá, K Letišti 916</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Mojo Inn, Řeznická 662/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel One Home, Hybernska 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel One Prague, Cimburkova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Opletalova, Opletalova 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Orange, Vaclavske namesti 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Pilgrim &amp; Hotel 3star, Duskova 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Plus Prague, Privozni 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Prague Tyn, Týnska 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Prague, Chodská 1401/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Praha Ládví, Davídkova 443/114</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Praha, U Klikovky 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Ragtime, Opatovicka 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Riviera, Hroznová 491/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Rosemary, Mezi zahrádkami 1824/23</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Rosemary, Růžová 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Santini Prague, Nerudova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Sokol Troja, Trojská 171 a</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel U Bubenicku, Myslíkova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel &amp; Residence Royal Standard, Rasinovo Nabrezi 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel 16, Katerinska 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel 51, Konzumni 253/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Abe, Legerova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Abito, Chodovská 1430/3a</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Adeba, Pernerova 11/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Adler Praha, V Jirchářích 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Adria praha, Václavské náměstí 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Agnes 3, Anežská 807/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Aida, Kubisova 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Akcent, Stroupežnického 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Albion,Peroutkova 531</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Alexander, Na Břevnovské Pláni 1975</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Alexis, Závišova 20 / 2518, Prague, 140 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Alpin Avion, Budějovická 69</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Alton, Legerova 757/62</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Alwyn, Vitkova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Amadeus, Dalimilova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Amarilis, Štěpánská 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ambassador Zlatá husa, Václavské náměstí 839/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Andante, ve smečkách 1408/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Andel, Radlicka 40/857</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Angelis, Pivovarská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ankora, Kateřinská 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Antonie, U Stirky 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Apartman Student, Chemická 951</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Apartments Wencels Square, Vaclavske namesti 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Aramis, Zerotinova 31</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Arbes, Viktora Huga 3</div></li>
                    
                        <li><div class="hotel suggestion-item">HOTEL ARÉNA, Kovářská 1170/15, Prague, 190 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Arko, Vysočanská 87</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Arlington, Kurta Konráda 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Aron, Zerotinova 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Askania, Rostislavova 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Assenzio Prague, Wenzigova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Astra, Mukařovská 1740</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Atos, Melnicka 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Augustus et Otto, Na Celné 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Aura, Kostelecka 819</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Aurus, Karlova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Avion, Kladenská 115</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Balkan, Tr. Svornosti 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Barceló Old Town Praha, Celetna 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Baroko, Tomsova 11/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Bella, Hloubětínská 20/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Belvedere, Milady Horákové 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Beranek, Tylovo nam./ Belehradska</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Beseda Prague, Vladislavova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Bílý Lev, Cimburkova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Bohemians, Modranská 51</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Braník, Pikovická 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Bridge, Vasatkova 1024/27</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Brilliant, Prosecká 73/69</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Brixen, Sokolska 1796/44</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Caesar Prague, Myslíkova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Carlton,Taboritska 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Carol, Kurta Konrada 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Casa Marcello, Řásnovka 783/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Cechie Praha, U Sluncové 618/25</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Cerny Slon, Tynska 629/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Čertousy, Bártlova 35/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Certovka, U Luzickeho seminare 85/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Charles Central, Thamova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Chodov, Mírového Hnutí 2137</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Chvalská Tvrz, Na Chvalské tvrzi 858</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel City Bell, Belgicka 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel City Central Prague, Sokolska 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel City Centre, Revoluční 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel City Club Prague, Sokolska 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel City-Inn, Hybernská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel CitySpot, Jeruzalemska 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Claris, Slezská 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Clement, Klimentská 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Clementin Old Town, Seminarska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Columbo, Miličova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Coronet, Marie Cibulkove 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Cosmopolitan, Zlatnicka 1126/3, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Dahlia Inn, Lipova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Dalimil, Prokopovo nám. 2-3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel D'Angelo, Plzenska 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel DAP, Vítězné náměstí 4/684</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Dar, Kozna 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Diana u Kuchařů, Slévačská 496/48, 198 00 Praha 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Donatello, Salmovská 14, Prague, 12000</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Duo, Teplicka 492</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Edvin, Rosecska 1736/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ehrlich, Koněvova 79</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Elizza, Na Vinobraní 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Energie, Plzeňská 276/298</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Esprit, Lihovarská 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Excellent, Líbeznická 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Florenc, Křižíkova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Florian Prague, Ohradní 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Fortuna City, Bečvářova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Fortuna West, Mrkvičkova 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Frýdl, Na Hlavni 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Frýdl, Na Hlavní 23, Prague, 18200</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Galileo, Bruselská 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Garden Court, Spalena 90/17 Praha 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Garni Rambousek, U Malvazinky 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel General, Svornosti 1143/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel GEO, Perunova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Globus, Gregorova 2115/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Gloria, Prokopova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Golden City Garni, Taboritska 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Golden Crown, Vladislavova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Golden Golem Praha, Na hlavní 21/71</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Golf, Plzenska 103/215a</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Grand Majestic Plaza , Truhlarska 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Grand, Roháčova 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Grandium Prague (Yasmin Hotel), Politickych veznu 12/913</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Habitat 16, Habartická 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Harmony, Na Pořící 31</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Hasa, Sámova 1476/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Hastal Prague Old Town, Hastalska 1077/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Hejtman, Roháčova 70</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Henrietta, Ke Stírce 1774/42</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Herrmes, Do Polí 844/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Hormeda, Na Zástřelu 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel ILF, Budějovická 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Imos, Za Tratí 686/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Inos, Sinkulova 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel International Prague, Koulova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Inturprag, Lisabonska 606/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ivka, Nad Klicovem 81</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Jana / Pension Domov Mládeže, Dykova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel JaS, Sídlištní 1/1167</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Jerabek, Primatorska 4/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Jerome House, V jirchářích 153/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Josef, Rybná 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Julian, Elisky Peskove 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Juno, Stechovicka 2296</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Jurys Inn Prague, Sokolovská 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kampa Garden, U Sovových Mlýnů 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kampa, Všehrdova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kanarek, Proti Proudu 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Karlin, Sokolovska 71</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kavalir, Plzenska 177</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel King David Prague, Hybernska 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel King George, Liliová 10, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kings Court, U Obecniho Domu 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kinsky Garden, Holeckova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Klara, Šternberkova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Klarov, U Zelezne Lavky 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Krystal, José Martího 2/407</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel La Boutique, Staropramenna 728/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Legie, Sokolská 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Leonardo Prague, Karoliny Svetle 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Liberty, ul. 28. října 11/376</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Libuše, Pod Vlachovkou 787/20, Praha 18200</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Lifestyle, V Lužích 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Liliova Prague Old Town, Liliova 1070/18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Lippert, Mikulasska 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Lokal Inn, Misenska 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Lunik, Londýnská 50</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Malá Strana, Melnická 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Marie-Luisa, Krnská 350/26, 197 00 Kbely</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Marketa, Na Petynce 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mars, Kubánské náměstí 1333/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Max, Bezdrevská 549</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Maximilian, Haštalská 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mazanka, Za Vodárnou 1/1013</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Meda-Art of Museum Kampa, Narodni obrany 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mega, Jeseniova 108</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Melantrich, Melantrichova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Meran, Vaclavske namesti 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Meritum, Staré Náměstí 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Merkur, Tesnov 1162/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Metamorphis , Malá Štuparská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Michael, Pod Lysinami 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Michle, Nuselská 214/124</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mira, Vlastislavova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Modra ruze, Rytířská 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mondeo Prague, Kutnohorská 436/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Monica, Vlnita 31/a</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mucha, Sokolovska 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Museum, Mezibranska 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Na Zamecku, Zabehlicka 133</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Nabucco, Ctiradova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel NOIR, Legerova 35</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Nosal, U Michelského Lesa 1157</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Olga, Janovského 50</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Olympik Artemis, U Sluncové 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Olympik Tristar, U sluncové 71/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Olympik, Sokolovská 138</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Opera, Tesnov 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Orion, Americka 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ostaš, Orebitská 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ostruvek, Na Ostrůvku 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Otakar, Otakarova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Otar, Sevřená 1302/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Oya, Na Pankráci 1337/109</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Palac U Kocku, Jilska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pankrac, Na Pankráci 1597/76</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Paris Prague, U Obecniho domu 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Páv, Křemencova 1250/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pawlovnia, V Holešovičkách 1401/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Peko, Brtnická 713/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Penzion Praga, U Lidového domu 857/11, Prague, 190 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Petr, Drtinova 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pivovar, Freyova 12/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pod Věží, Mostecká 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pohoda, Královická 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Popelka, Na Popelce 215/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Praga 1, Žitná 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Praga 1885, Plzeňská 580/29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prague Centre Plaza, Fügnerovo Namesti 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prague Centre Superior, Legerova 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prague Inn, 28.října 378/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prague Star, Ve Smeckach 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prokop, Pod Žvahovem 50</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prokopka, Prokopova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pure White, Koubkova 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel PurPur, Reznicka 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Questenberk, Uvoz 15/155</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Raffaello, Legerova 54</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Regina, Konojedská 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Relax Inn, Novovysocanska 163/25</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Residence Retezova, Retezova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Residence Select, Sokolska 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Residence Spalena, Spalena 99/33, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Restaurant Darwin, U Národní galerie 471</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Roma, Újezd 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Rott, Male Namesti 4/138</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Royal Prague, Thámova 688/36, 186 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Saint George, Tyršova 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Salvator, Truhlarska 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel SAS, U Arborky 397, Prague, 190 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Savoy, Keplerova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Schwaiger, Schwaigerova 59/3, 160 00 Praha 6-Bubeneč</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Seifert, Konevova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Selsky Dvur - Bohemian Village Courtyard, K Horkám 56</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Silenzio, Na Karlovce 2565/1b</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Slavia, Vladivostocka 1460/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Smaragd, Geologicka 2a</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Smisek, na uboci, Praha 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Sovereign Prague, Politickych veznu 916/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Sport, U Cukrovaru 1086, Kralupy nad Vltavou</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Stary Pivovar, Plzeňská 229/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Střížkov, Lovosická 439/42, 190 00 Praha 9-Střížkov</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Suite Home Prague, Pricna 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Sunflower, Oldřichova 31/427</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Sunrise, Ke Karlovu 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Sunshine, Drahobejlova 1058/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Svornost, Novozámecká 284</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Taurus, Vinohradska 105</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Tiepolo, Duskova 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Tivoli Prague, Sokolska 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Trevi, Uruguayská 540/20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Trinidad Prague Castle, U Železné lávky 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Tříska, Vinohradská 137/105, 130 00 Praha 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Troja, Trojská 1/2232</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Tulipán Průhonice, Tulipánová 142, 252 43 Průhonice</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Tyl, Tylovo namesti 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U 3 Pstrosu, Dražického náměstí 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Cerne Hvezdy, Seminarska 177/6, Prague 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Divadla, U stare posty 247/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U dvou zlatých klíčů, Spálená 98/31</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Hvezdy, Belohorska 259</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Jezulatka, Na Kampe 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Karla, Křešínská 155</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Krále Karla, Úvoz 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Kříže, Újezd 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Martina Praha, Zubatého 289/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Páva, U Lužického Semináře 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Prince, Staromestske Namesti 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Schnellu, Tomasska 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Semika, Vratislavova 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Sládků, Bělohorská 130/212</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Stare Pani, Michalská 9/441</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Šuterů, Palackého 722/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Svatého Jana, Vysehradska 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Tri Bubnu, U Radnice 8, 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Zlaté studně, U Zlaté Studně 166/4, Prague, 11800</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Zlateho jelena, Celetna 11 / Stupartska 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Zlatého koníčka, Úvoz 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Zlateho Stromu, Karlova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Zlatych nuzek, Na Kampe 6/494</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel UNIC Prague, Soukenická 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Venezia, Sokolska 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Victor, Husitska 72</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Victoria, Seifertova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Villa, Okrajní 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Vladař, Na Dvorcich 144/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Voyage, Konevova 28/29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Vysehrad, Marie Cibulkove 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Waldstein, Valdstejnske nam. 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Wertheim, Karlovarská 51</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Wilhelm, Hoštálkova 499/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel William, Hellichova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Wolf, U hostivařského nádr. 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Zlatá Váha, Senovážné náměstí 981/21</div></li>
                    
                        <li><div class="hotel suggestion-item">HotelMerlin, Gorazdova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotýlek Na Šancích, Turínská 1494/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hunger Wall Residence, Plaska 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Ibis Praha Mala Strana, Plzenska 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Ibis Praha Old Town, Na Porici 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Ibis Praha Wenceslas Square, Katerinska 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Igor and David Apartments, Havelska 11, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">I'M Hostels &amp; Apartments, Rohacova 73</div></li>
                    
                        <li><div class="hotel suggestion-item">InterContinental Prague, Parizska 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Invalidovna Apartment, Nekvasilova 586</div></li>
                    
                        <li><div class="hotel suggestion-item">iPragueApartments, Trojická 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Iris Hotel Eden, Vladivostocká 1539/2, Prague 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Italska Apartment, Italska 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Jalta Boutique Hotel, Vaclavske namesti 45/818</div></li>
                    
                        <li><div class="hotel suggestion-item">Jana Masaryka Apartment, Jana Masaryka 40</div></li>
                    
                        <li><div class="hotel suggestion-item">Janalex Apartments National Theatre, Ostrovní 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Janalex Apartments Wenceslas Square, Krakovská 19/593</div></li>
                    
                        <li><div class="hotel suggestion-item">Jaselska Apartment, Jaselska 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Jewish Pearl Apartment, U starého hřbitova 6, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Josefov Apartments, Široká 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Josephine Old Town Square Hotel, Týn 636 / 9, 110 00 Staré Město, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Joy Spot Apartments, Krakovska 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Joy Spot Hostel, Krakovska 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Jump In Hostel, Dalimilova 261/14, Prague, 13000</div></li>
                    
                        <li><div class="hotel suggestion-item">Jungmanka, Palackeho 2/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Jungmann Central Residence, Vodičkova 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Jungmann Hotel, Jungmannovo nam. 2</div></li>
                    
                        <li><div class="hotel suggestion-item">JustPrague Apartment - Castle view, Křížovnická 86/6</div></li>
                    
                        <li><div class="hotel suggestion-item">JustPrague Apartment - Charles Bridge, Na Zábradlí 205/1</div></li>
                    
                        <li><div class="hotel suggestion-item">JustPrague Apartment, Korunní 588/4</div></li>
                    
                        <li><div class="hotel suggestion-item">K+K Hotel Central, Hybernska 10</div></li>
                    
                        <li><div class="hotel suggestion-item">K+K Hotel Fenix, Ve Smeckach 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Kampa Park Apartment II, Říční 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Kampa Park Apartment, Říční 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Kampa Park Apartment, Újezd 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Karl In Apartment, Křižíková 47</div></li>
                    
                        <li><div class="hotel suggestion-item">Karlin Apartment Krizikova, Krizikova 75</div></li>
                    
                        <li><div class="hotel suggestion-item">Karlova 25 Apartments, Karlova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Karlova Prague Apartments, Karlova 32/161</div></li>
                    
                        <li><div class="hotel suggestion-item">Karolina Apartment by Ruterra, Karolíny Světlé 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Kent Ridge Loft, Belehradska 1116</div></li>
                    
                        <li><div class="hotel suggestion-item">Kepler Apartmán, Keplerova 215/14</div></li>
                    
                        <li><div class="hotel suggestion-item">King Charles Boutique Hotel Residence, Neklanova 148/34</div></li>
                    
                        <li><div class="hotel suggestion-item">King Wenceslas Apartments, Jungmannova 742/22</div></li>
                    
                        <li><div class="hotel suggestion-item">Knock-inn, Na Kampě 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Kolej Hostivař, Weilova 1144/2, 102 00 Praha-Hostivař</div></li>
                    
                        <li><div class="hotel suggestion-item">Koruna Hotel, Opatovicka 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Košická Apartments, Košická 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Kozna Suites, Kožná 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Krakovska Holiday Appartments, Krakovská 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Krakovska Terraces, Krakovská 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Krakovska, Krakovska 15</div></li>
                    
                        <li><div class="hotel suggestion-item">La Ballerina Hotel, Dittrichova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">La Boutique Hotel, Vltavská 9</div></li>
                    
                        <li><div class="hotel suggestion-item">La Fenice residence, Vinohradska 83</div></li>
                    
                        <li><div class="hotel suggestion-item">Langhans Apartments, Vodičkova 37</div></li>
                    
                        <li><div class="hotel suggestion-item">LaNoblessa apartment, Zlatnická 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Large New Town Apartment, Lípová 577/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Lavanda Hotel Prague, Na belidle 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Lazenska N°4 Apartments, Lazenska 4, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Le Palais Art Hotel Prague, U Zvonarky 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Le Petit Hotel Prague, U Výstaviště 262/1, 170 00 Praha 7-Holešovice</div></li>
                    
                        <li><div class="hotel suggestion-item">Lenotti Italiane, Novákových 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Leon Hotel, Ortenovo náměstí 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Leongargt Apartments, Musílkova 1311/5d</div></li>
                    
                        <li><div class="hotel suggestion-item">Lesser Town Apartment, Petřínská 574/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Lesser Town Hip Apartment, Újezd 400/37</div></li>
                    
                        <li><div class="hotel suggestion-item">Lesser Town Square Apartments, Malostranské náměstí 11, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">Letná Apartment, Veletržní 69</div></li>
                    
                        <li><div class="hotel suggestion-item">Lida Guest House, Lopatecká 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Light Hotel, U dalnice 815/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Liliova Apartments, Liliova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Lindner Hotel Prague Castle, Strahovska 128</div></li>
                    
                        <li><div class="hotel suggestion-item">Little Quarter Hostel, Nerudova 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Little Town Budget Hotel, Malostranske nam. 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Londynska Apartment, Londynska 77</div></li>
                    
                        <li><div class="hotel suggestion-item">Loreta Hotel, Loretánské nám.8</div></li>
                    
                        <li><div class="hotel suggestion-item">Louis Leger Hotel, Legerova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Louren hotel, Slezska 55</div></li>
                    
                        <li><div class="hotel suggestion-item">Louvre Loft Apartment, Narodni 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Lovely Prague Apartments, Truhlářská 23, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Luxury Family Hotel Bila Labut, Biskupska 1347/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Luxury Family Hotel Royal Palace, Letenska 11, Prague, 118 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Luxury Studio City Centre, Kloboucnicka 1411/26</div></li>
                    
                        <li><div class="hotel suggestion-item">Máchova, Máchova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Maiselova Rooms, Maiselova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Majestic Plaza Prague, Štěpánská 645/33</div></li>
                    
                        <li><div class="hotel suggestion-item">Malostranska Residence, Malostranské náměstí 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Mama Shelter (Parkhotel) Praha, Veletržní 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Mamaison Hotel Riverside Prague, Janackovo nab. 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Mamaison Residence Belgická Prague, Belgicka 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Mamaison Residence Downtown Prague, V tunich 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Mamaison Suite Hotel Pachtuv Palace Prague, Karoliny Svetle 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Mandarin Oriental, Prague, Nebovidska 459/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Manes Residence, Na Zderaze 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Mánesova Apartment, Mánesova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Marie - Luisa, Krnska 350, Prague, 19700</div></li>
                    
                        <li><div class="hotel suggestion-item">Marriott Executive Apartments - Longin Center, V Tunich 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Martial Arts Sleepover Gym, Václavská 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Martin's Prague, Graficka 37</div></li>
                    
                        <li><div class="hotel suggestion-item">Masarykova Kolej, Thákurova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">McSleep Hostel Prague 3 stars, Petrská 24, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">MeetMe23, Washingtonova 23, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Merchant's Avenue Hotel, Mostecká 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Merchants Crown Hotel, Vaclavske namesti 846/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Merchant's Yard Residence, Tyn 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Metropolis Prague Apartments (Rezidence Veverkova), Veverkova 25, Prague, 170 00, Czech Republic</div></li>
                    
                        <li><div class="hotel suggestion-item">Metropolitan Old Town, Haštalská 371/20</div></li>
                    
                        <li><div class="hotel suggestion-item">Metropolitan Studios, Záhřebská 46</div></li>
                    
                        <li><div class="hotel suggestion-item">MH Apartments Central Prague, Vysehradská 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Mighty Prague Apartments, Truhlářská 4, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Minihotel Vitex, Prava 619/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Miss Sophie's, Melounova 1609/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Mivos Prague Apartments Vltava, V Jirchářích 147/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Mivos Prague Apartments, Štěpánská 51</div></li>
                    
                        <li><div class="hotel suggestion-item">Monastery Hotel, Strahovske Nadvori 13</div></li>
                    
                        <li><div class="hotel suggestion-item">MOODs boutique hotel, Klimentská 28</div></li>
                    
                        <li><div class="hotel suggestion-item">MOODs Charles Bridge, Naprstkova 274/6</div></li>
                    
                        <li><div class="hotel suggestion-item">MOOo Apartments, Jánský vršek 312/8, 118 00 Malá Strana</div></li>
                    
                        <li><div class="hotel suggestion-item">MOOo Apartments, Myslíkova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Mosaic House, Odborů 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Motel Grado, Mezi Lany 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Motel One Prague, Na Poříčí 1048/30</div></li>
                    
                        <li><div class="hotel suggestion-item">Motorest u vodáka, Výpadová 1037/26</div></li>
                    
                        <li><div class="hotel suggestion-item">Museum Guest House, Legerova 616/78</div></li>
                    
                        <li><div class="hotel suggestion-item">Museum Inn, Celakovskeho sady 8</div></li>
                    
                        <li><div class="hotel suggestion-item">My Hotel Apollon, Konevova 158</div></li>
                    
                        <li><div class="hotel suggestion-item">My Mucha´s Old Prague Gallery, Klimentska 40</div></li>
                    
                        <li><div class="hotel suggestion-item">MyHouse Apartments, Maiselova 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Myo Hotel Caruso, U milosrdnych 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Myo Hotel Mysterius, Masná 702/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Myo Hotel Wenceslas, Krakovská 10, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Nad Královnou Hotel &amp; Restaurant, 15600</div></li>
                    
                        <li><div class="hotel suggestion-item">National Museum Aparthouse, Balbinova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Navratilova Apartments, Navratilova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Nebozizek Hotel a Restaurant, Petřínské sady 411</div></li>
                    
                        <li><div class="hotel suggestion-item">Nerudova Apartment, Nerudova 36</div></li>
                    
                        <li><div class="hotel suggestion-item">New Luxury Apartments Prague 9, Lihovarská 1096/6</div></li>
                    
                        <li><div class="hotel suggestion-item">New Town Tower apartment, Řeznická 5</div></li>
                    
                        <li><div class="hotel suggestion-item">NH Prague City hotel, Mozartova 1/261</div></li>
                    
                        <li><div class="hotel suggestion-item">Nice Apartments Prague, Legerova 76</div></li>
                    
                        <li><div class="hotel suggestion-item">Nová Hospoda, Butovická 24/64</div></li>
                    
                        <li><div class="hotel suggestion-item">Novoměstský hotel, Řeznická 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Novotel Praha Wenceslas Square, Katerinska 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Novum Hotel  Vitkov, Konevova 114</div></li>
                    
                        <li><div class="hotel suggestion-item">Nubis Residence, V Jirchářích 6</div></li>
                    
                        <li><div class="hotel suggestion-item">NYX Prague, Panska 9, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">Oasis Prague Apartments, Petrska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">OAZA hotel, Jeremenkova 1835/106</div></li>
                    
                        <li><div class="hotel suggestion-item">Occidental Praha (Barceló), Na Strzi 32, 140 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Occidental Praha Five (Barceló), Radlická 46/3276</div></li>
                    
                        <li><div class="hotel suggestion-item">Occidental Praha Wilson (Barceló), Václavské náměstí 59</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Jewish Cemetery View, Široká 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague Aparthotel, Charvatova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague Apartments, Žatecká 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague Central Apartments, Vaclavske Namesti 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague Hostel, Benediktská 685/ 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague Hotel, Skořepka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague House, Náprstkova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Royal Post Apartments, Maltézské Náměstí 8, Prague, 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Strand Spirit, Staropramenná 973/16, 150 00 Praha-Smíchov</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Time Hotel, Lublaňská 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Apartment Caroli, Smetanovo Nábřeží 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Apartments Tyn, Týnská ulička 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Apartments, Opatovicka 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Boutique Apartments, Tyn 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Boutique Suites, Dlouhá 727/39, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Charming Apartments, Linhartská 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town City Center Navratilova, Navratilová 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Home Prague, Týnská 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Prague 'Chez moi', Kaprova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Prague, U Obecniho Dvora 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Residence Apartments, Narodni 24/115</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Residence, Jilska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Square Apartments, Stupartska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Square Hotel, Staromestske Namesti 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Square Premium Apartments, Mikulášská 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Square Residence Bambur, Michalská 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Studio Apartment, U Nemocenské Pojišťovny 1230/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Terrace, Betlemske Namesti 6</div></li>
                    
                        <li><div class="hotel suggestion-item">One Room Hotel, Mahlerovy Sady 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Orchidea Lounge Apartments, Borivojova 92</div></li>
                    
                        <li><div class="hotel suggestion-item">Orea Hotel Pyramida, Belohorska 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Orebitská Suite, Orebitská 66/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Ostrovní Apartment, Ostrovní 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Ostrovni Astra Apartment, Ostrovni 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Ostrovského 17, Ostrovského 1190/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Outer Bailey Apartments, Ujezd 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Panorama Hotel Prague, Milevska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Parizska Apartments, Parizska 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Park &amp; Bike Studio Stylish Andel, Kovaku 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Park and River View, Janackovo Nabrezi 17.</div></li>
                    
                        <li><div class="hotel suggestion-item">Park Apartment, Jezkova 1034/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Park Holiday Congress &amp; Wellness Hotel, Květnového povstání 194</div></li>
                    
                        <li><div class="hotel suggestion-item">Park Hotel Průhonice, Uhříněveská 12, 252 43 Průhonice</div></li>
                    
                        <li><div class="hotel suggestion-item">Park Inn Hotel Prague, Svobodova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension 15, Vlkova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension 21, Podhajská pole 275</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Akat, Nádražní 42/851</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Alabastr, Školská 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Albert &amp; Residence, Na slupi 7/141</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Apartment Granit, S.K. Neumanna 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Berta, Starochodovská 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Camp Prager, V Ladech 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension City Center &amp; L`Opera, Ječná 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Corto Old Town, Havelská 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension CubeNeumann, S.K.Neumanna 944/31</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Dientzenhofer, Nosticova 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Dobroucky, Prosecka 83/96</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Easy Journey, Plzeňská 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Europa, K Vetrolamu 668/22</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Filip, Pod stadiony 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Hanspaulka, Za Hanspaulkou 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Hattrick, Záběhlická 136/53</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Julie, Karlštejnská 494/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension KAREL, Muteninska 1119/23</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Karnet, Nad Rokoskou 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Kern, Jinonická 1185/50</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Kosire, Jinonická 732/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Lucie, Klapkova 53</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Mašek Praha, S.K.Neumanna 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Milk Inn, Českobrodská 1174</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Natur, Rudoltická 869</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Nika, Na Krčské stráni 52</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Paldus, Jinočanská 25</div></li>
                    
                        <li><div class="hotel suggestion-item">pension Patanka, Patanka 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Platan, Revolucni 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Pohádka Praha, Valdštejnská 288/4a</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Prague City, Stitneho 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Řepy, Ke Kaménce 93/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Sparta, Ústecká 153</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Tara, Havelská 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Trojská, Trojská 375/157</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension U Lilie, Liliová 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Unie, Těšnov 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Veronika, Na Jezerce 29/632</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Vila Lucie, Krčská 37</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Vila Šárka, Pod Cihelnou 5/501</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Villa Marit, Úvalská 3186/8e</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Zličín, U Zličína 198/22, Prague, 155 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension-Apartmany Sabo, Lipnicka 349/30</div></li>
                    
                        <li><div class="hotel suggestion-item">Pentahotel Prague, Sokolovská 112</div></li>
                    
                        <li><div class="hotel suggestion-item">Penthouse Apartment in Vinohrady, Chodska 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Penthouse in center of the Old town, Dušní 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion &amp; Hostel Sofi, Jeremenkova 304/55</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion a Restaurace Simanda, Simanovska 47</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Alča, Národních hrdinů 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Ariane, K Hrnčířům 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Barbar, U Národní galerie 474</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Bonsai, Nesmericka 398</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Chaloupka, Nad Hradnim vodojemem 83</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Dana Troja, Trojská 129</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Eliška, Novosuchdolská 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Euroclub Praha, Zlenická 1295/70</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion G - Centrum, Chodovská 3137/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Manes, Manesova 46</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Méttis, Krameriova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Palouček, Petra Rezka 1723/1a</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Rodos - Café, Náchodská 756/90</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Rohožník, Malešovská 1642</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Rokytka, K Uhříněvsi 55</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Schneider, Hekova 9/134</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Sprint, Cukrovarnická 64</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion U Čejpu, U strže 1, Prague, 140 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion U sv. Kryštofa, Záběhlická 72/60</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Vyšohlíd, Na Dolnici 954/37 - Stodůlky</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Zderaz, Na Zderaze 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Perfect Days Apartments Karlin, Křižíkova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Perfect Days Apartments, Klimentská 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Perfect Days Old Town, Templová 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Perla Hotel, Perlova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Petrská Apartment, Petrská 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Picasso Apartments, Václavské Náměstí 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Plaza Alta Hotel, Ortenovo Nam. 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Pod Slovany Apartment, Pod Slovany 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Pompo Prague Apartments, Charvátova 39/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Post Hostel Prague, Moravská 1530/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Praga Apartment Tyrsova, Tyršová 1838/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Pragapart Apartment , Krakovská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague 01 Apartments, Nekazanka 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Apart Hotel, Ve Smečkách 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague- Apartment Pavla Beneše, Pavla Beneše 759/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Apartment Solutions, Truhlářská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Apartment, Dittrichova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Apartments, Na perštyně 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague AppArt, Soukenicka 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Art Visa Krakovska, Krakovska 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Boutique Residence, Jilska 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Castle Design Apartment, Na Valech 289/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Castle Romantic Apartments, U Lužického semináře 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague center Apartments, Kroftova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Center Apartments, U Lužického semináře 88/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Central Exclusive Apartments, Elisky Krasnohorske 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Central Residence, Spalena 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Centre Apartments &amp; Hostel, Odboru 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague City Hall Apartments, Veleslavinova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague City Stay Jagellonská, 11 Jagellonská, Prague, 130 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague City Stay Jagellonská, 11 Jagellonská, Prague, 130 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague City Stay Jagellonská, 11 Jagellonská, Prague, 130 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Golden Age Hotel, Havelská 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Holiday Apartments, Janackovo Nabrezi 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Hostel Cathedral, Francouzská 6/80</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Life Masna, Masna 15, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Loreta Residence, Loretánské náměstí 102/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Marriott Hotel, V Celnici 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Museum Apartments, Mezibranska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Old Street Apartments, Staroměstské náměstí 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Old Town Studio #869, Bílkova 869/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Promenade Apartment, Anny Letenské 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Royal Apartments, Vlašská 356/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Saints Apartments, Korunní 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Siesta Apartments, Tynska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague studio, Sazovicka 454/13, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Trendy- Apartments, Soukenická 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Vyšehrad Castle Apartments, Vyšehradská 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague-1 Hostel, Mezibranska 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague4you Apartment, Hybernska 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Praha Feel Good Apartment, Mezibranská 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Premier Apartments Wenceslas Square, Vaclavske namesti 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Premium Prague Apartments, U milosrdných 804/14</div></li>
                    
                        <li><div class="hotel suggestion-item">President Hotel, Náměstí Curieových 100/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Prestige Apartments, Navratilova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Primavera Apartments, Paťanka 2722/11b</div></li>
                    
                        <li><div class="hotel suggestion-item">Prokop Boutique Hotel, Cimburkova 414/28, Prague 130 00</div></li>
                    
                        <li><div class="hotel suggestion-item">PVH Charming Flats Horejsi nabrezi, Hořejší nábřeží 25</div></li>
                    
                        <li><div class="hotel suggestion-item">PVH Charming Flats Hroznova, Hroznova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">PVH Charming Flats Janackovo, Janáčkovo nábřezí 49</div></li>
                    
                        <li><div class="hotel suggestion-item">PVH charming flats Odboru, Odboru 10</div></li>
                    
                        <li><div class="hotel suggestion-item">PVH Charming Flats Vlasska, Vlasska 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Pytloun Boutique Hotel Prague, Václavské nám. 779/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Quadrio Bedroom Central Apartment, Spálená 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Quite Central Apartment, Cimburkova 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Radisson Blu Alcron Hotel, Stepanska 40</div></li>
                    
                        <li><div class="hotel suggestion-item">Ramada Airport Hotel Prague, K Letišti - Terminál 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Ramada Prague City Centre, Václavské nám. 41</div></li>
                    
                        <li><div class="hotel suggestion-item">Ramasun, Čestmírova 217/22</div></li>
                    
                        <li><div class="hotel suggestion-item">Ramova Apartment, Rámová 939/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Red &amp; Blue Design Hotel Prague, Holeckova 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Red Lion Hotel, Nerudova 41</div></li>
                    
                        <li><div class="hotel suggestion-item">Regina Apartmens, Dalimilova 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence 3Domy, Křižíkova 44</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence 7 Angels, Jilská 20, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Agnes, Haštalská 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Bene,  Dlouhá 48/721, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Bene, Dlouhá 48/721</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Bijou de Prague, Nerudova 43</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Bílkova, Bílkova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Bologna, Konviktska 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Brehova, Břehová 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Elema, Zahrebska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Eliska Tower, Freyova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Green Lobster, Nerudova 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Invalidovna, U Sluncove</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence James House, Újezd 428/34, Prague, 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Jecna, Jecna 35</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Jeronymova, Jeronýmova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Karlin, Křižíkova 71, Praha, Prague, 180 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Karlova, Karlova 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Karolina, Karoliny Svetle 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Konvi, Konviktská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Kostnické Square, Kostnické náměstí 1, 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Kralovský Vinohrad, Šmilovského 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Leon D'Oro, Havelska 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Masna, Masna 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Pinkas Prague, Kremencova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Římská 45, Rimska 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Rybna, Rybna 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Tabor, Taboritska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Three Golden Crowns, Malostranské nám. 260/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Thunovska, Thunovska 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Týnská, Týnská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence U Bílého bažanta, Karolíny Světlé 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence U Černého Orla, Mostecka 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence U Malvaze, Karlova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence U Mecenáše, Malostranské nám. 261/10, Prague, 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence V Tůních, V Tůních 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Vinohrad, Zizkovo nam. 1152/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Viola, Hybernska 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Vitkov, Rohačova 37</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Vlašská, Vlašská 353/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Vocelova, Vocelova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Vysta, U Výstaviště 764/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Retezova Apartments, Liliova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Retro Flat Apartment, Zborovska 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Revidence Apartments Lucas, Lukášova 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Revidence Apartments Viklef, Viklefova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence &amp; Wellness Blatov, Starokolínská 306</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Břevnov, Fastrova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Davids, Křižíkova 9/267</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Dlouha, Dlouhá 740/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Dvořák, Na Kampě 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Emmy, K Zelené Louce 2A</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Italská, Praha 2, Italská 2561</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Kajetánka, Na Petynce 23a</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Vítkova, Vítkova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Vyšehrad, Lumírova 1715/33</div></li>
                    
                        <li><div class="hotel suggestion-item">Reznicka Apartments, Reznicka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Richie Apartman, Frantiska Divise 1437/54N</div></li>
                    
                        <li><div class="hotel suggestion-item">Ritchie's Hostel &amp; Hotel, Karlova 9 and 13</div></li>
                    
                        <li><div class="hotel suggestion-item">River Diamont Apartment, Rohanské nábřeží 657/7</div></li>
                    
                        <li><div class="hotel suggestion-item">River View Residence, Naplavni 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Riverfront Apartment, Janáčkovo nábřeží 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Riverside Apartment, Janáčkovo nábřeží 35</div></li>
                    
                        <li><div class="hotel suggestion-item">Riverview Apartments Prague, Janáčkovo nábřeží 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Rohan Boat Prague, U Libeňského Mostu 1, 180 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Romantik Hotel U Raka, Černínská 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Bellezza Apartments, Legerova 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Boutique Residence, Retezova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Court Apartments, Legerova 356/48</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Court Hotel, Wenzigova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Palace Prague, Letenska 594/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Plaza Hotel, Rimska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Prague Apartment Celakovskeho Sady, Čelakovského sady 434/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Prague City Apartments, Petřínská 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Residence Ungelt, Tyn 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Road Residence, Karlova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Route apartment, Mostecká 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Route Mansions, Husova 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Route Residence Prague, Celetná 592/23</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Apartment Balbinova, Balbinova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Apartment Charles Bridge, Smetanovo nábřeží 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Apartment Cimburkova, Cimburkova 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Apartment Dlouha, Dlouha 44</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Apartment with Garage, Prokopova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Blodkova Apartment, Blodkova 1280/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Havelska Apartment, Havelska 524/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Hradební Apartment, Hradební 759/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Jindrisska apartment, Jindrisska 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Jungmannovo apartment, Jungmannovo namesti 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Navratilova apartment, Navratilova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Olivova apartment, Olivova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Opatovická Apartment, Opatovicka 1661/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Opletalova apartment, Opletalova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Řeznická Apartment, Řeznická 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Taboritska apartment, Taboritska 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Vinohradska apartment, Vinohradska 403/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Zitna apartment, Ve smeckach 1766/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruttera House with garden, Římovská 993/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Růže Apartments, Lidická 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Rybna 9 Apartments, Rybna 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Rybna Deluxe  Apartment, Rybna 29</div></li>
                    
                        <li><div class="hotel suggestion-item">RyeRooms, Žitná 560/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Salvator Boutique Hotel, Zitna 1656/45</div></li>
                    
                        <li><div class="hotel suggestion-item">Salvator Superior Apartments, Revoluční 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Salvatorska Street Apartment, Salvatorska 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Saturn 11 Apartment, Opatovická 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Saturn 5, Vinohradská 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Savic Hotel, Jilska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Selinor Old Town Apartments, Štupartská 9</div></li>
                    
                        <li><div class="hotel suggestion-item">SG1 Hostel, Malostranske Namesti 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Sheraton Prague Charles Square Hotel, Zitna 8,</div></li>
                    
                        <li><div class="hotel suggestion-item">Sir Toby's Hostel, Delnicka 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Small Luxury Palace Residence, Nerudova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Smetana Hotel, Karoliny Světlé 208/34 11000 Praha 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Smíchov Apartment, Radlicka 70</div></li>
                    
                        <li><div class="hotel suggestion-item">Sokolska Youth Hostel, Sokolska 1792/52</div></li>
                    
                        <li><div class="hotel suggestion-item">Sportareál Satalice, U Arborky 397</div></li>
                    
                        <li><div class="hotel suggestion-item">Sporthostel Scandinavia, Drnovska 43/19</div></li>
                    
                        <li><div class="hotel suggestion-item">Squash penzion Hájek, Pod přehradou 18</div></li>
                    
                        <li><div class="hotel suggestion-item">St George hotel, Tyrsova 2, Praha 2</div></li>
                    
                        <li><div class="hotel suggestion-item">St. Jacob Apartment, Jakubská 670/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Stag Party Old Town Apartment, Ve Smečkách 31</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Angel, Na Belidle 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Apartment Za Poříčskou Bránou, Za Poříčskou bránou 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Apartments, Praha ul. Terronska 742/55</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Central Park, Ke Kapslovně 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Chelčického, Chelčického 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Freyova, Freyova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Karlův Most, Křížovnické náměstí 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Malesice Tower, Pocernicka 699</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Molákova, Molákova 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Obecniho Dvora, U Obecniho Dvora 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Polská, Polská 1352/32</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Řehořova, Řehořova 27/44</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio U Akademie, U Akademie 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Usedlost Salabka</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Winterovi, Mostecká 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio with garden, Na ´bočí 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Studios Jaurisova, Jaurisova 515/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Studios Spálená, Spálená 47</div></li>
                    
                        <li><div class="hotel suggestion-item">Suite Ohrada, Na Hvizdalce 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Suite Prague Apartment, Vladislavova 1587/24</div></li>
                    
                        <li><div class="hotel suggestion-item">Sunset Aparthotel, Jana Masaryka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Sunset Hostel, Reznicka 656/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Temporary Guest House, Velkopřevorské nám. 490/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Terrace Studio Double, Za poříčskou branou 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Terrace Studio One, U Nemocenské Pojišťovny 2</div></li>
                    
                        <li><div class="hotel suggestion-item">The Apartment House Opatovicka, Opatovicka 14</div></li>
                    
                        <li><div class="hotel suggestion-item">The Art House, Krizovnicka 12</div></li>
                    
                        <li><div class="hotel suggestion-item">The Augustine Hotel, Letenska 12/33</div></li>
                    
                        <li><div class="hotel suggestion-item">The Balbin hotel pension, Balbinova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">The Castle Apartments, Letenská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">The Charles Hotel, Josefska 1, 118 00 Prague 1</div></li>
                    
                        <li><div class="hotel suggestion-item">The Classic One Apartment Prague, Soukenicka 7</div></li>
                    
                        <li><div class="hotel suggestion-item">The Emblem Hotel, Platnerska 19</div></li>
                    
                        <li><div class="hotel suggestion-item">The Family's Nest, 5 Balbinova str.</div></li>
                    
                        <li><div class="hotel suggestion-item">The Golden Scissors, Na Kampe 494/6, Prague 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">The Golden Wheel, Nerudova 28</div></li>
                    
                        <li><div class="hotel suggestion-item">The Good King Wenceslas Apartment, Štěpánská 59</div></li>
                    
                        <li><div class="hotel suggestion-item">The Granary, Bohdanečská 259/1, 190 17 Praha-Vinoř-Kbely</div></li>
                    
                        <li><div class="hotel suggestion-item">The Grand Mark, Hybernská 12, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">The ICON Hotel &amp; Lounge, V Jámě 6</div></li>
                    
                        <li><div class="hotel suggestion-item">The Iron Gate Hotel &amp; Suites, Michalska 19</div></li>
                    
                        <li><div class="hotel suggestion-item">The Karoline Apartment, Karolíny Světlé 23</div></li>
                    
                        <li><div class="hotel suggestion-item">The Loft, Italská 1202/12</div></li>
                    
                        <li><div class="hotel suggestion-item">The Mark Luxury Hotel Prague, Hybernská 12</div></li>
                    
                        <li><div class="hotel suggestion-item">The Nicholas Hotel Residence, Malostranske namesti 5</div></li>
                    
                        <li><div class="hotel suggestion-item">The Old Town Luxury Hideaway Apartment, U Obecního dvora 6</div></li>
                    
                        <li><div class="hotel suggestion-item">The Old town's apartment, Dlouhá 730/35</div></li>
                    
                        <li><div class="hotel suggestion-item">The Palace Suites and Apartments, Resslova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Theatre Residence, Opatovická 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Theatrino Hotel, Borivojova 53</div></li>
                    
                        <li><div class="hotel suggestion-item">Three Crowns Hotel, Cimburkova 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Three Storks, Valdstejnske namesti 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Three-Bedroom Apartment Rosa,</div></li>
                    
                        <li><div class="hotel suggestion-item">Three-Bedroom Apartment St.Giles,</div></li>
                    
                        <li><div class="hotel suggestion-item">Tomasska Apartments, Tomasska 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Top Hotel Prague, Blazimska 1781/4</div></li>
                    
                        <li><div class="hotel suggestion-item">TopApartmany, Polská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Travel Hotel Prague, Bendlova 154</div></li>
                    
                        <li><div class="hotel suggestion-item">Travellers Hostel Praha, Dlouha 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Trendy downtown apartment DIY, Jeronýmova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Twist Prague, Jana Masaryka 40</div></li>
                    
                        <li><div class="hotel suggestion-item">Tyn Church Apartment, Týnská Ulička 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Tyn Courtyard, Tyn 643, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Tyn Yard Residence, Týn 637/7 110 00 Praha, Staré Město</div></li>
                    
                        <li><div class="hotel suggestion-item">U Bílé Lilie, 4 Jánský vršek, Prague, 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">U Cerneho Medveda- At The Black Bear, Tyn 6</div></li>
                    
                        <li><div class="hotel suggestion-item">U Cervene zidle - Red Chair Hotel, Liliova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">U Kapra Apartments, Karlova 48</div></li>
                    
                        <li><div class="hotel suggestion-item">U Medvidku-Brewery Hotel, Na Perstyne 7</div></li>
                    
                        <li><div class="hotel suggestion-item">U Patrona Apartment, Dražického náměstí 60/4</div></li>
                    
                        <li><div class="hotel suggestion-item">U Šventika, Mezibranska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">U Zeleného jalovce, Jalovcová 3</div></li>
                    
                        <li><div class="hotel suggestion-item">U Zlate Podkovy, Nerudova 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Ubytovna u Trajců, Vyšehradská 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Union Hotel Prague, Ostrcilovo namesti 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Unitas Hotel, Bartolomejska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">University hotel VSE, Koněvova 93/196</div></li>
                    
                        <li><div class="hotel suggestion-item">Urban Creme, Na Porici 48 110 00 Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Usedlost Kotlářka,  Kotlářka 115, 150 00 Prague 5-Košíře</div></li>
                    
                        <li><div class="hotel suggestion-item">V Lesíčku Residence, V lesíčku 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Valcha Apartments, Bělohorská 105</div></li>
                    
                        <li><div class="hotel suggestion-item">Ventana Hotel Prague, Celetna 7 / 600, Entrance Stupartska 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Vienna House Diplomat Prague, Evropská 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Vienna House Easy Chopin Prague, Opletalova 960/33, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Viktoria Zizkov Penthouse, Krasova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Vila Josefina, Nad Borislavkou 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Vila Krocinka, Obvodová 527/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Vila Lanna, V Sadech 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Vila Mila, Kralovícka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Vila Zahrada, Ve Žlíbku 1885/76</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Adam, Doudova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Andy, U Šípků 1029/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Betty, Kralovicka 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Bohemia, K Vidouli 831</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Grebovka/CEELI Institut/ roh Havlíčkovy sady a Rybalkova/Havlíčkovy sady 58/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa In A Bio Garden, U Hranic 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Jinonice, Puchmajerova 604/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Michle, Pod Sychrovem II 795 /47</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Milada, V Sareckem udoli 466/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa na Vinici, Dolnokrčská 304/39</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Olivia, Osická 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Révová Praha, Révová 759/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa St. Tropez, Ruzynska 197/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Venus, V Holešovičkách 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Voyta Hotel &amp; Restaurant, K Novému dvoru 124/54</div></li>
                    
                        <li><div class="hotel suggestion-item">Vinohradsky dum, Legerova 758/60</div></li>
                    
                        <li><div class="hotel suggestion-item">Vintage Design Hotel Sax, Jansky Vrsek 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Visit in Prague II, Londynska 53</div></li>
                    
                        <li><div class="hotel suggestion-item">Visit in Prague, Husitská 89/41</div></li>
                    
                        <li><div class="hotel suggestion-item">Vítězná Apartment, Vitezna 559/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Vladislav City Centre Apartments, Vladislavova 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Vlkova Palace, Vlkova street 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Vltava Penthouse, Náplavní 2</div></li>
                    
                        <li><div class="hotel suggestion-item">VN17 Apartments, Václavské náměstí 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Volcano Spa Hotel, K sopce 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Vysehrad Apartment, Na Pankráci 995/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Vyšehrad Castle Suite, Neklanova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Wallenstein Garden Apartments, Letenská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Wandering Praha B&amp;B, Slezská 1357/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Waterfront Apartment, Rohanské nábřeží 657/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Welcome Hostel Praguecentre, Žitná 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Wellness &amp; SPA boutique Hotel pod Lipkami,  Pod Lipkami 8, Prague 150 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Wellness Hotel Step, Malletova 1141</div></li>
                    
                        <li><div class="hotel suggestion-item">Wenceslas Square Apartment, Sokolská 59</div></li>
                    
                        <li><div class="hotel suggestion-item">Wenceslas Square Hotel, Mezibranská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Wenceslas Square Loft, Krakovska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Wenceslas Square Terraces, Václavské náměstí 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Wenceslas square TOP apartment, Václavské náměstí 23</div></li>
                    
                        <li><div class="hotel suggestion-item">White House, Markova 10/594</div></li>
                    
                        <li><div class="hotel suggestion-item">Wine Pension Prague, Hubičkova 1396/27</div></li>
                    
                        <li><div class="hotel suggestion-item">Wonderful apartment in Vinohrady, Korunni 65</div></li>
                    
                        <li><div class="hotel suggestion-item">Yesplace Prague, Soukenická 2082/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Your Home in Prague Apartment, Na Poříčí 1894/46</div></li>
                    
                        <li><div class="hotel suggestion-item">Zatecka N°14, Žatecká 14, Prague, 110 00, Czech Republic</div></li>
                    
                        <li><div class="hotel suggestion-item">Zizkov Tower 2, Borivojova 103</div></li>
                    
                        <li><div class="hotel suggestion-item">Zlata Brana Apartments, Husova 242/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Zlatý kůň Golden Horse, Husova 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Zvonařka Apartment, U Zvonařky 2536/1d</div></li>
                    
                        <li><div class="hotel suggestion-item">Zvonařkou Apartment, Pod Zvonařkou 1</div></li>

                        <li class="list-select" style="display: none;"><div class="hotel suggestion-item">Выбрать...</div></li>

                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="departure-hotels-continue" data-dismiss="modal">Продолжить</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-departure-cities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Write custom address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="departure-address" class="control-label label-modal">Choose your city</label>
                    
                    <div id="cities-list">
                    <div id="departure-cities-list">
                        <input class="list-search list-search-cities" placeholder="Search for your city" />
                        <ul class="list">

                        <li><div class="city suggestion-item">Auschwitz Memorial (Oswiecim)</div></li>
                    
                        <li><div class="city suggestion-item">Baden-Baden</div></li>
                    
                        <li><div class="city suggestion-item">Benesov</div></li>
                    
                        <li><div class="city suggestion-item">Berlin</div></li>
                    
                        <li><div class="city suggestion-item">Beroun</div></li>
                    
                        <li><div class="city suggestion-item">Blatna</div></li>
                    
                        <li><div class="city suggestion-item">Brandýs nad Labem-Stará Boleslav</div></li>
                    
                        <li><div class="city suggestion-item">Bratislava</div></li>
                    
                        <li><div class="city suggestion-item">Brehyne-Pecopala</div></li>
                    
                        <li><div class="city suggestion-item">Brno</div></li>
                    
                        <li><div class="city suggestion-item">Brno Airport</div></li>
                    
                        <li><div class="city suggestion-item">Budapest</div></li>
                    
                        <li><div class="city suggestion-item">Ceska Lipa</div></li>
                    
                        <li><div class="city suggestion-item">Ceske Budejovice</div></li>
                    
                        <li><div class="city suggestion-item">Český Krumlov</div></li>
                    
                        <li><div class="city suggestion-item">Chodov (Karlovy Vary)</div></li>
                    
                        <li><div class="city suggestion-item">Chomutov</div></li>
                    
                        <li><div class="city suggestion-item">Darkov Spa (Lazne Darkov)</div></li>
                    
                        <li><div class="city suggestion-item">Doksy</div></li>
                    
                        <li><div class="city suggestion-item">Dolni Dvoriste</div></li>
                    
                        <li><div class="city suggestion-item">Dresden</div></li>
                    
                        <li><div class="city suggestion-item">Frankfurt</div></li>
                    
                        <li><div class="city suggestion-item">Frantiskovy Lazne</div></li>
                    
                        <li><div class="city suggestion-item">Görlitz</div></li>
                    
                        <li><div class="city suggestion-item">Hallstatt</div></li>
                    
                        <li><div class="city suggestion-item">Hamburg, Germany</div></li>
                    
                        <li><div class="city suggestion-item">Harrachov</div></li>
                    
                        <li><div class="city suggestion-item">High Jump Hříměždice</div></li>
                    
                        <li><div class="city suggestion-item">Hluboká nad Vltavou</div></li>
                    
                        <li><div class="city suggestion-item">Holašovice village</div></li>
                    
                        <li><div class="city suggestion-item">Hořovice / Beroun</div></li>
                    
                        <li><div class="city suggestion-item">Hradec Králové</div></li>
                    
                        <li><div class="city suggestion-item">Ingolstadt</div></li>
                    
                        <li><div class="city suggestion-item">Innsbruck</div></li>
                    
                        <li><div class="city suggestion-item">Jablonec nad Nisou</div></li>
                    
                        <li><div class="city suggestion-item">Jachymov</div></li>
                    
                        <li><div class="city suggestion-item">Janske Lazne</div></li>
                    
                        <li><div class="city suggestion-item">Jelenia Gora</div></li>
                    
                        <li><div class="city suggestion-item">Karlovy Vary</div></li>
                    
                        <li><div class="city suggestion-item">Karlštejn</div></li>
                    
                        <li><div class="city suggestion-item">Kladno</div></li>
                    
                        <li><div class="city suggestion-item">Klatovy</div></li>
                    
                        <li><div class="city suggestion-item">Konopiště</div></li>
                    
                        <li><div class="city suggestion-item">Krakow-Poland</div></li>
                    
                        <li><div class="city suggestion-item">Kralupy nad Vltavou</div></li>
                    
                        <li><div class="city suggestion-item">Kutná Hora</div></li>
                    
                        <li><div class="city suggestion-item">Leipzig</div></li>
                    
                        <li><div class="city suggestion-item">Liberec</div></li>
                    
                        <li><div class="city suggestion-item">Linz</div></li>
                    
                        <li><div class="city suggestion-item">Litomerice</div></li>
                    
                        <li><div class="city suggestion-item">Litomysl</div></li>
                    
                        <li><div class="city suggestion-item">Litvinov</div></li>
                    
                        <li><div class="city suggestion-item">Loucen</div></li>
                    
                        <li><div class="city suggestion-item">Luzec / Karlovy Vary / SPA Hotel Zámek Luzec </div></li>
                    
                        <li><div class="city suggestion-item">Marianske Lazne</div></li>
                    
                        <li><div class="city suggestion-item">Mcely</div></li>
                    
                        <li><div class="city suggestion-item">Melnik</div></li>
                    
                        <li><div class="city suggestion-item">Milovice</div></li>
                    
                        <li><div class="city suggestion-item">Milovice - Let It Roll</div></li>
                    
                        <li><div class="city suggestion-item">Mlada boleslav</div></li>
                    
                        <li><div class="city suggestion-item">Most</div></li>
                    
                        <li><div class="city suggestion-item">Munich</div></li>
                    
                        <li><div class="city suggestion-item">Nelahozeves</div></li>
                    
                        <li><div class="city suggestion-item">Nurnberg</div></li>
                    
                        <li><div class="city suggestion-item">Nymburk</div></li>
                    
                        <li><div class="city suggestion-item">Olomouc</div></li>
                    
                        <li><div class="city suggestion-item">Ondrejov</div></li>
                    
                        <li><div class="city suggestion-item">Ostrava</div></li>
                    
                        <li><div class="city suggestion-item">Pardubice</div></li>
                    
                        <li><div class="city suggestion-item">Pardubice Airport</div></li>
                    
                        <li><div class="city suggestion-item">Passau</div></li>
                    
                        <li><div class="city suggestion-item">Pec pod Snezkou</div></li>
                    
                        <li><div class="city suggestion-item">Pilsen (Plzeň)</div></li>
                    
                        <li><div class="city suggestion-item">Pisek</div></li>
                    
                        <li><div class="city suggestion-item">Podebrady</div></li>
                    
                        <li><div class="city suggestion-item">Poznaň</div></li>
                    
                        <li><div class="city suggestion-item">Prachatice</div></li>
                    
                        <li><div class="city suggestion-item">Prerov</div></li>
                    
                        <li><div class="city suggestion-item">Pruhonice</div></li>
                    
                        <li><div class="city suggestion-item">Rakovnik</div></li>
                    
                        <li><div class="city suggestion-item">Regensburg</div></li>
                    
                        <li><div class="city suggestion-item">Ricany</div></li>
                    
                        <li><div class="city suggestion-item">Rokytnice nad Jizerou</div></li>
                    
                        <li><div class="city suggestion-item">Rozvadov</div></li>
                    
                        <li><div class="city suggestion-item">Rychnov nad Kneznou</div></li>
                    
                        <li><div class="city suggestion-item">Salzburg</div></li>
                    
                        <li><div class="city suggestion-item">Spindleruv Mlyn</div></li>
                    
                        <li><div class="city suggestion-item">Stolpen 01833 Stolpen, Pirnaer Landstr. 24</div></li>
                    
                        <li><div class="city suggestion-item">Szklarska Poręba</div></li>
                    
                        <li><div class="city suggestion-item">Telc</div></li>
                    
                        <li><div class="city suggestion-item">Teplice</div></li>
                    
                        <li><div class="city suggestion-item">Terezin</div></li>
                    
                        <li><div class="city suggestion-item">Trebic</div></li>
                    
                        <li><div class="city suggestion-item">Trebon</div></li>
                    
                        <li><div class="city suggestion-item">Trinec</div></li>
                    
                        <li><div class="city suggestion-item">Trutnov</div></li>
                    
                        <li><div class="city suggestion-item">Turnov</div></li>
                    
                        <li><div class="city suggestion-item">Usti nad Labem</div></li>
                    
                        <li><div class="city suggestion-item">Velke Pavlovice</div></li>
                    
                        <li><div class="city suggestion-item">Velke Popovice</div></li>
                    
                        <li><div class="city suggestion-item">Vienna</div></li>
                    
                        <li><div class="city suggestion-item">Vienna International Airport, Schwechat</div></li>
                    
                        <li><div class="city suggestion-item">Vilshofen an der Donau</div></li>
                    
                        <li><div class="city suggestion-item">Vlasim</div></li>
                    
                        <li><div class="city suggestion-item">Vysoky Chlumec</div></li>
                    
                        <li><div class="city suggestion-item">Walbrzych</div></li>
                    
                        <li><div class="city suggestion-item">Warsaw</div></li>
                    
                        <li><div class="city suggestion-item">Wroclaw</div></li>
                    
                        <li><div class="city suggestion-item">Zelezna Ruda</div></li>
                    
                        <li><div class="city suggestion-item">Zlin</div></li>
                    
                        <li><div class="city suggestion-item">Zurich</div></li>
                        </ul>
                    </div>
                    </div>

                    <p>Write an address of location...</p>
                    <input type="text" name="custom_citie_address" id="custom_citie_address" class="form-control" placeholder="Write an address">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="departure-cities-continue" data-dismiss="modal">Продолжить</button>
            </div>
        </div>
    </div>
</div>
<!-- -->
<!-- Modals -->
<div class="modal fade" id="modal-destination-address" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Write custom address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="destination-address" class="control-label label-modal">Напишите адрес местонахождения</label>
                    <input name="destination_address" type="text" class="form-control input-modal" id="destination-address">
                </div>
                <div class="form-group">
                    <div id="home-order-transfer-map-destination-address" class="home-order-transfer-map-address"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="destination-address-continue" data-dismiss="modal">Продолжить</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-destination-station" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Write custom address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="departure-address" class="control-label label-modal">Выбирете станцию...</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="destination_station" id="destination_station1" value="Zličín bus station">
                        <label class="form-check-label" for="destination_station1">
                            Zličín bus station
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="destination_station" id="destination_station2" value="Florenc Central bus station">
                        <label class="form-check-label" for="destination_station2">
                            Florenc Central bus station
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="destination_station" id="destination_station3" value="Černý Most bus station">
                        <label class="form-check-label" for="destination_station3">
                            Černý Most bus station
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="destination_station" id="destination_station4" value="Na Knížecí bus station">
                        <label class="form-check-label" for="destination_station4">
                            Na Knížecí bus station
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="destination_station" id="destination_station5" value="Holešovice bus station">
                        <label class="form-check-label" for="destination_station5">
                            Holešovice bus station
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="destination_station" id="destination_station6" value="Hlavní nádraží / Main Train Station / Wilsonova 300/8">
                        <label class="form-check-label" for="destination_station6">
                            Hlavní nádraží / Main Train Station / Wilsonova 300/8
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="destination_station" id="destination_station7" value="Holešovice vlakové nádraží / Holesovice train station / Partyzánská">
                        <label class="form-check-label" for="destination_station7">
                            Holešovice vlakové nádraží / Holesovice train station / Partyzánská
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="destination_station" id="destination_station8" value="Masarykovo nádraží / Masarykovo train station / Havlíčkova">
                        <label class="form-check-label" for="destination_station8">
                            Masarykovo nádraží / Masarykovo train station / Havlíčkova
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="destination_station" id="destination_station9" value="Smíchovské nádraží / Smichov train station / Nádražní">
                        <label class="form-check-label" for="destination_station9">
                            Smíchovské nádraží / Smichov train station / Nádražní
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="destination-station-continue" data-dismiss="modal">Продолжить</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-destination-hotels" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Write custom address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="departure-address" class="control-label label-modal">Choose your hotel or address</label>
                    
                    <div id="hotels-list">
                        <div id="destination-hotels-list">
                        <input class="list-search list-search-hotels" placeholder="Search for your hotel" />
                        <ul class="list">
                            
                        <li><div class="hotel suggestion-item">1.Republic Hotel, V Tunich 1625/8</div></li>
                    
                        <li><div class="hotel suggestion-item">1Bed4U 2Hostel,Lublanska 800/65</div></li>
                    
                        <li><div class="hotel suggestion-item">4 Arts Suites, Rybna 650/3</div></li>
                    
                        <li><div class="hotel suggestion-item">4 Bears House, Cimicka 150a</div></li>
                    
                        <li><div class="hotel suggestion-item">7 Tales Suites, Karlova 21, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">987 Design Prague Hotel, Senovazne Namesti 15</div></li>
                    
                        <li><div class="hotel suggestion-item">A &amp; O Prague Rhea, V Úžlabině 19, 108 00 Strašnice</div></li>
                    
                        <li><div class="hotel suggestion-item">A&amp;O Prague Metro Strizkov, Děčínská 1, Prague, 180 00</div></li>
                    
                        <li><div class="hotel suggestion-item">AA Pension Hoffmann, Na dolnici 35</div></li>
                    
                        <li><div class="hotel suggestion-item">A-Apartments Harley Style, Václavské náměstí 36, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">ABE Hotel, Legerova 24, Prague, 120 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Abri Hotel, Jana Masaryka 36, Prague, 12000</div></li>
                    
                        <li><div class="hotel suggestion-item">Absolutum Boutique Hotel, Jablonského 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Academic Hotel &amp; Congress Centre, Tyršovo nám. 2222, 252 63 Roztoky u Prahy</div></li>
                    
                        <li><div class="hotel suggestion-item">Adalbert Ecohotel, Markétská 28/1, Prague, 169 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Agricola, Rostovska 25, Prague, 101 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Ahoy hostel Prague, na Perstyne 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Ai Quattro Angeli, Opatovická 11, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Alchymist Grand Hotel and Spa, Tržiště 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Alchymist Nosticova Palace, Nosticova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Alchymist Prague Castle Suites, Snemovni 164/8, Prague 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Alqush Downtown Hotel, legerova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Ambiance  Hotel, Tyrsova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Ametyst Hotel Praha, Jana Masaryka 11, Prague, 120 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Amigo City Centre Hotel, Legerova 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Anděl Apartments Praha, Nádražní 114, Prague, 15000</div></li>
                    
                        <li><div class="hotel suggestion-item">Anděl Apartments Praha, Nádražní 114, Prague, 15000</div></li>
                    
                        <li><div class="hotel suggestion-item">Andel City Center, Plzeňská 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Andel’s Suites Apartments, Stroupeznickeho 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Andel's by Vienna House Prague, Stroupeznickeho 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Anenská Loft Apartments, Anenska 220</div></li>
                    
                        <li><div class="hotel suggestion-item">Angel Apartment with Garage, Karla Engliše 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Angel Apartments, Nádražní 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Angelo by Vienna House Prague, Radlická 3216/1G, Anděl, 150 00 Praha-Smíchov</div></li>
                    
                        <li><div class="hotel suggestion-item">Anna Hotel, Budecská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Antik City, Malá Štěpánská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Antik Hotel Prague, Dlouha 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Anyday Apartments, Sokolská 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparment Hradčanské Náměstí, Hradčanské náměstí 61/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Apart Hotel Susa, Jana Masaryka 49</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartamenty Central Park Praha, Malešická 2855/2b</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel &amp; Spa Carolline, Karolíny Světlé 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel &amp; Spa Carolline, Karolíny Světlé 20, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel Angel, Karla Englise 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel Austria Suites, Stefanikova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel City 5, Vltavska 667/11, Smichov, Prague 150 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel Davids, Biskupský dvůr 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel Lublanka, Lublanska 59</div></li>
                    
                        <li><div class="hotel suggestion-item">Aparthotel Sibelius, Jana Masaryka 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Jungmannova, Jungmannova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Kaiser, NÁRODNÍ 17/981</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Kristýna, Nuselská 128</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Letná, Letohradská 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Malá strana, Všehrdova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartman Musilkova, Musílkova 236/46</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Na Kampě, Na Kampě 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartman Prague, Nad Jezem 0812</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartman Pstrossova, Pštrossova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Speranza, Národní 981/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartman Stare Mesto, Anenska 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartman u Hradcan, Heleny Malířové 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmán Wuchterlova, Wuchterlova 566/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmant Grossmann, Politických vězňů 14, Pasáž Jiřího Grossmanna</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány a hostel SKLEP, Seifertova 53</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Bára, Ke Smíchovu 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Letná, Veletržní 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmany Machek, Záhřebská 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Národní, Národní 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmany Olita, Vaclavske namesti 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Salabka, K Bohnicím 2/57</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Šárka, Ve Skalách 2597/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Simona, Hrubinova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Železná, Železná 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartmány Zlatý Anděl, Staropramenná 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment - hotels in Prague 01, Karoliny Svetle 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment - The Modern Flat, Ve Smeckach 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment 5.Května, 5.května 68</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Abricos, Dlouha 715/38</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Alena, Zborovská 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Alice, Soukenická 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Alina, Pstrossova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Amadeus, Uhelný trh 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Amandment, Kamenická 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Anděl Tomáškova, Tomáškova 4, Praha 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Anna, Ve Smeckach 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment at Wenceslas Square, Ve Smeckach 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Attic Klimentska, Klimentska 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Attic Kozi, Kozí 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Attic Olivova, Olivova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Beer Spa, Masná 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Benediktska, Benediktská 687/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Benediktska, Benediktska 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Betlemska, Betlemska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Brehova, Břehova 40/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Březinova, Březinova 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Britania, Sazovicka 479/19</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Casa Olivova, Olivova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Charles Bridge - View, U Lužického semináře 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Cholupická, Cholupická 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Čkalova, V.P.Čkalova 449/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Court, Haštalská 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Dalimilova, Dalimilova 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Divoká Šárka, Ke Džbánu 27/380</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment DL centrum, Dlouha 735/25</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Dům U Černého beránka, Praha 1 - Malá Strana, Valdštejnská 150/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Dusni, Dušní 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Eliška, Freyova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Florenc, Klimentská 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment for Friends, Vlkova 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Gabriela, Nepomuckych 766/16, Praha 9 - Letnany</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Halkova, Halkova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Havanská, Havanská 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Havelska, Havelská 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Havlíčkova, Havlíčkova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Helen, Truhlarska 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Heleny Malířové, Heleny Malířové 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Hládkov,</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Hostivar, R. A. Dvorského 109</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment House - The Modern Flat, Soukenicka 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment House Anenska, Anenska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment House Troja, V Podhoří 2a</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment House Žižkov, Roháčova 18, Prague, 13000</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Hradešínská, Hradešínská 46/1830</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Hrozen, Hroznová 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Husinecká, Husinecká 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Hybernska, Hybernska 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment in historical center - Masná 15, Masná 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment in Prague Centre, Klimentska 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment in Prague, Na Krcske Strani 1442/38</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment In Prague, Říční 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Jan, Na Cihlářce 3062/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Jelinex, libocanska 836/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Jičínská, Jičínská 31/1617</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Karolina, Karolíny Světlé 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Karoliny Svetle II,</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Klamovka, Plzenska 160</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Klara 2, Šlikova 1229/46</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Klara, Vodňanského 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Konvikt, Konviktská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Korunní Dvůr, Korunní 810/104</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Kozi, Kozi 5/916</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Krakovská 5, Krakovská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Krizikova II,</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment LaNoblessa 2, Legerova 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Lea, Klimentska 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Londýnská, Londýnská 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Lublanska, Lublanska 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Lucemburská, Lucemburská 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Lužická, Lužická 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Malá Štěpánská, Malá Štěpánská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Malá Strana Petřínská, Petřínská 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Malovanka, Mládeže 1375/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Manesova, Mánesova 310/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Marilyn, Soukenická 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Masna, Masna 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Michalska, Michalská 512/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Mojmirova, Mojmírova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Myslbekova, Myslbekova 19/685</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Celne, Na Celne 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Děkance, Na Děkance 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Hrebenkach, Na Hřebenkách 3203/1a</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Hrobci, Na Hrobci 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Kozačce, Na Kozačce 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Petřinách, Na Petřinách 1905/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Valech, Na Valech 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Na Zbořenci, Na zbořenci 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Náprstkova, Náprstkova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Narodni Prague, Národní 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Natalie, Růžová 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Navratilova 16, Navratilova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment near Lesser Town, P. Švandy ze Semčic 16, Smíchov</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment near the Castle, Rooseveltova 25/400</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Nebovidská, Nebovidská 462</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Nezamyslova, Nezamyslova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Ondra, Dubečská 2365/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Osadní Prague 7, Osadní 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Ostrovskeho, Ostrovskeho 2264/33</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Parléřova 8, Parléřova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Penthouse Linhartova, Linhartova 1288/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Pod Sychrovem, Pod Sychrovem I 938/32</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prague Central, Opletalova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prague Centre, Ječná 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prague City, Pod Pramenem 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prague, Tyrsova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prokopová, Prokopová 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Prubezna, Prubezna 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Pstrossova, Pštrossova 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Radlická, Radlická 3301/68</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Reznicka, Reznicka 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Romana, Melantrichova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Ruzova, Růžová 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Rybalkova, Rybalkova 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Rybná 24, Rybná 24/716</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Saturn 6, Opletalova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Saturn 7, Masná 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Saturn 9, U Nemocenské pojišťovny 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Sedlčanská, Sedlčanská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Šeříková, Šeříková 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Slatinka, Na Slatince 3284/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Slavojova, Slavojova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Slovenská, Slovenská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Smeralova, Smeralova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Smichov, Na Neklance 3233/40</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Sochařská, Socharska 343/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Sophia, Soukenická 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Soukenicka, Soukenická 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Soukromí, Rižská 1527/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Square Havlíčkovo, Havlíčkovo náměstí 2859</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Starého Hřbitova, U Starého Hřbitova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Starkova, Stárkova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Staroměstské, Staroměstské náměstí 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Sturova, Štúrova 1701/55</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Taurus 11, Revoluční 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Tina, Petrske namesti 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Trojska, Trojská 67</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Tusarova, Tusarova 1527/38</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment U hroznu, Hroznová 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment U Muzea, Mezibranska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment U Zlaté Konvice, Melantrichova 477/20</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Újezd, Újezd / 42/452</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vinohrady, Americka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vinohrady, Korunni 1164/49</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vitkov, Kališnická 390/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vítkova, Vítkova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vrsovice, Kubánské náměstí 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Vyšehrad, Lumírova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment With Balcony Prague Center, Ve Smečkách 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment with fireplace, V dolině 1157/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Záhřebská, Záhřebská 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Žižkov Tower, Kubelikova 44</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment Žižkov, Viklefova 1811/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment-hotels RENTeGO, Ujezd 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartment-Národní 17, Národní 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Almandine, Rytířská 409/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Barbora Prague, Doudova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Betlemske Square Old Town, Betlemske namesti 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Bob, Svornosti 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Cidlinska, Cidlinska 788/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Comfort, Jungmannova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Emma, Oldřichova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Happy Days, Husitska 41</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Happy Life Praha, Mala Stepanska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Hollareum, Soukenická 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments JB, Kochanova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Jeronymova, Jeronýmova 750/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Jiránkova Vila, Mezitraťová 343/26</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Jizera, Václavské náměstí 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Katarina, Celakovskeho sady 434/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Kolej Vltava, Chemická 953</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Krakovská 18, Krakovská 18/1339</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Krasova, Krasova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments LENKA, Václavské náměstí 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Letna, Františka Křížka 460/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Lux Prague, V Zahradach 802/23</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments MG, Nuselská 159/114</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Mikovec, Mikovcova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Mlynářská 4, Mlynářská 1361/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Nademlejnská, Nademlejnská 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments near beautiful garden, Na kozacce 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Old Town Square 27, Staroměstské náměstí 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Old Town Square, Melantrichova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Orebitská, Orebitská 66/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Pod Vysehradem, Vratislavova 3/25</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Praha 6, Heleny Malířové 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Pushkin, Husova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Soukenická, Soukenická 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments staropramenna, Staropramenna 530/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Těšnov, Těšnov 1744/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Tronicek, Purkyňova 2053/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Týnská 7, Týnská 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments U Staropramenu, Na Valentince 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments U Švejků, Újezd 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Valentinka, Na Valentince 362/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Vysehrad With Free Parking, Vratislavova Street 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Apartments Wenceslas Square, Wenceslas Square 36, 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Appartamento Praga Centro, Trojanova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Appartment Rytířova, Rytířova 856</div></li>
                    
                        <li><div class="hotel suggestion-item">Appia Hotel Residences, Sporkova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Aquapalace Hotel Prague, Pražská 137, Čestlice</div></li>
                    
                        <li><div class="hotel suggestion-item">Archibald City hotel, Zitna 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Archibald Hotel At the Charles Bridge, Na Kampe 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Aria Hotel, Trziste 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Ariston &amp; Ariston Patio Hotel, Seifertova 65</div></li>
                    
                        <li><div class="hotel suggestion-item">Arkada Hotel Praha, Balbinova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Apartments Celakovskeho Sady, Čelakovskeho sady 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Apartments Prague, Petrská 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Deco Imperial Hotel, Na Poříčí 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Gallery Apartment Prague, Karlovo náměstí 557/30</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Hole Hostel, Soukenicka 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Hotel Prague, Nad Kralovskou oborou 53</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Nouveau Palace Hotel, Panska 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Art Noveau beauty, Uruguayská 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Art-Apartments Čelakovskeho Sady 2, Čelakovského Sady 434/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Art-Apartments Seifertova, Seifertova 1021/19</div></li>
                    
                        <li><div class="hotel suggestion-item">Artapartments, Balbínova 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Artharmony Pension &amp; Hostel, Ječná 509/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Astoria Hotel, Rybna 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Astronomical Clock Apartment, Týnská ulička 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Astronomical Clock Suite, Kozna 473/2</div></li>
                    
                        <li><div class="hotel suggestion-item">At the Green Grape - U Zeleného hroznu, Jánský Vršek 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Atelier Centrum, Plzeňská 1270/103</div></li>
                    
                        <li><div class="hotel suggestion-item">Atlantic Hotel, Na Porici 9</div></li>
                    
                        <li><div class="hotel suggestion-item">ATS Hostel Arnosta, Voršilská 1</div></li>
                    
                        <li><div class="hotel suggestion-item">ATS Hostel Jednota, Opletalova 38</div></li>
                    
                        <li><div class="hotel suggestion-item">ATS Hostel Svehlova, Slavikova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Attic Hotel, Hanusova 496/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Aureus Clavis Hotel, Nerudova 243/27, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Avenue Legerova 19, 9 1864 Legerova, 120 00 Praha 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Avidi Apartment, Jeseniova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">AXA Hotel, Na Porici 40</div></li>
                    
                        <li><div class="hotel suggestion-item">AZ-Hostel, Jindřišská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">B&amp;B Hotel Prague City, Prvního pluku 29</div></li>
                    
                        <li><div class="hotel suggestion-item">B&amp;B Ivana, Klecanská 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Balu Apartments, Pod Krejcárkem 975/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Bambur Residence, Opletalova 923/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Baroque Hall, Jecna 510/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Baroque House at the Black Lamb, Valdštejnská 150/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Barrandov Apartments, Pod Třešněmi 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Baryton Apartments, Řehořova 1003/34</div></li>
                    
                        <li><div class="hotel suggestion-item">Bastia Residence, Molakova 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Bastien Studio, Sazovická 488/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Bed &amp; Breakfast Na Farkáně, Na Farkáně I 241/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Bed&amp;Books Art Hotel, Nekázanka 14, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Belehradska Cozy apartment, Belehradska 126</div></li>
                    
                        <li><div class="hotel suggestion-item">Bertramka Apartment, Na Provaznici 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Best Place in Prague, Valentinská 56/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Best Western Amedia Praha, Türkova 5a/2318</div></li>
                    
                        <li><div class="hotel suggestion-item">Best Western City Hotel Moran, Na Morani 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Best Western Plus Hotel Meteor Plaza, Hybernska 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Beta Pension, Jaromírova 46</div></li>
                    
                        <li><div class="hotel suggestion-item">Betlem Club Hotel, Betlemske nam. 9/257</div></li>
                    
                        <li><div class="hotel suggestion-item">Bilkova apartments, Bílkova 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Bishop's House, Dražického Náměstí 6-9</div></li>
                    
                        <li><div class="hotel suggestion-item">Black Bridge - Hotel Apartment, Národních hrdinů 891, Prague, 19012</div></li>
                    
                        <li><div class="hotel suggestion-item">Blue Orange Business Resort Prague, Tupolevova 676</div></li>
                    
                        <li><div class="hotel suggestion-item">Boat Hotel Matylda, Masarykovo nabrezi</div></li>
                    
                        <li><div class="hotel suggestion-item">Bohem Prague Hotel, Plzeňská 56</div></li>
                    
                        <li><div class="hotel suggestion-item">Bohemia Apartments Prague Centre, Vodickova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Bohemia Plaza Residence, Zitna 50</div></li>
                    
                        <li><div class="hotel suggestion-item">Boho Hotel Prague, Senovazna 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Bona Serva, Konevova 1107/54</div></li>
                    
                        <li><div class="hotel suggestion-item">Botanical garden apartment, Na Hrádku 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Botel Albatros, Nábřeží Ludvíka Svobody 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Botel Matylda, Masarykovo nabrezi, Prague 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Botel Racek, Podolské nábřeží</div></li>
                    
                        <li><div class="hotel suggestion-item">Botel Vodnik, Strakonická 1032 / 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Botic Student House, K Botici 1439/5 Praha 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Boutique Hotel Constans, Bretislavova 309/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Boutique Hotel Seven Days, Žitná 46/572</div></li>
                    
                        <li><div class="hotel suggestion-item">Branik Garden, Branicka 106</div></li>
                    
                        <li><div class="hotel suggestion-item">Bravo Apartment, Víta Nejedlého 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Bredovský dvůr Apartment, Olivova 4/2096</div></li>
                    
                        <li><div class="hotel suggestion-item">Brezina Pension, Legerova 41</div></li>
                    
                        <li><div class="hotel suggestion-item">Bright Apartment Close to Subway, Prušánecká 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Bright spacious apartment, Musílkova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Buddha studio, Haštalská 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Buddha-Bar Hotel Prague, Jakubska 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Budget Apartment, Kubelíkova 40</div></li>
                    
                        <li><div class="hotel suggestion-item">Budget Rehorova Apartment, Rehorova 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Budget Reznicka apartment, Reznicka 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Capital Apartmens, Václavské náměstí 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Carlo IV Prague, Autograph Collection, Senovazne Namesti 13/991</div></li>
                    
                        <li><div class="hotel suggestion-item">Castle Residence Praha, Květinářská 755, Prague, 182 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Cathedral Prague Apartments, Týnská 11, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">Central Hotel praha, Rybná  677/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Central National Apartments, Charvátova 10, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Central Station Studios, Rehorova 3, Prague, 130 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Centrum Apartments Old Town Square,  Dlouhá 735/25, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">Century Old Town Prague - MGallery by Sofitel, Na Poříčí 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Bridge Apartments, U lužického semináře 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Bridge Bed And Breakfast, Drazickeho Namesti 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Bridge Palace, Anenske namesti 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Bridge Premium Apartments, Karlova 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Bridge Residence, Mostecka 12/49</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles IV apartment, Mostecka 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles IV Apartments, Karlova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Charles Square Apartment, Charles Square 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Charming Prague Apartments At the Black Star, Seminářská 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Chateau St. Havel - Wellness Hotel, Před nádražím 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Cherry Apartment near the City Center, Křižíkova 70/65</div></li>
                    
                        <li><div class="hotel suggestion-item">Chili Hostel, Pstrossova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Chopin Hotel Prague City, Opletalova 960/33</div></li>
                    
                        <li><div class="hotel suggestion-item">Church Pension Praha - Husuv Dum, Jungmannova 9/22</div></li>
                    
                        <li><div class="hotel suggestion-item">City Apartment, V lesíčku 656/7</div></li>
                    
                        <li><div class="hotel suggestion-item">City Crown Hotel, Borivojova 94</div></li>
                    
                        <li><div class="hotel suggestion-item">City Lounge Crown Hotel, Borivojova 94, Prague, 13000</div></li>
                    
                        <li><div class="hotel suggestion-item">City Lounge Hotel, Borivojova 92</div></li>
                    
                        <li><div class="hotel suggestion-item">CityStay Apartments, Sokolska 66</div></li>
                    
                        <li><div class="hotel suggestion-item">Citystay Hostel, Sokolska 66</div></li>
                    
                        <li><div class="hotel suggestion-item">Clarion Congress Hotel Prague, Freyova 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Clarion Hotel Prague City, Tylovo namesti 15/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Clarion Hotel Prague Old Town, Hradební 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Climentine, Klimentská 1215/26</div></li>
                    
                        <li><div class="hotel suggestion-item">Cloister Inn Hotel, Konviktska 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Clown and Bard Hostel, Borivojova 102/758</div></li>
                    
                        <li><div class="hotel suggestion-item">Club Hotel Praha, Ječná 509/12, 120 00 Nové Město</div></li>
                    
                        <li><div class="hotel suggestion-item">Colloseum Hotel, Myslikova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Congress and Sport Hotel Olsanka, Táboritská 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Contemp Castle, Londýnská 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Copernicus Apartments, Kopernikova 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Corinthia Hotel Prague, Kongresová 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Cosmopole hostel, Spalena 83/3 Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Courtyard by Marriott Prague Airport, Aviaticka 1092/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Courtyard by Marriott Prague Flora, Lucemburska Street 46</div></li>
                    
                        <li><div class="hotel suggestion-item">Czech Bohemia Apartments Prague, Hellichova 394/7, Malá Strana</div></li>
                    
                        <li><div class="hotel suggestion-item">Czech Bohemia Design Apartments Prague, Vodičkova 710/31</div></li>
                    
                        <li><div class="hotel suggestion-item">Czech Inn Hostel, Francouzska 76</div></li>
                    
                        <li><div class="hotel suggestion-item">Dancing House Hotel, Jiráskovo náměstí 1981/6, 120 00 Praha</div></li>
                    
                        <li><div class="hotel suggestion-item">DC Rezidence, Novodvorska 1061/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Delux Apartment Kolínská, Kolínská 1741/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Deluxe Apartment Andel, Vltavská 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Deminka Palace, Skretova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Apartment Agata, Ruská 58</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Apartment at Vysehrad, Boleslavova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Design apartment in Prague 6, Brixiho 1619/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Hotel Jewel Prague, Rytířská 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Hotel Neruda, Nerudova 44</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Merrion Hotel, Jeseniova 49</div></li>
                    
                        <li><div class="hotel suggestion-item">Design Metropol Hotel Prague, Národní 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Designer Prague City Apartments, Šmeralova 146/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Designer Prague City Apartments, Šmeralova 146/6, Prague, 170 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Designhotel Elephant Prague, Na Florenci 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Discounts Prague Hotel, Cukrovarnická 64, Prague, 16200</div></li>
                    
                        <li><div class="hotel suggestion-item">Dizzy Daisy Hostel, Dittrichova 330/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Dolce Villa, Nebušická 93</div></li>
                    
                        <li><div class="hotel suggestion-item">Dolce Vita Suites Boutique, Vejvodova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Domino Pension, Ašská 107</div></li>
                    
                        <li><div class="hotel suggestion-item">Domus Balthasar Design Hotel, Mostecka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Domus Henrici Boutique Hotel, Loretanska 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Don Giovanni Apartments, Na Porici 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Dorint Hotel Don Giovanni Prague, Vinohradska 157 a</div></li>
                    
                        <li><div class="hotel suggestion-item">Down Town Residence, Příčná 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Downtown Apartments, U Milosrdnych 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Downtown Suites Chlumova***, Chlumova 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Downtown Suites Prague, Kodaňská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Dream Home Dlouhá, Dlouhá 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Dream Home Expo, Molakova 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Dream Home Kampa, Na Kampe 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Dream Home Vinohrady, Šafaříkova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Drtinova Prague Apartments, Drtinova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Dusni Apartments, Dusni 1</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Embassy Prague Hotel, Petrská 31</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Crystal Palace, Malá Štěpánská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Downtown, Žitná 53</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Jasmín, Skloněná 515</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Jeleni dvur Prague Castle, Jelení 197/7, 118 00 Praha 1</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Julis, Václavské náměstí 22</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Mánes, Myslíkova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Populus, U Staré Cihelny 11</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Rokoko, Václavské nám. 38</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Royal Esprit, Jakubská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Sonata, Sokolská 1576/68</div></li>
                    
                        <li><div class="hotel suggestion-item">EA Hotel Tosca, Blanická 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Easy Star Hotel, Blazimska 1781/14</div></li>
                    
                        <li><div class="hotel suggestion-item">easyHotel, U Vystaviste 1, Prague 170 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Ela Apartments, Molákova 577/34</div></li>
                    
                        <li><div class="hotel suggestion-item">Elens Apartments Koněvova 47, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Elens Apartments Koněvova 49, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Elens Apartments, Koněvova 22, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Elens Apartments, Národni 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Elen's Prague Castle Suites, Jánský Vršek 313/10, Prague, 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Eliska Ruterra Apartment, Elišky Krásnohorské 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Eliška Tower Apartments Prague, Freyova 983/25</div></li>
                    
                        <li><div class="hotel suggestion-item">Elišky Krásnohorské Apartments, Elišky Krásnohorské 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Elite Hotel, Ostrovni 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Elysee Apartments, Václavské nám. 43</div></li>
                    
                        <li><div class="hotel suggestion-item">Elysee Hotel, Vaclavske Namesti 43</div></li>
                    
                        <li><div class="hotel suggestion-item">Empirent Apartments, Křižíkova 71, Praha, Prague, 180 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Emporio Prague Apartments, Soukenicka 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Epstein Apartments, Benediktska 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Equity Point Prague, Ostrovni 131/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Erbenova Apartment, Erbenova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Esplanade Prague hotel, Washingtonova 1600/19</div></li>
                    
                        <li><div class="hotel suggestion-item">Europa Apartments, Na Bělidle 302/27</div></li>
                    
                        <li><div class="hotel suggestion-item">Eurostars hotel David, Naplavni 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Eurostars Thalia hotel, Narodni Trida 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Eurowings Hotel, Milíčova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Excellent Apartments, Klapkova 165/67</div></li>
                    
                        <li><div class="hotel suggestion-item">Exe City Park, Opletalova 960/33</div></li>
                    
                        <li><div class="hotel suggestion-item">Expo Hostel Prague, Beranových 65</div></li>
                    
                        <li><div class="hotel suggestion-item">Expo Hotel, Za Elektrarnou 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Extol Inn hotel, Pristavni 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Falkensteiner Hotel Maria Prag, Opletalova 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Fashion Loft, Vladislavova 18, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">Florenc Apartments, Konevova 60</div></li>
                    
                        <li><div class="hotel suggestion-item">Florentina boat, Dvořákovo nábřeží</div></li>
                    
                        <li><div class="hotel suggestion-item">Foerster Apartments, Pštrossova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Fontána hotel, Edisonova 149</div></li>
                    
                        <li><div class="hotel suggestion-item">Four Seasons Hotel Prague, Veleslavínova 2a/1098</div></li>
                    
                        <li><div class="hotel suggestion-item">Four Trees, Petrská 1132/4, 110 00 Prague-Nové Město</div></li>
                    
                        <li><div class="hotel suggestion-item">Franciscan Garden Apartments, Jungmannova 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Franciscan Garden Apartments, Jungmannova 28, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Franz Apartments, Konviktská 2/319</div></li>
                    
                        <li><div class="hotel suggestion-item">Friday Hotel, Na Prikope 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Fusion Hotel, Panska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Galaxie Hotel, Suchdolské náměstí 801</div></li>
                    
                        <li><div class="hotel suggestion-item">Galerie Royale, Křižíkova 87</div></li>
                    
                        <li><div class="hotel suggestion-item">Gallery Hostel, V Jame 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Gallery Hotel SIS, Rostislavova 17/253</div></li>
                    
                        <li><div class="hotel suggestion-item">Garden Residence Prague Castle, Nový Svět 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Garden studios, Košická 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Gay Hotel Villa Mansland, Štěpničná 9-11</div></li>
                    
                        <li><div class="hotel suggestion-item">Germes Apartments Klimentska, Klimentska 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Germes Apartments Prague, Soukenicka 23</div></li>
                    
                        <li><div class="hotel suggestion-item">GH Prague Apartments, Vinohradska 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Giovanni Apartments Palladium, Truhlarska 5</div></li>
                    
                        <li><div class="hotel suggestion-item">GJ Residence Na Vinohradu, Na vinohradu 217/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Angel Apartment, Vltavská 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Apple Apartments, Uvoz 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Family Apartments, Molakova 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Karlín Apartment, Sokolovská 85/104</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Key, Nerudova 243/27</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Prague Residence, náměstí Curieových 43/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Star hotel, Nerudova 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Golden Well Hotel Prague, U Zlaté Studně 4/166</div></li>
                    
                        <li><div class="hotel suggestion-item">Gorgeous Prague Rooms, Kostecna 121/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Grand Hotel Bohemia, Kralodvorska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Grand Hotel Praha, Staromestske Namesti 481/22</div></li>
                    
                        <li><div class="hotel suggestion-item">Grand Terrace, Mezibranska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Grandior Hotel Prague, Na Poříčí 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Green Garden Hotel, Fügnerovo náměstí 1865/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Green Oasis Wenceslas Square Apartments, Na Smetance 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Greg Apartments Vinohrady Prague, Ondříčkova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Grus Apartments Prague, Wuchterlova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Guest House DD, U 1.baterie 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Guest house Seifertova, Seifertova 545/44</div></li>
                    
                        <li><div class="hotel suggestion-item">Guesthouse Saturnin, Orebitská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">H7 Palace, Hálkova 1642/7, 120 00 Praha 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hanabi Apartments, Baranova 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hanspaulka apartment, Na Hanspaulce 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hapimag Resort Prague, Václavské náměstí 60</div></li>
                    
                        <li><div class="hotel suggestion-item">Happy Guest Apartment, Spalena 35</div></li>
                    
                        <li><div class="hotel suggestion-item">Happy Guest National Theatre Apartment, Ostrovní 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Happy House, Sazovicka 479/19</div></li>
                    
                        <li><div class="hotel suggestion-item">Happy Memories Guest House, Lysolajské údolí 54</div></li>
                    
                        <li><div class="hotel suggestion-item">Happy Prague Apartments, Betlemske Namesti 254/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hastal Gallery, Haštalská 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Haštalské náměstí Apartment, Haštalské náměstí 2/1046</div></li>
                    
                        <li><div class="hotel suggestion-item">Haštalské Náměstí Studio, Haštalské náměstí 1046/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Haute Couture Apartment, Zborovská 58</div></li>
                    
                        <li><div class="hotel suggestion-item">High Spec Apartment Downtown Prague, Zlatnická 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hilton Prague Hotel, Pobrezni 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hilton Prague Old Town, V Celnici 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hoffmeister Hotel, Pod Bruskou 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Holec Apartments, Pštrossova 3, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Holečkova Apartments, Holečkova 119</div></li>
                    
                        <li><div class="hotel suggestion-item">Holečkova Hostel, Holečkova 107</div></li>
                    
                        <li><div class="hotel suggestion-item">Holiday Inn Prague Airport, Prague International Airport, K Letisti 1074/32</div></li>
                    
                        <li><div class="hotel suggestion-item">Holiday Inn Prague Congress Centre, Na Pankraci 15/1684</div></li>
                    
                        <li><div class="hotel suggestion-item">HomeRez – Apartment Kamenicka, Kamenicka 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel 4 U - Dolni Chabry, Ústecká 239/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Advantage, Sokolská 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Alia, Vladimírova 8/234</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Ananas, Václavské nám. 846/1, 110 00 Prague 1-Můstek</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Boathouse, Lodnická 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Bohemia, Poděbradská 540/26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Bonvolon, Jungmannova 5/18, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Boudnik, Dalimilova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Briliant, Náchodská 708/79</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Centre, Sokolska 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Cortina, Arbesovo náměstí 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Dakura, Národní Obrany 544/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Daniela, Jungmannova 5/18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Downtown, Narodni 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Elf, Husitska 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel EMMA, Na Zderaze 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Florenc, Pod Výtopnou 2, Prague, 186 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Fontána, Národní Obrany 935/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Franz Kafka, Kaprova 13/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel GoldenBridge, Staroměstské náměstí 929/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Homer, Melantrichova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Kaktus, Karlovo náměstí 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Kolbenka, Kolbenova 159/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Kotva, Varhulíkové 134</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Libeň, U Meteoru 29/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Lípa, Tachovské náměstí 6/288</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Mango, Míšeňská 68/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Marabou Prague, Koněvova 55</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Marrakesh, Biskupská 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Miles, Vodickova 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Modrá, K Letišti 916</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Mojo Inn, Řeznická 662/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel One Home, Hybernska 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel One Prague, Cimburkova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Opletalova, Opletalova 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Orange, Vaclavske namesti 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Pilgrim &amp; Hotel 3star, Duskova 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Plus Prague, Privozni 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Prague Tyn, Týnska 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Prague, Chodská 1401/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Praha Ládví, Davídkova 443/114</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Praha, U Klikovky 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Ragtime, Opatovicka 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Riviera, Hroznová 491/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Rosemary, Mezi zahrádkami 1824/23</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Rosemary, Růžová 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Santini Prague, Nerudova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel Sokol Troja, Trojská 171 a</div></li>
                    
                        <li><div class="hotel suggestion-item">Hostel U Bubenicku, Myslíkova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel &amp; Residence Royal Standard, Rasinovo Nabrezi 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel 16, Katerinska 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel 51, Konzumni 253/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Abe, Legerova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Abito, Chodovská 1430/3a</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Adeba, Pernerova 11/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Adler Praha, V Jirchářích 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Adria praha, Václavské náměstí 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Agnes 3, Anežská 807/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Aida, Kubisova 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Akcent, Stroupežnického 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Albion,Peroutkova 531</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Alexander, Na Břevnovské Pláni 1975</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Alexis, Závišova 20 / 2518, Prague, 140 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Alpin Avion, Budějovická 69</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Alton, Legerova 757/62</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Alwyn, Vitkova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Amadeus, Dalimilova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Amarilis, Štěpánská 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ambassador Zlatá husa, Václavské náměstí 839/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Andante, ve smečkách 1408/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Andel, Radlicka 40/857</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Angelis, Pivovarská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ankora, Kateřinská 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Antonie, U Stirky 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Apartman Student, Chemická 951</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Apartments Wencels Square, Vaclavske namesti 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Aramis, Zerotinova 31</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Arbes, Viktora Huga 3</div></li>
                    
                        <li><div class="hotel suggestion-item">HOTEL ARÉNA, Kovářská 1170/15, Prague, 190 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Arko, Vysočanská 87</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Arlington, Kurta Konráda 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Aron, Zerotinova 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Askania, Rostislavova 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Assenzio Prague, Wenzigova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Astra, Mukařovská 1740</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Atos, Melnicka 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Augustus et Otto, Na Celné 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Aura, Kostelecka 819</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Aurus, Karlova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Avion, Kladenská 115</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Balkan, Tr. Svornosti 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Barceló Old Town Praha, Celetna 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Baroko, Tomsova 11/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Bella, Hloubětínská 20/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Belvedere, Milady Horákové 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Beranek, Tylovo nam./ Belehradska</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Beseda Prague, Vladislavova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Bílý Lev, Cimburkova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Bohemians, Modranská 51</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Braník, Pikovická 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Bridge, Vasatkova 1024/27</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Brilliant, Prosecká 73/69</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Brixen, Sokolska 1796/44</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Caesar Prague, Myslíkova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Carlton,Taboritska 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Carol, Kurta Konrada 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Casa Marcello, Řásnovka 783/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Cechie Praha, U Sluncové 618/25</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Cerny Slon, Tynska 629/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Čertousy, Bártlova 35/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Certovka, U Luzickeho seminare 85/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Charles Central, Thamova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Chodov, Mírového Hnutí 2137</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Chvalská Tvrz, Na Chvalské tvrzi 858</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel City Bell, Belgicka 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel City Central Prague, Sokolska 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel City Centre, Revoluční 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel City Club Prague, Sokolska 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel City-Inn, Hybernská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel CitySpot, Jeruzalemska 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Claris, Slezská 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Clement, Klimentská 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Clementin Old Town, Seminarska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Columbo, Miličova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Coronet, Marie Cibulkove 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Cosmopolitan, Zlatnicka 1126/3, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Dahlia Inn, Lipova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Dalimil, Prokopovo nám. 2-3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel D'Angelo, Plzenska 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel DAP, Vítězné náměstí 4/684</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Dar, Kozna 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Diana u Kuchařů, Slévačská 496/48, 198 00 Praha 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Donatello, Salmovská 14, Prague, 12000</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Duo, Teplicka 492</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Edvin, Rosecska 1736/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ehrlich, Koněvova 79</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Elizza, Na Vinobraní 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Energie, Plzeňská 276/298</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Esprit, Lihovarská 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Excellent, Líbeznická 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Florenc, Křižíkova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Florian Prague, Ohradní 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Fortuna City, Bečvářova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Fortuna West, Mrkvičkova 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Frýdl, Na Hlavni 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Frýdl, Na Hlavní 23, Prague, 18200</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Galileo, Bruselská 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Garden Court, Spalena 90/17 Praha 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Garni Rambousek, U Malvazinky 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel General, Svornosti 1143/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel GEO, Perunova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Globus, Gregorova 2115/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Gloria, Prokopova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Golden City Garni, Taboritska 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Golden Crown, Vladislavova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Golden Golem Praha, Na hlavní 21/71</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Golf, Plzenska 103/215a</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Grand Majestic Plaza , Truhlarska 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Grand, Roháčova 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Grandium Prague (Yasmin Hotel), Politickych veznu 12/913</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Habitat 16, Habartická 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Harmony, Na Pořící 31</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Hasa, Sámova 1476/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Hastal Prague Old Town, Hastalska 1077/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Hejtman, Roháčova 70</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Henrietta, Ke Stírce 1774/42</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Herrmes, Do Polí 844/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Hormeda, Na Zástřelu 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel ILF, Budějovická 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Imos, Za Tratí 686/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Inos, Sinkulova 23</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel International Prague, Koulova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Inturprag, Lisabonska 606/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ivka, Nad Klicovem 81</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Jana / Pension Domov Mládeže, Dykova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel JaS, Sídlištní 1/1167</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Jerabek, Primatorska 4/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Jerome House, V jirchářích 153/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Josef, Rybná 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Julian, Elisky Peskove 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Juno, Stechovicka 2296</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Jurys Inn Prague, Sokolovská 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kampa Garden, U Sovových Mlýnů 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kampa, Všehrdova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kanarek, Proti Proudu 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Karlin, Sokolovska 71</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kavalir, Plzenska 177</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel King David Prague, Hybernska 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel King George, Liliová 10, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kings Court, U Obecniho Domu 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Kinsky Garden, Holeckova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Klara, Šternberkova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Klarov, U Zelezne Lavky 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Krystal, José Martího 2/407</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel La Boutique, Staropramenna 728/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Legie, Sokolská 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Leonardo Prague, Karoliny Svetle 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Liberty, ul. 28. října 11/376</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Libuše, Pod Vlachovkou 787/20, Praha 18200</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Lifestyle, V Lužích 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Liliova Prague Old Town, Liliova 1070/18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Lippert, Mikulasska 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Lokal Inn, Misenska 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Lunik, Londýnská 50</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Malá Strana, Melnická 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Marie-Luisa, Krnská 350/26, 197 00 Kbely</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Marketa, Na Petynce 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mars, Kubánské náměstí 1333/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Max, Bezdrevská 549</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Maximilian, Haštalská 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mazanka, Za Vodárnou 1/1013</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Meda-Art of Museum Kampa, Narodni obrany 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mega, Jeseniova 108</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Melantrich, Melantrichova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Meran, Vaclavske namesti 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Meritum, Staré Náměstí 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Merkur, Tesnov 1162/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Metamorphis , Malá Štuparská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Michael, Pod Lysinami 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Michle, Nuselská 214/124</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mira, Vlastislavova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Modra ruze, Rytířská 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mondeo Prague, Kutnohorská 436/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Monica, Vlnita 31/a</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Mucha, Sokolovska 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Museum, Mezibranska 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Na Zamecku, Zabehlicka 133</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Nabucco, Ctiradova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel NOIR, Legerova 35</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Nosal, U Michelského Lesa 1157</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Olga, Janovského 50</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Olympik Artemis, U Sluncové 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Olympik Tristar, U sluncové 71/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Olympik, Sokolovská 138</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Opera, Tesnov 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Orion, Americka 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ostaš, Orebitská 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Ostruvek, Na Ostrůvku 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Otakar, Otakarova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Otar, Sevřená 1302/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Oya, Na Pankráci 1337/109</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Palac U Kocku, Jilska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pankrac, Na Pankráci 1597/76</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Paris Prague, U Obecniho domu 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Páv, Křemencova 1250/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pawlovnia, V Holešovičkách 1401/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Peko, Brtnická 713/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Penzion Praga, U Lidového domu 857/11, Prague, 190 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Petr, Drtinova 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pivovar, Freyova 12/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pod Věží, Mostecká 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pohoda, Královická 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Popelka, Na Popelce 215/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Praga 1, Žitná 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Praga 1885, Plzeňská 580/29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prague Centre Plaza, Fügnerovo Namesti 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prague Centre Superior, Legerova 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prague Inn, 28.října 378/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prague Star, Ve Smeckach 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prokop, Pod Žvahovem 50</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Prokopka, Prokopova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Pure White, Koubkova 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel PurPur, Reznicka 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Questenberk, Uvoz 15/155</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Raffaello, Legerova 54</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Regina, Konojedská 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Relax Inn, Novovysocanska 163/25</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Residence Retezova, Retezova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Residence Select, Sokolska 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Residence Spalena, Spalena 99/33, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Restaurant Darwin, U Národní galerie 471</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Roma, Újezd 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Rott, Male Namesti 4/138</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Royal Prague, Thámova 688/36, 186 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Saint George, Tyršova 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Salvator, Truhlarska 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel SAS, U Arborky 397, Prague, 190 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Savoy, Keplerova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Schwaiger, Schwaigerova 59/3, 160 00 Praha 6-Bubeneč</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Seifert, Konevova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Selsky Dvur - Bohemian Village Courtyard, K Horkám 56</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Silenzio, Na Karlovce 2565/1b</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Slavia, Vladivostocka 1460/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Smaragd, Geologicka 2a</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Smisek, na uboci, Praha 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Sovereign Prague, Politickych veznu 916/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Sport, U Cukrovaru 1086, Kralupy nad Vltavou</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Stary Pivovar, Plzeňská 229/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Střížkov, Lovosická 439/42, 190 00 Praha 9-Střížkov</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Suite Home Prague, Pricna 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Sunflower, Oldřichova 31/427</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Sunrise, Ke Karlovu 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Sunshine, Drahobejlova 1058/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Svornost, Novozámecká 284</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Taurus, Vinohradska 105</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Tiepolo, Duskova 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Tivoli Prague, Sokolska 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Trevi, Uruguayská 540/20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Trinidad Prague Castle, U Železné lávky 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Tříska, Vinohradská 137/105, 130 00 Praha 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Troja, Trojská 1/2232</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Tulipán Průhonice, Tulipánová 142, 252 43 Průhonice</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Tyl, Tylovo namesti 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U 3 Pstrosu, Dražického náměstí 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Cerne Hvezdy, Seminarska 177/6, Prague 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Divadla, U stare posty 247/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U dvou zlatých klíčů, Spálená 98/31</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Hvezdy, Belohorska 259</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Jezulatka, Na Kampe 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Karla, Křešínská 155</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Krále Karla, Úvoz 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Kříže, Újezd 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Martina Praha, Zubatého 289/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Páva, U Lužického Semináře 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Prince, Staromestske Namesti 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Schnellu, Tomasska 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Semika, Vratislavova 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Sládků, Bělohorská 130/212</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Stare Pani, Michalská 9/441</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Šuterů, Palackého 722/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Svatého Jana, Vysehradska 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Tri Bubnu, U Radnice 8, 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Zlaté studně, U Zlaté Studně 166/4, Prague, 11800</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel U Zlateho jelena, Celetna 11 / Stupartska 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Zlatého koníčka, Úvoz 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Zlateho Stromu, Karlova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel u Zlatych nuzek, Na Kampe 6/494</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel UNIC Prague, Soukenická 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Venezia, Sokolska 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Victor, Husitska 72</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Victoria, Seifertova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Villa, Okrajní 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Vladař, Na Dvorcich 144/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Voyage, Konevova 28/29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Vysehrad, Marie Cibulkove 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Waldstein, Valdstejnske nam. 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Wertheim, Karlovarská 51</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Wilhelm, Hoštálkova 499/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel William, Hellichova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Wolf, U hostivařského nádr. 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotel Zlatá Váha, Senovážné náměstí 981/21</div></li>
                    
                        <li><div class="hotel suggestion-item">HotelMerlin, Gorazdova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Hotýlek Na Šancích, Turínská 1494/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Hunger Wall Residence, Plaska 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Ibis Praha Mala Strana, Plzenska 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Ibis Praha Old Town, Na Porici 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Ibis Praha Wenceslas Square, Katerinska 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Igor and David Apartments, Havelska 11, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">I'M Hostels &amp; Apartments, Rohacova 73</div></li>
                    
                        <li><div class="hotel suggestion-item">InterContinental Prague, Parizska 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Invalidovna Apartment, Nekvasilova 586</div></li>
                    
                        <li><div class="hotel suggestion-item">iPragueApartments, Trojická 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Iris Hotel Eden, Vladivostocká 1539/2, Prague 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Italska Apartment, Italska 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Jalta Boutique Hotel, Vaclavske namesti 45/818</div></li>
                    
                        <li><div class="hotel suggestion-item">Jana Masaryka Apartment, Jana Masaryka 40</div></li>
                    
                        <li><div class="hotel suggestion-item">Janalex Apartments National Theatre, Ostrovní 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Janalex Apartments Wenceslas Square, Krakovská 19/593</div></li>
                    
                        <li><div class="hotel suggestion-item">Jaselska Apartment, Jaselska 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Jewish Pearl Apartment, U starého hřbitova 6, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Josefov Apartments, Široká 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Josephine Old Town Square Hotel, Týn 636 / 9, 110 00 Staré Město, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Joy Spot Apartments, Krakovska 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Joy Spot Hostel, Krakovska 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Jump In Hostel, Dalimilova 261/14, Prague, 13000</div></li>
                    
                        <li><div class="hotel suggestion-item">Jungmanka, Palackeho 2/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Jungmann Central Residence, Vodičkova 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Jungmann Hotel, Jungmannovo nam. 2</div></li>
                    
                        <li><div class="hotel suggestion-item">JustPrague Apartment - Castle view, Křížovnická 86/6</div></li>
                    
                        <li><div class="hotel suggestion-item">JustPrague Apartment - Charles Bridge, Na Zábradlí 205/1</div></li>
                    
                        <li><div class="hotel suggestion-item">JustPrague Apartment, Korunní 588/4</div></li>
                    
                        <li><div class="hotel suggestion-item">K+K Hotel Central, Hybernska 10</div></li>
                    
                        <li><div class="hotel suggestion-item">K+K Hotel Fenix, Ve Smeckach 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Kampa Park Apartment II, Říční 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Kampa Park Apartment, Říční 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Kampa Park Apartment, Újezd 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Karl In Apartment, Křižíková 47</div></li>
                    
                        <li><div class="hotel suggestion-item">Karlin Apartment Krizikova, Krizikova 75</div></li>
                    
                        <li><div class="hotel suggestion-item">Karlova 25 Apartments, Karlova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Karlova Prague Apartments, Karlova 32/161</div></li>
                    
                        <li><div class="hotel suggestion-item">Karolina Apartment by Ruterra, Karolíny Světlé 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Kent Ridge Loft, Belehradska 1116</div></li>
                    
                        <li><div class="hotel suggestion-item">Kepler Apartmán, Keplerova 215/14</div></li>
                    
                        <li><div class="hotel suggestion-item">King Charles Boutique Hotel Residence, Neklanova 148/34</div></li>
                    
                        <li><div class="hotel suggestion-item">King Wenceslas Apartments, Jungmannova 742/22</div></li>
                    
                        <li><div class="hotel suggestion-item">Knock-inn, Na Kampě 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Kolej Hostivař, Weilova 1144/2, 102 00 Praha-Hostivař</div></li>
                    
                        <li><div class="hotel suggestion-item">Koruna Hotel, Opatovicka 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Košická Apartments, Košická 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Kozna Suites, Kožná 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Krakovska Holiday Appartments, Krakovská 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Krakovska Terraces, Krakovská 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Krakovska, Krakovska 15</div></li>
                    
                        <li><div class="hotel suggestion-item">La Ballerina Hotel, Dittrichova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">La Boutique Hotel, Vltavská 9</div></li>
                    
                        <li><div class="hotel suggestion-item">La Fenice residence, Vinohradska 83</div></li>
                    
                        <li><div class="hotel suggestion-item">Langhans Apartments, Vodičkova 37</div></li>
                    
                        <li><div class="hotel suggestion-item">LaNoblessa apartment, Zlatnická 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Large New Town Apartment, Lípová 577/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Lavanda Hotel Prague, Na belidle 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Lazenska N°4 Apartments, Lazenska 4, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Le Palais Art Hotel Prague, U Zvonarky 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Le Petit Hotel Prague, U Výstaviště 262/1, 170 00 Praha 7-Holešovice</div></li>
                    
                        <li><div class="hotel suggestion-item">Lenotti Italiane, Novákových 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Leon Hotel, Ortenovo náměstí 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Leongargt Apartments, Musílkova 1311/5d</div></li>
                    
                        <li><div class="hotel suggestion-item">Lesser Town Apartment, Petřínská 574/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Lesser Town Hip Apartment, Újezd 400/37</div></li>
                    
                        <li><div class="hotel suggestion-item">Lesser Town Square Apartments, Malostranské náměstí 11, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">Letná Apartment, Veletržní 69</div></li>
                    
                        <li><div class="hotel suggestion-item">Lida Guest House, Lopatecká 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Light Hotel, U dalnice 815/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Liliova Apartments, Liliova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Lindner Hotel Prague Castle, Strahovska 128</div></li>
                    
                        <li><div class="hotel suggestion-item">Little Quarter Hostel, Nerudova 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Little Town Budget Hotel, Malostranske nam. 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Londynska Apartment, Londynska 77</div></li>
                    
                        <li><div class="hotel suggestion-item">Loreta Hotel, Loretánské nám.8</div></li>
                    
                        <li><div class="hotel suggestion-item">Louis Leger Hotel, Legerova 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Louren hotel, Slezska 55</div></li>
                    
                        <li><div class="hotel suggestion-item">Louvre Loft Apartment, Narodni 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Lovely Prague Apartments, Truhlářská 23, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Luxury Family Hotel Bila Labut, Biskupska 1347/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Luxury Family Hotel Royal Palace, Letenska 11, Prague, 118 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Luxury Studio City Centre, Kloboucnicka 1411/26</div></li>
                    
                        <li><div class="hotel suggestion-item">Máchova, Máchova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Maiselova Rooms, Maiselova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Majestic Plaza Prague, Štěpánská 645/33</div></li>
                    
                        <li><div class="hotel suggestion-item">Malostranska Residence, Malostranské náměstí 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Mama Shelter (Parkhotel) Praha, Veletržní 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Mamaison Hotel Riverside Prague, Janackovo nab. 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Mamaison Residence Belgická Prague, Belgicka 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Mamaison Residence Downtown Prague, V tunich 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Mamaison Suite Hotel Pachtuv Palace Prague, Karoliny Svetle 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Mandarin Oriental, Prague, Nebovidska 459/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Manes Residence, Na Zderaze 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Mánesova Apartment, Mánesova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Marie - Luisa, Krnska 350, Prague, 19700</div></li>
                    
                        <li><div class="hotel suggestion-item">Marriott Executive Apartments - Longin Center, V Tunich 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Martial Arts Sleepover Gym, Václavská 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Martin's Prague, Graficka 37</div></li>
                    
                        <li><div class="hotel suggestion-item">Masarykova Kolej, Thákurova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">McSleep Hostel Prague 3 stars, Petrská 24, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">MeetMe23, Washingtonova 23, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Merchant's Avenue Hotel, Mostecká 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Merchants Crown Hotel, Vaclavske namesti 846/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Merchant's Yard Residence, Tyn 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Metropolis Prague Apartments (Rezidence Veverkova), Veverkova 25, Prague, 170 00, Czech Republic</div></li>
                    
                        <li><div class="hotel suggestion-item">Metropolitan Old Town, Haštalská 371/20</div></li>
                    
                        <li><div class="hotel suggestion-item">Metropolitan Studios, Záhřebská 46</div></li>
                    
                        <li><div class="hotel suggestion-item">MH Apartments Central Prague, Vysehradská 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Mighty Prague Apartments, Truhlářská 4, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Minihotel Vitex, Prava 619/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Miss Sophie's, Melounova 1609/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Mivos Prague Apartments Vltava, V Jirchářích 147/3</div></li>
                    
                        <li><div class="hotel suggestion-item">Mivos Prague Apartments, Štěpánská 51</div></li>
                    
                        <li><div class="hotel suggestion-item">Monastery Hotel, Strahovske Nadvori 13</div></li>
                    
                        <li><div class="hotel suggestion-item">MOODs boutique hotel, Klimentská 28</div></li>
                    
                        <li><div class="hotel suggestion-item">MOODs Charles Bridge, Naprstkova 274/6</div></li>
                    
                        <li><div class="hotel suggestion-item">MOOo Apartments, Jánský vršek 312/8, 118 00 Malá Strana</div></li>
                    
                        <li><div class="hotel suggestion-item">MOOo Apartments, Myslíkova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Mosaic House, Odborů 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Motel Grado, Mezi Lany 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Motel One Prague, Na Poříčí 1048/30</div></li>
                    
                        <li><div class="hotel suggestion-item">Motorest u vodáka, Výpadová 1037/26</div></li>
                    
                        <li><div class="hotel suggestion-item">Museum Guest House, Legerova 616/78</div></li>
                    
                        <li><div class="hotel suggestion-item">Museum Inn, Celakovskeho sady 8</div></li>
                    
                        <li><div class="hotel suggestion-item">My Hotel Apollon, Konevova 158</div></li>
                    
                        <li><div class="hotel suggestion-item">My Mucha´s Old Prague Gallery, Klimentska 40</div></li>
                    
                        <li><div class="hotel suggestion-item">MyHouse Apartments, Maiselova 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Myo Hotel Caruso, U milosrdnych 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Myo Hotel Mysterius, Masná 702/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Myo Hotel Wenceslas, Krakovská 10, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Nad Královnou Hotel &amp; Restaurant, 15600</div></li>
                    
                        <li><div class="hotel suggestion-item">National Museum Aparthouse, Balbinova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Navratilova Apartments, Navratilova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Nebozizek Hotel a Restaurant, Petřínské sady 411</div></li>
                    
                        <li><div class="hotel suggestion-item">Nerudova Apartment, Nerudova 36</div></li>
                    
                        <li><div class="hotel suggestion-item">New Luxury Apartments Prague 9, Lihovarská 1096/6</div></li>
                    
                        <li><div class="hotel suggestion-item">New Town Tower apartment, Řeznická 5</div></li>
                    
                        <li><div class="hotel suggestion-item">NH Prague City hotel, Mozartova 1/261</div></li>
                    
                        <li><div class="hotel suggestion-item">Nice Apartments Prague, Legerova 76</div></li>
                    
                        <li><div class="hotel suggestion-item">Nová Hospoda, Butovická 24/64</div></li>
                    
                        <li><div class="hotel suggestion-item">Novoměstský hotel, Řeznická 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Novotel Praha Wenceslas Square, Katerinska 38</div></li>
                    
                        <li><div class="hotel suggestion-item">Novum Hotel  Vitkov, Konevova 114</div></li>
                    
                        <li><div class="hotel suggestion-item">Nubis Residence, V Jirchářích 6</div></li>
                    
                        <li><div class="hotel suggestion-item">NYX Prague, Panska 9, Prague, 11000</div></li>
                    
                        <li><div class="hotel suggestion-item">Oasis Prague Apartments, Petrska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">OAZA hotel, Jeremenkova 1835/106</div></li>
                    
                        <li><div class="hotel suggestion-item">Occidental Praha (Barceló), Na Strzi 32, 140 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Occidental Praha Five (Barceló), Radlická 46/3276</div></li>
                    
                        <li><div class="hotel suggestion-item">Occidental Praha Wilson (Barceló), Václavské náměstí 59</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Jewish Cemetery View, Široká 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague Aparthotel, Charvatova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague Apartments, Žatecká 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague Central Apartments, Vaclavske Namesti 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague Hostel, Benediktská 685/ 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague Hotel, Skořepka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Prague House, Náprstkova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Royal Post Apartments, Maltézské Náměstí 8, Prague, 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Strand Spirit, Staropramenná 973/16, 150 00 Praha-Smíchov</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Time Hotel, Lublaňská 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Apartment Caroli, Smetanovo Nábřeží 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Apartments Tyn, Týnská ulička 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Apartments, Opatovicka 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Boutique Apartments, Tyn 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Boutique Suites, Dlouhá 727/39, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Charming Apartments, Linhartská 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town City Center Navratilova, Navratilová 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Home Prague, Týnská 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Prague 'Chez moi', Kaprova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Prague, U Obecniho Dvora 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Residence Apartments, Narodni 24/115</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Residence, Jilska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Square Apartments, Stupartska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Square Hotel, Staromestske Namesti 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Square Premium Apartments, Mikulášská 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Square Residence Bambur, Michalská 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Studio Apartment, U Nemocenské Pojišťovny 1230/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Old Town Terrace, Betlemske Namesti 6</div></li>
                    
                        <li><div class="hotel suggestion-item">One Room Hotel, Mahlerovy Sady 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Orchidea Lounge Apartments, Borivojova 92</div></li>
                    
                        <li><div class="hotel suggestion-item">Orea Hotel Pyramida, Belohorska 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Orebitská Suite, Orebitská 66/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Ostrovní Apartment, Ostrovní 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Ostrovni Astra Apartment, Ostrovni 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Ostrovského 17, Ostrovského 1190/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Outer Bailey Apartments, Ujezd 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Panorama Hotel Prague, Milevska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Parizska Apartments, Parizska 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Park &amp; Bike Studio Stylish Andel, Kovaku 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Park and River View, Janackovo Nabrezi 17.</div></li>
                    
                        <li><div class="hotel suggestion-item">Park Apartment, Jezkova 1034/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Park Holiday Congress &amp; Wellness Hotel, Květnového povstání 194</div></li>
                    
                        <li><div class="hotel suggestion-item">Park Hotel Průhonice, Uhříněveská 12, 252 43 Průhonice</div></li>
                    
                        <li><div class="hotel suggestion-item">Park Inn Hotel Prague, Svobodova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension 15, Vlkova 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension 21, Podhajská pole 275</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Akat, Nádražní 42/851</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Alabastr, Školská 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Albert &amp; Residence, Na slupi 7/141</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Apartment Granit, S.K. Neumanna 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Berta, Starochodovská 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Camp Prager, V Ladech 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension City Center &amp; L`Opera, Ječná 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Corto Old Town, Havelská 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension CubeNeumann, S.K.Neumanna 944/31</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Dientzenhofer, Nosticova 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Dobroucky, Prosecka 83/96</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Easy Journey, Plzeňská 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Europa, K Vetrolamu 668/22</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Filip, Pod stadiony 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Hanspaulka, Za Hanspaulkou 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Hattrick, Záběhlická 136/53</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Julie, Karlštejnská 494/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension KAREL, Muteninska 1119/23</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Karnet, Nad Rokoskou 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Kern, Jinonická 1185/50</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Kosire, Jinonická 732/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Lucie, Klapkova 53</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Mašek Praha, S.K.Neumanna 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Milk Inn, Českobrodská 1174</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Natur, Rudoltická 869</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Nika, Na Krčské stráni 52</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Paldus, Jinočanská 25</div></li>
                    
                        <li><div class="hotel suggestion-item">pension Patanka, Patanka 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Platan, Revolucni 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Pohádka Praha, Valdštejnská 288/4a</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Prague City, Stitneho 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Řepy, Ke Kaménce 93/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Sparta, Ústecká 153</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Tara, Havelská 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Trojská, Trojská 375/157</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension U Lilie, Liliová 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Unie, Těšnov 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Veronika, Na Jezerce 29/632</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Vila Lucie, Krčská 37</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Vila Šárka, Pod Cihelnou 5/501</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Villa Marit, Úvalská 3186/8e</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension Zličín, U Zličína 198/22, Prague, 155 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Pension-Apartmany Sabo, Lipnicka 349/30</div></li>
                    
                        <li><div class="hotel suggestion-item">Pentahotel Prague, Sokolovská 112</div></li>
                    
                        <li><div class="hotel suggestion-item">Penthouse Apartment in Vinohrady, Chodska 32</div></li>
                    
                        <li><div class="hotel suggestion-item">Penthouse in center of the Old town, Dušní 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion &amp; Hostel Sofi, Jeremenkova 304/55</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion a Restaurace Simanda, Simanovska 47</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Alča, Národních hrdinů 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Ariane, K Hrnčířům 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Barbar, U Národní galerie 474</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Bonsai, Nesmericka 398</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Chaloupka, Nad Hradnim vodojemem 83</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Dana Troja, Trojská 129</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Eliška, Novosuchdolská 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Euroclub Praha, Zlenická 1295/70</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion G - Centrum, Chodovská 3137/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Manes, Manesova 46</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Méttis, Krameriova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Palouček, Petra Rezka 1723/1a</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Rodos - Café, Náchodská 756/90</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Rohožník, Malešovská 1642</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Rokytka, K Uhříněvsi 55</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Schneider, Hekova 9/134</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Sprint, Cukrovarnická 64</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion U Čejpu, U strže 1, Prague, 140 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion U sv. Kryštofa, Záběhlická 72/60</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Vyšohlíd, Na Dolnici 954/37 - Stodůlky</div></li>
                    
                        <li><div class="hotel suggestion-item">Penzion Zderaz, Na Zderaze 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Perfect Days Apartments Karlin, Křižíkova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Perfect Days Apartments, Klimentská 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Perfect Days Old Town, Templová 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Perla Hotel, Perlova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Petrská Apartment, Petrská 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Picasso Apartments, Václavské Náměstí 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Plaza Alta Hotel, Ortenovo Nam. 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Pod Slovany Apartment, Pod Slovany 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Pompo Prague Apartments, Charvátova 39/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Post Hostel Prague, Moravská 1530/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Praga Apartment Tyrsova, Tyršová 1838/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Pragapart Apartment , Krakovská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague 01 Apartments, Nekazanka 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Apart Hotel, Ve Smečkách 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague- Apartment Pavla Beneše, Pavla Beneše 759/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Apartment Solutions, Truhlářská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Apartment, Dittrichova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Apartments, Na perštyně 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague AppArt, Soukenicka 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Art Visa Krakovska, Krakovska 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Boutique Residence, Jilska 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Castle Design Apartment, Na Valech 289/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Castle Romantic Apartments, U Lužického semináře 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague center Apartments, Kroftova 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Center Apartments, U Lužického semináře 88/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Central Exclusive Apartments, Elisky Krasnohorske 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Central Residence, Spalena 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Centre Apartments &amp; Hostel, Odboru 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague City Hall Apartments, Veleslavinova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague City Stay Jagellonská, 11 Jagellonská, Prague, 130 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague City Stay Jagellonská, 11 Jagellonská, Prague, 130 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague City Stay Jagellonská, 11 Jagellonská, Prague, 130 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Golden Age Hotel, Havelská 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Holiday Apartments, Janackovo Nabrezi 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Hostel Cathedral, Francouzská 6/80</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Life Masna, Masna 15, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Loreta Residence, Loretánské náměstí 102/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Marriott Hotel, V Celnici 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Museum Apartments, Mezibranska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Old Street Apartments, Staroměstské náměstí 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Old Town Studio #869, Bílkova 869/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Promenade Apartment, Anny Letenské 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Royal Apartments, Vlašská 356/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Saints Apartments, Korunní 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Siesta Apartments, Tynska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague studio, Sazovicka 454/13, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Trendy- Apartments, Soukenická 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague Vyšehrad Castle Apartments, Vyšehradská 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague-1 Hostel, Mezibranska 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Prague4you Apartment, Hybernska 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Praha Feel Good Apartment, Mezibranská 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Premier Apartments Wenceslas Square, Vaclavske namesti 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Premium Prague Apartments, U milosrdných 804/14</div></li>
                    
                        <li><div class="hotel suggestion-item">President Hotel, Náměstí Curieových 100/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Prestige Apartments, Navratilova 16</div></li>
                    
                        <li><div class="hotel suggestion-item">Primavera Apartments, Paťanka 2722/11b</div></li>
                    
                        <li><div class="hotel suggestion-item">Prokop Boutique Hotel, Cimburkova 414/28, Prague 130 00</div></li>
                    
                        <li><div class="hotel suggestion-item">PVH Charming Flats Horejsi nabrezi, Hořejší nábřeží 25</div></li>
                    
                        <li><div class="hotel suggestion-item">PVH Charming Flats Hroznova, Hroznova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">PVH Charming Flats Janackovo, Janáčkovo nábřezí 49</div></li>
                    
                        <li><div class="hotel suggestion-item">PVH charming flats Odboru, Odboru 10</div></li>
                    
                        <li><div class="hotel suggestion-item">PVH Charming Flats Vlasska, Vlasska 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Pytloun Boutique Hotel Prague, Václavské nám. 779/16</div></li>
                    
                        <li><div class="hotel suggestion-item">Quadrio Bedroom Central Apartment, Spálená 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Quite Central Apartment, Cimburkova 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Radisson Blu Alcron Hotel, Stepanska 40</div></li>
                    
                        <li><div class="hotel suggestion-item">Ramada Airport Hotel Prague, K Letišti - Terminál 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Ramada Prague City Centre, Václavské nám. 41</div></li>
                    
                        <li><div class="hotel suggestion-item">Ramasun, Čestmírova 217/22</div></li>
                    
                        <li><div class="hotel suggestion-item">Ramova Apartment, Rámová 939/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Red &amp; Blue Design Hotel Prague, Holeckova 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Red Lion Hotel, Nerudova 41</div></li>
                    
                        <li><div class="hotel suggestion-item">Regina Apartmens, Dalimilova 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence 3Domy, Křižíkova 44</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence 7 Angels, Jilská 20, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Agnes, Haštalská 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Bene,  Dlouhá 48/721, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Bene, Dlouhá 48/721</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Bijou de Prague, Nerudova 43</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Bílkova, Bílkova 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Bologna, Konviktska 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Brehova, Břehová 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Elema, Zahrebska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Eliska Tower, Freyova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Green Lobster, Nerudova 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Invalidovna, U Sluncove</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence James House, Újezd 428/34, Prague, 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Jecna, Jecna 35</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Jeronymova, Jeronýmova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Karlin, Křižíkova 71, Praha, Prague, 180 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Karlova, Karlova 42</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Karolina, Karoliny Svetle 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Konvi, Konviktská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Kostnické Square, Kostnické náměstí 1, 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Kralovský Vinohrad, Šmilovského 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Leon D'Oro, Havelska 29</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Masna, Masna 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Pinkas Prague, Kremencova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Římská 45, Rimska 45</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Rybna, Rybna 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Tabor, Taboritska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Three Golden Crowns, Malostranské nám. 260/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Thunovska, Thunovska 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Týnská, Týnská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence U Bílého bažanta, Karolíny Světlé 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence U Černého Orla, Mostecka 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence U Malvaze, Karlova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence U Mecenáše, Malostranské nám. 261/10, Prague, 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence V Tůních, V Tůních 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Vinohrad, Zizkovo nam. 1152/6</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Viola, Hybernska 26</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Vitkov, Rohačova 37</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Vlašská, Vlašská 353/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Vocelova, Vocelova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Residence Vysta, U Výstaviště 764/13</div></li>
                    
                        <li><div class="hotel suggestion-item">Retezova Apartments, Liliova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Retro Flat Apartment, Zborovska 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Revidence Apartments Lucas, Lukášova 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Revidence Apartments Viklef, Viklefova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence &amp; Wellness Blatov, Starokolínská 306</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Břevnov, Fastrova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Davids, Křižíkova 9/267</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Dlouha, Dlouhá 740/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Dvořák, Na Kampě 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Emmy, K Zelené Louce 2A</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Italská, Praha 2, Italská 2561</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Kajetánka, Na Petynce 23a</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Vítkova, Vítkova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Rezidence Vyšehrad, Lumírova 1715/33</div></li>
                    
                        <li><div class="hotel suggestion-item">Reznicka Apartments, Reznicka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Richie Apartman, Frantiska Divise 1437/54N</div></li>
                    
                        <li><div class="hotel suggestion-item">Ritchie's Hostel &amp; Hotel, Karlova 9 and 13</div></li>
                    
                        <li><div class="hotel suggestion-item">River Diamont Apartment, Rohanské nábřeží 657/7</div></li>
                    
                        <li><div class="hotel suggestion-item">River View Residence, Naplavni 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Riverfront Apartment, Janáčkovo nábřeží 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Riverside Apartment, Janáčkovo nábřeží 35</div></li>
                    
                        <li><div class="hotel suggestion-item">Riverview Apartments Prague, Janáčkovo nábřeží 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Rohan Boat Prague, U Libeňského Mostu 1, 180 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Romantik Hotel U Raka, Černínská 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Bellezza Apartments, Legerova 48</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Boutique Residence, Retezova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Court Apartments, Legerova 356/48</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Court Hotel, Wenzigova 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Palace Prague, Letenska 594/11</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Plaza Hotel, Rimska 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Prague Apartment Celakovskeho Sady, Čelakovského sady 434/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Prague City Apartments, Petřínská 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Residence Ungelt, Tyn 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Road Residence, Karlova 20</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Route apartment, Mostecká 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Route Mansions, Husova 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Royal Route Residence Prague, Celetná 592/23</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Apartment Balbinova, Balbinova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Apartment Charles Bridge, Smetanovo nábřeží 12</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Apartment Cimburkova, Cimburkova 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Apartment Dlouha, Dlouha 44</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Apartment with Garage, Prokopova 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Blodkova Apartment, Blodkova 1280/8</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Havelska Apartment, Havelska 524/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Hradební Apartment, Hradební 759/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Jindrisska apartment, Jindrisska 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Jungmannovo apartment, Jungmannovo namesti 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Navratilova apartment, Navratilova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Olivova apartment, Olivova 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Opatovická Apartment, Opatovicka 1661/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Opletalova apartment, Opletalova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Řeznická Apartment, Řeznická 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Taboritska apartment, Taboritska 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Vinohradska apartment, Vinohradska 403/17</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruterra Zitna apartment, Ve smeckach 1766/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Ruttera House with garden, Římovská 993/12</div></li>
                    
                        <li><div class="hotel suggestion-item">Růže Apartments, Lidická 36</div></li>
                    
                        <li><div class="hotel suggestion-item">Rybna 9 Apartments, Rybna 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Rybna Deluxe  Apartment, Rybna 29</div></li>
                    
                        <li><div class="hotel suggestion-item">RyeRooms, Žitná 560/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Salvator Boutique Hotel, Zitna 1656/45</div></li>
                    
                        <li><div class="hotel suggestion-item">Salvator Superior Apartments, Revoluční 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Salvatorska Street Apartment, Salvatorska 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Saturn 11 Apartment, Opatovická 6</div></li>
                    
                        <li><div class="hotel suggestion-item">Saturn 5, Vinohradská 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Savic Hotel, Jilska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Selinor Old Town Apartments, Štupartská 9</div></li>
                    
                        <li><div class="hotel suggestion-item">SG1 Hostel, Malostranske Namesti 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Sheraton Prague Charles Square Hotel, Zitna 8,</div></li>
                    
                        <li><div class="hotel suggestion-item">Sir Toby's Hostel, Delnicka 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Small Luxury Palace Residence, Nerudova 7</div></li>
                    
                        <li><div class="hotel suggestion-item">Smetana Hotel, Karoliny Světlé 208/34 11000 Praha 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Smíchov Apartment, Radlicka 70</div></li>
                    
                        <li><div class="hotel suggestion-item">Sokolska Youth Hostel, Sokolska 1792/52</div></li>
                    
                        <li><div class="hotel suggestion-item">Sportareál Satalice, U Arborky 397</div></li>
                    
                        <li><div class="hotel suggestion-item">Sporthostel Scandinavia, Drnovska 43/19</div></li>
                    
                        <li><div class="hotel suggestion-item">Squash penzion Hájek, Pod přehradou 18</div></li>
                    
                        <li><div class="hotel suggestion-item">St George hotel, Tyrsova 2, Praha 2</div></li>
                    
                        <li><div class="hotel suggestion-item">St. Jacob Apartment, Jakubská 670/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Stag Party Old Town Apartment, Ve Smečkách 31</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Angel, Na Belidle 27</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Apartment Za Poříčskou Bránou, Za Poříčskou bránou 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Apartments, Praha ul. Terronska 742/55</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Central Park, Ke Kapslovně 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Chelčického, Chelčického 11</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Freyova, Freyova 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Karlův Most, Křížovnické náměstí 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Malesice Tower, Pocernicka 699</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Molákova, Molákova 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Obecniho Dvora, U Obecniho Dvora 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Polská, Polská 1352/32</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Řehořova, Řehořova 27/44</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio U Akademie, U Akademie 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Usedlost Salabka</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio Winterovi, Mostecká 21</div></li>
                    
                        <li><div class="hotel suggestion-item">Studio with garden, Na ´bočí 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Studios Jaurisova, Jaurisova 515/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Studios Spálená, Spálená 47</div></li>
                    
                        <li><div class="hotel suggestion-item">Suite Ohrada, Na Hvizdalce 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Suite Prague Apartment, Vladislavova 1587/24</div></li>
                    
                        <li><div class="hotel suggestion-item">Sunset Aparthotel, Jana Masaryka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Sunset Hostel, Reznicka 656/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Temporary Guest House, Velkopřevorské nám. 490/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Terrace Studio Double, Za poříčskou branou 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Terrace Studio One, U Nemocenské Pojišťovny 2</div></li>
                    
                        <li><div class="hotel suggestion-item">The Apartment House Opatovicka, Opatovicka 14</div></li>
                    
                        <li><div class="hotel suggestion-item">The Art House, Krizovnicka 12</div></li>
                    
                        <li><div class="hotel suggestion-item">The Augustine Hotel, Letenska 12/33</div></li>
                    
                        <li><div class="hotel suggestion-item">The Balbin hotel pension, Balbinova 26</div></li>
                    
                        <li><div class="hotel suggestion-item">The Castle Apartments, Letenská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">The Charles Hotel, Josefska 1, 118 00 Prague 1</div></li>
                    
                        <li><div class="hotel suggestion-item">The Classic One Apartment Prague, Soukenicka 7</div></li>
                    
                        <li><div class="hotel suggestion-item">The Emblem Hotel, Platnerska 19</div></li>
                    
                        <li><div class="hotel suggestion-item">The Family's Nest, 5 Balbinova str.</div></li>
                    
                        <li><div class="hotel suggestion-item">The Golden Scissors, Na Kampe 494/6, Prague 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">The Golden Wheel, Nerudova 28</div></li>
                    
                        <li><div class="hotel suggestion-item">The Good King Wenceslas Apartment, Štěpánská 59</div></li>
                    
                        <li><div class="hotel suggestion-item">The Granary, Bohdanečská 259/1, 190 17 Praha-Vinoř-Kbely</div></li>
                    
                        <li><div class="hotel suggestion-item">The Grand Mark, Hybernská 12, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">The ICON Hotel &amp; Lounge, V Jámě 6</div></li>
                    
                        <li><div class="hotel suggestion-item">The Iron Gate Hotel &amp; Suites, Michalska 19</div></li>
                    
                        <li><div class="hotel suggestion-item">The Karoline Apartment, Karolíny Světlé 23</div></li>
                    
                        <li><div class="hotel suggestion-item">The Loft, Italská 1202/12</div></li>
                    
                        <li><div class="hotel suggestion-item">The Mark Luxury Hotel Prague, Hybernská 12</div></li>
                    
                        <li><div class="hotel suggestion-item">The Nicholas Hotel Residence, Malostranske namesti 5</div></li>
                    
                        <li><div class="hotel suggestion-item">The Old Town Luxury Hideaway Apartment, U Obecního dvora 6</div></li>
                    
                        <li><div class="hotel suggestion-item">The Old town's apartment, Dlouhá 730/35</div></li>
                    
                        <li><div class="hotel suggestion-item">The Palace Suites and Apartments, Resslova 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Theatre Residence, Opatovická 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Theatrino Hotel, Borivojova 53</div></li>
                    
                        <li><div class="hotel suggestion-item">Three Crowns Hotel, Cimburkova 28</div></li>
                    
                        <li><div class="hotel suggestion-item">Three Storks, Valdstejnske namesti 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Three-Bedroom Apartment Rosa,</div></li>
                    
                        <li><div class="hotel suggestion-item">Three-Bedroom Apartment St.Giles,</div></li>
                    
                        <li><div class="hotel suggestion-item">Tomasska Apartments, Tomasska 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Top Hotel Prague, Blazimska 1781/4</div></li>
                    
                        <li><div class="hotel suggestion-item">TopApartmany, Polská 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Travel Hotel Prague, Bendlova 154</div></li>
                    
                        <li><div class="hotel suggestion-item">Travellers Hostel Praha, Dlouha 33</div></li>
                    
                        <li><div class="hotel suggestion-item">Trendy downtown apartment DIY, Jeronýmova 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Twist Prague, Jana Masaryka 40</div></li>
                    
                        <li><div class="hotel suggestion-item">Tyn Church Apartment, Týnská Ulička 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Tyn Courtyard, Tyn 643, Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Tyn Yard Residence, Týn 637/7 110 00 Praha, Staré Město</div></li>
                    
                        <li><div class="hotel suggestion-item">U Bílé Lilie, 4 Jánský vršek, Prague, 118 00</div></li>
                    
                        <li><div class="hotel suggestion-item">U Cerneho Medveda- At The Black Bear, Tyn 6</div></li>
                    
                        <li><div class="hotel suggestion-item">U Cervene zidle - Red Chair Hotel, Liliova 4</div></li>
                    
                        <li><div class="hotel suggestion-item">U Kapra Apartments, Karlova 48</div></li>
                    
                        <li><div class="hotel suggestion-item">U Medvidku-Brewery Hotel, Na Perstyne 7</div></li>
                    
                        <li><div class="hotel suggestion-item">U Patrona Apartment, Dražického náměstí 60/4</div></li>
                    
                        <li><div class="hotel suggestion-item">U Šventika, Mezibranska 7</div></li>
                    
                        <li><div class="hotel suggestion-item">U Zeleného jalovce, Jalovcová 3</div></li>
                    
                        <li><div class="hotel suggestion-item">U Zlate Podkovy, Nerudova 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Ubytovna u Trajců, Vyšehradská 39</div></li>
                    
                        <li><div class="hotel suggestion-item">Union Hotel Prague, Ostrcilovo namesti 4</div></li>
                    
                        <li><div class="hotel suggestion-item">Unitas Hotel, Bartolomejska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">University hotel VSE, Koněvova 93/196</div></li>
                    
                        <li><div class="hotel suggestion-item">Urban Creme, Na Porici 48 110 00 Prague</div></li>
                    
                        <li><div class="hotel suggestion-item">Usedlost Kotlářka,  Kotlářka 115, 150 00 Prague 5-Košíře</div></li>
                    
                        <li><div class="hotel suggestion-item">V Lesíčku Residence, V lesíčku 8</div></li>
                    
                        <li><div class="hotel suggestion-item">Valcha Apartments, Bělohorská 105</div></li>
                    
                        <li><div class="hotel suggestion-item">Ventana Hotel Prague, Celetna 7 / 600, Entrance Stupartska 2</div></li>
                    
                        <li><div class="hotel suggestion-item">Vienna House Diplomat Prague, Evropská 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Vienna House Easy Chopin Prague, Opletalova 960/33, Prague, 110 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Viktoria Zizkov Penthouse, Krasova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Vila Josefina, Nad Borislavkou 34</div></li>
                    
                        <li><div class="hotel suggestion-item">Vila Krocinka, Obvodová 527/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Vila Lanna, V Sadech 1</div></li>
                    
                        <li><div class="hotel suggestion-item">Vila Mila, Kralovícka 5</div></li>
                    
                        <li><div class="hotel suggestion-item">Vila Zahrada, Ve Žlíbku 1885/76</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Adam, Doudova 14</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Andy, U Šípků 1029/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Betty, Kralovicka 15</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Bohemia, K Vidouli 831</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Grebovka/CEELI Institut/ roh Havlíčkovy sady a Rybalkova/Havlíčkovy sady 58/2</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa In A Bio Garden, U Hranic 10</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Jinonice, Puchmajerova 604/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Michle, Pod Sychrovem II 795 /47</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Milada, V Sareckem udoli 466/10</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa na Vinici, Dolnokrčská 304/39</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Olivia, Osická 19</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Révová Praha, Révová 759/15</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa St. Tropez, Ruzynska 197/14</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Venus, V Holešovičkách 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Villa Voyta Hotel &amp; Restaurant, K Novému dvoru 124/54</div></li>
                    
                        <li><div class="hotel suggestion-item">Vinohradsky dum, Legerova 758/60</div></li>
                    
                        <li><div class="hotel suggestion-item">Vintage Design Hotel Sax, Jansky Vrsek 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Visit in Prague II, Londynska 53</div></li>
                    
                        <li><div class="hotel suggestion-item">Visit in Prague, Husitská 89/41</div></li>
                    
                        <li><div class="hotel suggestion-item">Vítězná Apartment, Vitezna 559/4</div></li>
                    
                        <li><div class="hotel suggestion-item">Vladislav City Centre Apartments, Vladislavova 24</div></li>
                    
                        <li><div class="hotel suggestion-item">Vlkova Palace, Vlkova street 25</div></li>
                    
                        <li><div class="hotel suggestion-item">Vltava Penthouse, Náplavní 2</div></li>
                    
                        <li><div class="hotel suggestion-item">VN17 Apartments, Václavské náměstí 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Volcano Spa Hotel, K sopce 30</div></li>
                    
                        <li><div class="hotel suggestion-item">Vysehrad Apartment, Na Pankráci 995/5</div></li>
                    
                        <li><div class="hotel suggestion-item">Vyšehrad Castle Suite, Neklanova 22</div></li>
                    
                        <li><div class="hotel suggestion-item">Wallenstein Garden Apartments, Letenská 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Wandering Praha B&amp;B, Slezská 1357/1</div></li>
                    
                        <li><div class="hotel suggestion-item">Waterfront Apartment, Rohanské nábřeží 657/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Welcome Hostel Praguecentre, Žitná 17</div></li>
                    
                        <li><div class="hotel suggestion-item">Wellness &amp; SPA boutique Hotel pod Lipkami,  Pod Lipkami 8, Prague 150 00</div></li>
                    
                        <li><div class="hotel suggestion-item">Wellness Hotel Step, Malletova 1141</div></li>
                    
                        <li><div class="hotel suggestion-item">Wenceslas Square Apartment, Sokolská 59</div></li>
                    
                        <li><div class="hotel suggestion-item">Wenceslas Square Hotel, Mezibranská 13</div></li>
                    
                        <li><div class="hotel suggestion-item">Wenceslas Square Loft, Krakovska 9</div></li>
                    
                        <li><div class="hotel suggestion-item">Wenceslas Square Terraces, Václavské náměstí 3</div></li>
                    
                        <li><div class="hotel suggestion-item">Wenceslas square TOP apartment, Václavské náměstí 23</div></li>
                    
                        <li><div class="hotel suggestion-item">White House, Markova 10/594</div></li>
                    
                        <li><div class="hotel suggestion-item">Wine Pension Prague, Hubičkova 1396/27</div></li>
                    
                        <li><div class="hotel suggestion-item">Wonderful apartment in Vinohrady, Korunni 65</div></li>
                    
                        <li><div class="hotel suggestion-item">Yesplace Prague, Soukenická 2082/7</div></li>
                    
                        <li><div class="hotel suggestion-item">Your Home in Prague Apartment, Na Poříčí 1894/46</div></li>
                    
                        <li><div class="hotel suggestion-item">Zatecka N°14, Žatecká 14, Prague, 110 00, Czech Republic</div></li>
                    
                        <li><div class="hotel suggestion-item">Zizkov Tower 2, Borivojova 103</div></li>
                    
                        <li><div class="hotel suggestion-item">Zlata Brana Apartments, Husova 242/9</div></li>
                    
                        <li><div class="hotel suggestion-item">Zlatý kůň Golden Horse, Husova 18</div></li>
                    
                        <li><div class="hotel suggestion-item">Zvonařka Apartment, U Zvonařky 2536/1d</div></li>
                    
                        <li><div class="hotel suggestion-item">Zvonařkou Apartment, Pod Zvonařkou 1</div></li>

                        <li class="list-select" style="display: none;"><div class="hotel suggestion-item">Выбрать...</div></li>

                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="destination-hotels-continue" data-dismiss="modal">Продолжить</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-destination-cities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Write custom address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="departure-address" class="control-label label-modal">Choose your city</label>
                    
                    <div id="cities-list">
                    <div id="destination-cities-list">
                        <input class="list-search list-search-cities" placeholder="Search for your city" />
                        <ul class="list">

                        <li><div class="city suggestion-item">Auschwitz Memorial (Oswiecim)</div></li>
                    
                        <li><div class="city suggestion-item">Baden-Baden</div></li>
                    
                        <li><div class="city suggestion-item">Benesov</div></li>
                    
                        <li><div class="city suggestion-item">Berlin</div></li>
                    
                        <li><div class="city suggestion-item">Beroun</div></li>
                    
                        <li><div class="city suggestion-item">Blatna</div></li>
                    
                        <li><div class="city suggestion-item">Brandýs nad Labem-Stará Boleslav</div></li>
                    
                        <li><div class="city suggestion-item">Bratislava</div></li>
                    
                        <li><div class="city suggestion-item">Brehyne-Pecopala</div></li>
                    
                        <li><div class="city suggestion-item">Brno</div></li>
                    
                        <li><div class="city suggestion-item">Brno Airport</div></li>
                    
                        <li><div class="city suggestion-item">Budapest</div></li>
                    
                        <li><div class="city suggestion-item">Ceska Lipa</div></li>
                    
                        <li><div class="city suggestion-item">Ceske Budejovice</div></li>
                    
                        <li><div class="city suggestion-item">Český Krumlov</div></li>
                    
                        <li><div class="city suggestion-item">Chodov (Karlovy Vary)</div></li>
                    
                        <li><div class="city suggestion-item">Chomutov</div></li>
                    
                        <li><div class="city suggestion-item">Darkov Spa (Lazne Darkov)</div></li>
                    
                        <li><div class="city suggestion-item">Doksy</div></li>
                    
                        <li><div class="city suggestion-item">Dolni Dvoriste</div></li>
                    
                        <li><div class="city suggestion-item">Dresden</div></li>
                    
                        <li><div class="city suggestion-item">Frankfurt</div></li>
                    
                        <li><div class="city suggestion-item">Frantiskovy Lazne</div></li>
                    
                        <li><div class="city suggestion-item">Görlitz</div></li>
                    
                        <li><div class="city suggestion-item">Hallstatt</div></li>
                    
                        <li><div class="city suggestion-item">Hamburg, Germany</div></li>
                    
                        <li><div class="city suggestion-item">Harrachov</div></li>
                    
                        <li><div class="city suggestion-item">High Jump Hříměždice</div></li>
                    
                        <li><div class="city suggestion-item">Hluboká nad Vltavou</div></li>
                    
                        <li><div class="city suggestion-item">Holašovice village</div></li>
                    
                        <li><div class="city suggestion-item">Hořovice / Beroun</div></li>
                    
                        <li><div class="city suggestion-item">Hradec Králové</div></li>
                    
                        <li><div class="city suggestion-item">Ingolstadt</div></li>
                    
                        <li><div class="city suggestion-item">Innsbruck</div></li>
                    
                        <li><div class="city suggestion-item">Jablonec nad Nisou</div></li>
                    
                        <li><div class="city suggestion-item">Jachymov</div></li>
                    
                        <li><div class="city suggestion-item">Janske Lazne</div></li>
                    
                        <li><div class="city suggestion-item">Jelenia Gora</div></li>
                    
                        <li><div class="city suggestion-item">Karlovy Vary</div></li>
                    
                        <li><div class="city suggestion-item">Karlštejn</div></li>
                    
                        <li><div class="city suggestion-item">Kladno</div></li>
                    
                        <li><div class="city suggestion-item">Klatovy</div></li>
                    
                        <li><div class="city suggestion-item">Konopiště</div></li>
                    
                        <li><div class="city suggestion-item">Krakow-Poland</div></li>
                    
                        <li><div class="city suggestion-item">Kralupy nad Vltavou</div></li>
                    
                        <li><div class="city suggestion-item">Kutná Hora</div></li>
                    
                        <li><div class="city suggestion-item">Leipzig</div></li>
                    
                        <li><div class="city suggestion-item">Liberec</div></li>
                    
                        <li><div class="city suggestion-item">Linz</div></li>
                    
                        <li><div class="city suggestion-item">Litomerice</div></li>
                    
                        <li><div class="city suggestion-item">Litomysl</div></li>
                    
                        <li><div class="city suggestion-item">Litvinov</div></li>
                    
                        <li><div class="city suggestion-item">Loucen</div></li>
                    
                        <li><div class="city suggestion-item">Luzec / Karlovy Vary / SPA Hotel Zámek Luzec </div></li>
                    
                        <li><div class="city suggestion-item">Marianske Lazne</div></li>
                    
                        <li><div class="city suggestion-item">Mcely</div></li>
                    
                        <li><div class="city suggestion-item">Melnik</div></li>
                    
                        <li><div class="city suggestion-item">Milovice</div></li>
                    
                        <li><div class="city suggestion-item">Milovice - Let It Roll</div></li>
                    
                        <li><div class="city suggestion-item">Mlada boleslav</div></li>
                    
                        <li><div class="city suggestion-item">Most</div></li>
                    
                        <li><div class="city suggestion-item">Munich</div></li>
                    
                        <li><div class="city suggestion-item">Nelahozeves</div></li>
                    
                        <li><div class="city suggestion-item">Nurnberg</div></li>
                    
                        <li><div class="city suggestion-item">Nymburk</div></li>
                    
                        <li><div class="city suggestion-item">Olomouc</div></li>
                    
                        <li><div class="city suggestion-item">Ondrejov</div></li>
                    
                        <li><div class="city suggestion-item">Ostrava</div></li>
                    
                        <li><div class="city suggestion-item">Pardubice</div></li>
                    
                        <li><div class="city suggestion-item">Pardubice Airport</div></li>
                    
                        <li><div class="city suggestion-item">Passau</div></li>
                    
                        <li><div class="city suggestion-item">Pec pod Snezkou</div></li>
                    
                        <li><div class="city suggestion-item">Pilsen (Plzeň)</div></li>
                    
                        <li><div class="city suggestion-item">Pisek</div></li>
                    
                        <li><div class="city suggestion-item">Podebrady</div></li>
                    
                        <li><div class="city suggestion-item">Poznaň</div></li>
                    
                        <li><div class="city suggestion-item">Prachatice</div></li>
                    
                        <li><div class="city suggestion-item">Prerov</div></li>
                    
                        <li><div class="city suggestion-item">Pruhonice</div></li>
                    
                        <li><div class="city suggestion-item">Rakovnik</div></li>
                    
                        <li><div class="city suggestion-item">Regensburg</div></li>
                    
                        <li><div class="city suggestion-item">Ricany</div></li>
                    
                        <li><div class="city suggestion-item">Rokytnice nad Jizerou</div></li>
                    
                        <li><div class="city suggestion-item">Rozvadov</div></li>
                    
                        <li><div class="city suggestion-item">Rychnov nad Kneznou</div></li>
                    
                        <li><div class="city suggestion-item">Salzburg</div></li>
                    
                        <li><div class="city suggestion-item">Spindleruv Mlyn</div></li>
                    
                        <li><div class="city suggestion-item">Stolpen 01833 Stolpen, Pirnaer Landstr. 24</div></li>
                    
                        <li><div class="city suggestion-item">Szklarska Poręba</div></li>
                    
                        <li><div class="city suggestion-item">Telc</div></li>
                    
                        <li><div class="city suggestion-item">Teplice</div></li>
                    
                        <li><div class="city suggestion-item">Terezin</div></li>
                    
                        <li><div class="city suggestion-item">Trebic</div></li>
                    
                        <li><div class="city suggestion-item">Trebon</div></li>
                    
                        <li><div class="city suggestion-item">Trinec</div></li>
                    
                        <li><div class="city suggestion-item">Trutnov</div></li>
                    
                        <li><div class="city suggestion-item">Turnov</div></li>
                    
                        <li><div class="city suggestion-item">Usti nad Labem</div></li>
                    
                        <li><div class="city suggestion-item">Velke Pavlovice</div></li>
                    
                        <li><div class="city suggestion-item">Velke Popovice</div></li>
                    
                        <li><div class="city suggestion-item">Vienna</div></li>
                    
                        <li><div class="city suggestion-item">Vienna International Airport, Schwechat</div></li>
                    
                        <li><div class="city suggestion-item">Vilshofen an der Donau</div></li>
                    
                        <li><div class="city suggestion-item">Vlasim</div></li>
                    
                        <li><div class="city suggestion-item">Vysoky Chlumec</div></li>
                    
                        <li><div class="city suggestion-item">Walbrzych</div></li>
                    
                        <li><div class="city suggestion-item">Warsaw</div></li>
                    
                        <li><div class="city suggestion-item">Wroclaw</div></li>
                    
                        <li><div class="city suggestion-item">Zelezna Ruda</div></li>
                    
                        <li><div class="city suggestion-item">Zlin</div></li>
                    
                        <li><div class="city suggestion-item">Zurich</div></li>
                        </ul>
                    </div>
                    </div>

                    <p>Write an address of location...</p>
                    <input type="text" name="destination_custom_citie_address" id="destination_custom_citie_address" class="form-control" placeholder="Write an address">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="destination-cities-continue" data-dismiss="modal">Продолжить</button>
            </div>
        </div>
    </div>
</div>
<!-- -->
