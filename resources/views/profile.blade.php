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
                    <li aria-current="page">Profile</li>
                </ol>
            </nav>
            <section class="section-content">
                <h1 class="profile-page-title">Профиль</h1>
                <div class="profile-block">
                    <div class="group profile-block-title">
                        <h2 class="profile-username">{{Auth::user()->name}}</h2>
                        <a href="/logout" class="btn btn-default profile-page-logout-btn">Выйти</a>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="profile-section profile-section-content">
                                <div class="profile-section-header profile-section-header-asside">
                                    <div class="section-header-group group">
                                        <h3 class="profile-subtitle subtitle-header">Личная информация</h3>
                                    </div>
                                </div>
                                <p class="profile-info-item-id">ID: <span>{{Auth::user()->id}}</span></p>
                                <div class="profile_img">
                                    @if ($account->photo)
                                        <img src="{{ asset('public/accounts_images/'.$account->photo) }}">
                                    @else
                                        <img src="{{ asset('public/site_img/no_image.png') }}">
                                    @endif
                                </div>
                                <div class="profile-information">
                                    <table class="main-table">
                                        <tr>
                                            <th>Имя</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                @if ($account->firstname)
                                                <p class="profile-info-item">{{ $account->firstname }}</p>
                                                @else
                                                <p class="profile-info-item-empty">{{ $account->firstname }}</p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Фамилия</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                @if ($account->lastname)
                                                <p class="profile-info-item">{{ $account->lastname }}</p>
                                                @else
                                                <p class="profile-info-item-empty">{{ $account->lastname }}</p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Електронная почта</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                @if (Auth::user()->email)
                                                <p class="profile-info-item">{{Auth::user()->email}}</p>
                                                @else
                                                <p class="profile-info-item-empty">{{Auth::user()->email}}</p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Телефон</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                @if ($account->phone)
                                                <p class="profile-info-item">{{ $account->phone }}</p>
                                                @else
                                                <p class="profile-info-item-empty">{{ $account->phone }}</p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Город</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                @if ($account->location)
                                                <p class="profile-info-item">{{ $account->location }}</p>
                                                @else
                                                <p class="profile-info-item-empty">{{ $account->location }}</p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Адресс:</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                @if ($account->address)
                                                <p class="profile-info-item">{{ $account->address }}</p>
                                                @else
                                                <p class="profile-info-item-empty">{{ $account->address }}</p>
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <a href="/account/edit-account" class="btn btn-primary">Редактировать профиль</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="profile-section group">
                                <div class="profile-section-header">
                                    <div class="section-header-group group">
                                        <h3 class="profile-subtitle subtitle-header">История заказов "Услуги"</h3>
                                        <a href="/services" class="btn btn-primary order-transfer-btn order-transfer-btn-header">Заказать услугу</a>
                                    </div>
                                </div>
                                <div class="profile-section-content">
                                    <table class="table main-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Order Title</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$order->order_id}}</td>
                                                <td>{{$order->service_title}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td>
                                                    @if ($order->status == 'On-Hold')
                                                    <span class="order-status order-status-on-hold">{{$order->status}}</span>
                                                    @elseif ($order->status == 'Cancelled')
                                                    <span class="order-status order-status-cancelled">{{$order->status}}</span>
                                                    @elseif ($order->status == 'Completed')
                                                    <span class="order-status order-status-completed">{{$order->status}}</span>
                                                    @elseif ($order->status == 'Processing')
                                                    <span class="order-status order-status-processing">{{$order->status}}</span>
                                                    @endif
                                                </td>
                                                <td><a class="btn btn-default" href="/account/orders/{{$order->order_id}}">Просмотр</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <a href="/services" class="btn btn-primary order-transfer-btn order-transfer-btn-footer">Заказать услугу</a>
                                </div>
                            </div>
                            <div class="profile-section profile-section-transfer group">
                                <div class="profile-section-header">
                                    <div class="section-header-group group">
                                        <h3 class="profile-subtitle subtitle-header">История заказов "Трансфер"</h3>
                                        <a href="/services" class="btn btn-primary order-transfer-btn order-transfer-btn-header">Заказать трансфер</a>
                                    </div>
                                </div>
                                <div class="profile-section-content">
                                    <table class="table main-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Departure</th>
                                                <th scope="col">Destination</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($transfer_orders as $order)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$order->order_id}}</td>
                                                <td>{{$order->departure}}</td>
                                                <td>{{$order->destination}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td>
                                                    @if ($order->status == 'On-Hold')
                                                    <span class="order-status order-status-on-hold">{{$order->status}}</span>
                                                    @elseif ($order->status == 'Cancelled')
                                                    <span class="order-status order-status-cancelled">{{$order->status}}</span>
                                                    @elseif ($order->status == 'Completed')
                                                    <span class="order-status order-status-completed">{{$order->status}}</span>
                                                    @elseif ($order->status == 'Processing')
                                                    <span class="order-status order-status-processing">{{$order->status}}</span>
                                                    @endif
                                                </td>
                                                <td><a class="btn btn-default" href="/account/transfer-orders/{{$order->order_id}}">Просмотр</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <a href="/services" class="btn btn-primary order-transfer-btn order-transfer-btn-footer">Заказать трансфер</a>
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