<?php 
    $url = url()->current();
?>

@extends('layouts.app', ['body_class' => 'single'])

@section('title', 'Autopride')

@section('content')

<main>
    <section class="content account-section">
        <div class="container">
            <nav class="breadcrumbs" aria-label="Breadcrumbs">
                <ol class="breadcrumbs__list">
                    <li>
                        <a href="/">Home</a>
                        <span class="breadcrumbs__separator" aria-hidden="true">
                            <svg class="breadcrumbs-icon" viewBox="0 0 16 16"><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline></g></svg>
                        </span>
                    </li>
                    <li aria-current="page">Account</li>
                </ol>
            </nav>
            <section class="section-content">
                <h1 class="profile-page-title">Заказ № {{$order->order_id}}</h1>
                <div class="profile-block">
                    <div class="group">
                        <a href="/account" class="btn btn-default back-btn"><i class="fas fa-angle-left"></i>Назад</a>
                        <a href="/logout" class="btn btn-default profile-page-logout-btn">Выйти</a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-section">
                                <div class="profile-section-content">
                                    <h4 class="page-order-status">Status:
                                        @if ($order->status == 'On-Hold')
                                        <span class="order-status order-status-on-hold">{{$order->status}}</span>
                                        @elseif ($order->status == 'Cancelled')
                                        <span class="order-status order-status-cancelled">{{$order->status}}</span>
                                        @elseif ($order->status == 'Completed')
                                        <span class="order-status order-status-completed">{{$order->status}}</span>
                                        @elseif ($order->status == 'Processing')
                                        <span class="order-status order-status-processing">{{$order->status}}</span>
                                        @endif
                                    </h4>
                                    <table>
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
                                            <td>{{$order->car_id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Adult Count</th>
                                            <td>{{$order->adult_count}}</td>
                                        </tr>
                                        <tr>
                                            <th>Child5plus Count</th>
                                            <td>{{$order->child5plus_count}}</td>
                                        </tr>
                                        <tr>
                                            <th>Child1plus Count</th>
                                            <td>{{$order->child1plus_count}}</td>
                                        </tr>
                                        <tr>
                                            <th>Infant Count</th>
                                            <td>{{$order->infant_count}}</td>
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
                                            <th>Customer Message</th>
                                            <td>{{$order->customer_message}}</td>
                                        </tr>
                                        <tr>
                                            <th>Created at</th>
                                            <td>{{$order->created_at}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		</div>
	</section>
</main>

@endsection