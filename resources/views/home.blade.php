<?php 
	$url = url()->current();
?>

@extends('layouts.app', ['body_class' => 'home'])

@section('title', 'Autopride')

@section('content')

<main>
	<section class="solution" style="background-image: url('{{ asset('public/site_img/front-services.png') }}');" >
		<div class="container">
			<h2 class="title-section">{{__('Our services')}}</h2>
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
							<h3 class="service-link"><a href="{{$url}}/services/{{ $service->url }}">{{ $service->title }}</a></h3>
						</div>
					</div>
				@endforeach
			</div>
			<a href="/featured-services" class="button red">{{__('FEATURED OFFERS')}}</a>
		</div>
	</section>
	<section class="advantages">
		<div class="container">
			<h2 class="title-section">{{ __('Why do we need to plan a transfer with us?') }}</h2>
			<div class="row">
				<div class="col-12 col-md-7 col-xl-7">
					<div class="item ">
						<div class="icon">
							<img src="{{ asset('public/site_img/advantage-1.png') }}" alt="">
						</div>
						<div class="description">
							{{__('Variety of car brands')}}
						</div>
					</div>
					<div class="item ">
						<div class="icon">
							<img src="{{ asset('public/site_img/advantage-2.png') }}" alt="">
						</div>
						<div class="description">
							{{__('24-hour support service')}}
						</div>
					</div>
					<div class="item ">
						<div class="icon">
							<img src="{{ asset('public/site_img/advantage-3.png') }}" alt="">
						</div>
						<div class="description">
							{{__('High professionalism of the driver')}}
						</div>
					</div>
				</div>
				<div class="col-12 col-md-5 col-xl-5">
					<img src="{{ asset('public/site_img/home-advantage.png') }}" alt="">
				</div>
			</div>
		</div>
	</section>
</main>

@endsection