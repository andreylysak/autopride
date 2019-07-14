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
                <h1 class="profile-page-title">Заказ №{{$order->order_id}}</h1>
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
                                            <th>ID</th>
                                            <td>{{$order->order_id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Order Title</th>
                                            <td>{{$order->service_title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Customer Name</th>
                                            <td>{{$order->customer_name}}</td>
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
                                            <th>Departure Point</th>
                                            <td>{{$order->departure_point}}</td>
                                        </tr>
                                        <tr>
                                            <th>Destination Point</th>
                                            <td>{{$order->destination_point}}</td>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <td>{{$order->date}}</td>
                                        </tr>
                                        <tr>
                                            <th>Time</th>
                                            <td>{{$order->time}}</td>
                                        </tr>
                                        <tr>
                                            <th>Comment</th>
                                            <td>{{$order->comment}}</td>
                                        </tr>
                                        <tr>
                                            <th>Car</th>
                                            <td>{{$order->car}}</td>
                                        </tr>
                                        <tr>
                                            <th>Number of passengers</th>
                                            <td>{{$order->number_of_passengers}}</td>
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