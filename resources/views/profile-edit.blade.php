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
                    <li>
                        <a href="/account">Account</a>
                        <span class="breadcrumbs__separator" aria-hidden="true">
                            <svg class="breadcrumbs-icon" viewBox="0 0 16 16"><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline></g></svg>
                        </span>
                    </li>
                    <li aria-current="page">Edit Account</li>
                </ol>
            </nav>
            @if(session()->has('message'))
                <div class="alert alert-success page-alert">
                    {{ session()->get('message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger page-alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <section class="section-content">
                <h1 class="profile-page-title">Редактировать профиль</h1>
                <div class="profile-block">
                    <div class="group">
                        <a href="/account" class="btn btn-default back-btn"><i class="fas fa-angle-left"></i>Назад</a>
                        <a href="/logout" class="btn btn-default profile-page-logout-btn">Выйти</a>
                    </div>
                    <div class="edit-profile-block">
                        <div class="row">
                            <div class="col-4">
                                <h3 class="profile-subtitle">Информация</h3>
                                <form method="POST" action="{{ route('postEditAccount') }}">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <div class="form-group">
                                        <label for="formGroupFirstName">Имя</label>
                                        <input type="text" name="firstname" class="form-control" id="formGroupFirstName" placeholder="Имя" value="{{ $account->firstname }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupLastName">Фамилия</label>
                                        <input type="text" name="lastname" class="form-control" id="formGroupLastName" placeholder="Фамилия" value="{{ $account->lastname }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupEmail">Електронная почта</label>
                                        <input type="email" name="email" class="form-control" id="formGroupEmail" placeholder="Електронная почта" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupUsername">Никнейм</label>
                                        <input type="text" name="name" class="form-control" id="formGroupUsername" placeholder="Никнейм" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupPassword">Новый пароль</label>
                                        <input type="password" name="password" class="form-control" id="formGroupPassword" placeholder="Новый пароль">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupPhone">Телефон</label>
                                        <input type="text" name="phone" class="form-control" id="formGroupPhone" placeholder="Телефон" value="{{ $account->phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupCitie">Город</label>
                                        <input type="text" name="city" class="form-control" id="formGroupCitie" placeholder="Город" value="{{ $account->location }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupAddress">Адресс</label>
                                        <input type="text" name="address" class="form-control" id="formGroupAddress" placeholder="Адресс" value="{{ $account->address }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" id="" value="Сохранить">
                                    </div>
                                </form>
                            </div>
                            <div class="col-4">
                                <h3 class="profile-subtitle">Изображение</h3>

                                @if (\Session::has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <p class="alert-content"><strong>{!! \Session::get('success') !!}</strong></p>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <div class="edit-profile-image">
                                    <div class="profile_img">
                                        @if ($account->photo)
                                            <img src="{{ asset('public/accounts_images/'.$account->photo) }}">
                                        @else
                                            <img src="{{ asset('public/site_img/no_image.png') }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-edit-profile-image">
                                    <form action="{{ route('postUploadAccountImage') }}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="file" name="input_img" class="form-control-file" id="profile-image-file">
                                        </div>
                                        @if ($account->photo)
                                        <button type="submit" name="submit" class="btn btn-default">Изменить изображение</button>
                                        @else
                                        <button type="submit" name="submit" class="btn btn-default">Загрузить изображение</button>
                                        @endif
                                    </form>
                                </div>
                                @if ($account->photo)
                                <div class="form-delete-profile-image">
                                    <form action="{{ route('postDeleteAccountImage') }}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <button type="submit" name="submit" class="btn btn-default"><i class="far fa-trash-alt"></i>Удалить</button>
                                    </form>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		</div>
	</section>
</main>

@endsection