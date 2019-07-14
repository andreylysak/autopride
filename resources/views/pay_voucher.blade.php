<?php 
    $url = url()->current();
    $passangers = ($order->adult_count + $order->child5plus_count + $order->child1plus_count + $order->infant_count);
?>

@extends('layouts.app', ['body_class' => 'single'])

@section('title', 'Autopride')

@section('content')

<main>
    <section class="content account-section">
        <div class="container">
            <section class="section-content">
                <h1 class="voucher-title">Оплата ваучера</h1>
                <h4 class="voucher-id">Ваучер ID: {{$order->voucher_id}}</h4>
                <div class="profile-block">
                    <div class="row">
                        <div class="col-6 border-right">
                            <div class="voucher-section">
                                <h3 class="voucher-section-title">Детали заказа</h3>
                                <table class="voucher-table">
                                    <tr>
                                        <th>Order ID</th>
                                        <td>{{$order->order_id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Departure</th>
                                        <td>{{$order->departure}}</td>
                                    </tr>
                                    <tr>
                                        <th>Destination</th>
                                        <td>{{$order->destination}}</td>
                                    </tr>
                                    <tr>
                                        <th>Departure Date</th>
                                        <td>{{$order->departure_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>Departure Time</th>
                                        <td>{{$order->departure_time}}</td>
                                    </tr>
                                    <tr>
                                        <th>Return Date</th>
                                        <td>{{$order->return_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>Return Time</th>
                                        <td>{{$order->return_time}}</td>
                                    </tr>
                                    <tr>
                                        <th>Car</th>
                                        <td>{{$car_title->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Passangers</th>
                                        <td>{{$passangers}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer First Name</th>
                                        <td>{{$order->customer_first_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer Last Name</th>
                                        <td>{{$order->customer_last_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer Email</th>
                                        <td>{{$order->customer_email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer Phone</th>
                                        <td>{{$order->customer_phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Сумма</th>
                                        <td>{{$order->total_price}} CZK</td>
                                    </tr>
                                    <tr>
                                        <th>Статус платежа</th>
                                        <td>{{$order->payment_status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Created at</th>
                                        <td>{{$order->created_at}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="voucher-section">
                                @if ($order->payment_status == 'not paid' && !$order->payment_method)
                                <h3 class="voucher-section-title">Выбирете тип оплаты</h3>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="payment-method payment-item-1">
                                            <div class="payment-method-title">
                                                Cash to Driver
                                            </div>
                                            <div class="payment-method-logos">
                                                <i class="far fa-money-bill-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="payment-method payment-item-2">
                                            <div class="payment-method-title">
                                                Card to Driver
                                            </div>
                                            <div class="payment-method-logos">
                                                <i class="fas fa-credit-card"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-10">
                                    <div class="col-6">
                                        <div class="payment-method payment-item-3">
                                            <div class="payment-method-title">
                                                Card online
                                            </div>
                                            <div class="payment-method-logos">
                                                <img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png">
                                                <img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="payment-method payment-item-4">
                                            <div class="payment-method-title">
                                                PayPal
                                            </div>
                                            <div class="payment-method-img">
                                                <img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="voucher-total-price-title">Сумма: {{$order->total_price}} CZK</h3>
                                @else
                                <h3 class="voucher-section-title">Статус платежа</h3>
                                <div class="row">
                                    <div class="col-12">
                                        @if ($order->payment_method)
                                            <h4 class="status-paid">Выбран метод оплаты: {{$order->payment_method}}</h4>
                                        @else
                                            <h4 class="status-paid">Ваучер оплачен.</h4>
                                        @endif
                                    </div>
                                </div>
                                @endif
                            </div>
                            @if ($order->payment_status == 'not paid' && !$order->payment_method)
                            <div class="panel-footer">
                                <div id="payment_method_cash_to_driver" class="pay-btn-block">
                                    <p class="selected-payment">Метод оплаты: <span class="form-selected-payment-name">Cash to Driver</span></p>
                                    <div>
                                        <form action="{{route('postPayTransferVoucherConfirmation')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="voucher_id" value="{{$order->voucher_id}}">
                                            <input type="hidden" name="payment_method_field" value="cash_to_driver">
                                            <button type="submit" class="button red" id="voucher-pay-btn">Подтвердить</button>
                                        </form>
                                    </div>
                                </div>
                                <div id="payment_method_card_to_driver" class="pay-btn-block">
                                    <p class="selected-payment">Метод оплаты: <span class="form-selected-payment-name">Card to Driver</span></p>
                                    <div>
                                        <button class="button red" id="voucher-pay-btn">Подтвердить</button>
                                    </div>
                                </div>
                                <div id="payment_method_card_online" class="pay-btn-block">
                                    <p class="selected-payment">Метод оплаты: <span class="form-selected-payment-name">Card online</span></p>
                                    <div>
                                        {!!$liqpay_form_html!!}
                                    </div>
                                </div>
                                <div id="payment_method_PayPal" class="pay-btn-block">
                                    <p class="selected-payment">Метод оплаты: <span class="form-selected-payment-name">PayPal</span></p>
                                    <div>
                                        <button class="button red" id="voucher-pay-btn" disabled="disabled">Оплатить</button>
                                    </div>
                                </div>
                                <div id="payment_method_none" class="pay-btn-block payment-selected">
                                    <p class="selected-payment">Метод оплаты: <span class="form-selected-payment-name">не выбрано</span></p>
                                    <div>
                                        <button class="button red" id="voucher-pay-btn" disabled="disabled">Выбирете метод оплаты</button>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
		</div>
	</section>
</main>

@endsection