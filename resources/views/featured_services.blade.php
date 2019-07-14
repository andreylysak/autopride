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
                    <li aria-current="page">{{ str_limit('Услуги', $limit = 20, $end = '...') }}</li>
                </ol>
            </nav>
            <section class="solution all-solutions">
                    <h2 class="title-section text-center">{{ __('FEATURED OFFERS')}}</h2>
                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-md-4 col-xl-4 item">
                                <div class="description">
                                    @if ($service->page_img)
                                        <img src="{{ Voyager::image( $service->page_img ) }}">
                                    @else
                                        <img src="{{ asset('public/site_img/no_image.png') }}">
                                    @endif
                                </div>
                                <div class="title">
                                    <h3 class="service-link"><a href="{{url('/')}}/services/{{ $service->url }}">{{ $service->title }}</a></h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="/services" class="button red all-services-btn">ВСЕ УСЛУГИ</a>
            </section>
		</div>
	</section>
</main>

@endsection