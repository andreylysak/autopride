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
                    <li aria-current="page">Search</li>
                </ol>
            </nav>
            <div class="article">
                <h2 class="title-section">Search @if(isset($query))"{{$query}}"@endif</h2>
                <form action="{{route('search-form')}}" method="post" id="search-form">
                    @csrf
                    <div class="form-row align-items-center">
                        <div class="col">
                            <label class="sr-only" for="SearchFormInputLarge">Search</label>
                            <input type="text" name="query" class="form-control form-control-lg mb-2" id="SearchFormInputLarge" placeholder="Search...">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary btn-search-large mb-2">Search</button>
                        </div>
                    </div>
                </form>

                @if(isset($search_result_count))
                    <!-- <p>The Search results for your query <b> {{ $query }} </b></p> -->
                    @if(isset($posts) && count($posts) > 0)
                    <h2 class="s-result-title">News search result:</h2>
                    <ol class="search-result">
                        @foreach($posts as $post_item)
                        <li class="search-result-item"><h3><a href="{{env('APP_URL')}}/news/{{$post_item->slug}}">{{$post_item->title}}</a></h3></li>
                        @endforeach
                    </ol>
                    @endif

                    @if(isset($pages) && count($pages) > 0)
                    <h2 class="s-result-title">Pages search result:</h2>
                    <ol class="search-result">
                        @foreach($pages as $post_item)
                        <li class="search-result-item"><h3><a href="{{env('APP_URL')}}/pages/{{$post_item->slug}}">{{$post_item->title}}</a></h3></li>
                        @endforeach
                    </ol>
                    @endif
                @endif

                @if(isset($message))
                    <h3 class="s-result-title">{{$message}}</h3>
                @endif
			</div>
		</div>
	</section>
</main>

@endsection