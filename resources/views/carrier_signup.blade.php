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
                    <li aria-current="page">{{ str_limit('Carrier Registration', $limit = 20, $end = '...') }}</li>
                </ol>
            </nav>
            <div class="article">
				<div class="carrier-registration-block">
                    <h4 class="registration-block-title">Регистрация перевозчика</h4>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger page-alert sign-up-alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form id="carrier-registration-form" action="{{route('postCarrierSignup')}}" method="POST">
                        @csrf
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-4 pt-0">Тип перевозчика</legend>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="carrier_type" id="gridRadios1" value="legal_person" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Юридическое лицо 
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="carrier_type" id="gridRadios2" value="individual_person">
                                        <label class="form-check-label" for="gridRadios2">
                                            Физическое лицо 
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <label for="form-input" class="col-sm-4 col-form-label">Название компании</label>
                            <div class="col-sm-8">
                                <input type="text" name="company_name" class="form-control" id="form-input" placeholder="Введите название компании">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form-input" class="col-sm-4 col-form-label">Номер телефона</label>
                            <div class="col-sm-8">
                                <input type="text" name="phone" class="form-control" id="form-input" placeholder="Введите номер телефона">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form-input" class="col-sm-4 col-form-label">Адрес эл. почты</label>
                            <div class="col-sm-8">
                                <input type="email" name="email" class="form-control" id="form-input" placeholder="Введите адрес эл. почты">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form-input" class="col-sm-4 col-form-label">Город расположения</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control" id="form-input" placeholder="Город расположения">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                    Я прочитал и принимаю
                                    <a href="/" target="_blank">
                                        политику конфиденциальности
                                    </a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</section>
</main>

@endsection