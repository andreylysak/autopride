<?php 
    $url = url()->current();

    include dirname(__FILE__) . '/libs/simple_html_dom.php';
?>

@extends('layouts.app', ['body_class' => 'single'])

@section('title', 'Autopride')

@section('content')

<main>  
    <section class="content news">
        <div class="container">
            <nav class="breadcrumbs" aria-label="Breadcrumbs">
                <ol class="breadcrumbs__list">
                    <li>
                        <a href="/">Home</a>
                        <span class="breadcrumbs__separator" aria-hidden="true">
                            <svg class="breadcrumbs-icon" viewBox="0 0 16 16"><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline></g></svg>
                        </span>
                    </li>
                    <li aria-current="page">{{ str_limit('Статьи', $limit = 20, $end = '...') }}</li>
                </ol>
            </nav>
            <h2 class="title-section">Статьи</h2>
            @foreach($posts as $post)
            <?php 
                $date_created = $post['created_at']->toDateTimeString();
                $date_created = date("jS F, Y", strtotime($date_created));
                $post_content = html_entity_decode($post->body);
                //$post_prev_content = preg_split('~<p>.*?</p>~', $post_prev_content);
                //$pattern = "~<p>.*?</p>~";
                //preg_match($pattern, $post_content, $post_prev_content);
                //$post_prev_content = preg_replace("/<img[^>]+\>/i", "", $post_prev_content);
                //preg_match('#^<p>(.*?)</p>#i', $post_content, $par_1);
                $html = new simple_html_dom($post_content);
                $html->load($post_content);
                
                $post_prev_content = array();
                unset($post_prev_content);
                for ($i = 0; $i < 1; $i++) {
                    $paragraph = $html->find('p', $i);
                    $paragraph = preg_replace("/<img[^>]+\>/i", "", $paragraph);
                    if ($paragraph != '<p></p>') {
                        $post_prev_content[] = $paragraph;
                    }
                }
            ?>
            <div class="article">
                @if ($post->image)
                <a href="{{$url}}/{{ $post->slug }}">
                    <img src="{{ Voyager::image( $post->image ) }}" class="thumbnail" alt="">
                </a>
                @else
                <a href="{{$url}}/{{ $post->slug }}">
                    <img src="{{ asset('public/site_img/no_image.png') }}" class="thumbnail" alt="">
                </a>
                @endif
                <div class="excerpt">
                    <a class="post-title-link" href="{{$url}}/{{ $post->slug }}">
                        <h3>{{ $post->title }}</h3>
                    </a>
                    <span class="date">{{ $date_created }}</span>
                    @foreach($post_prev_content as $parahraph)
                        {!! $parahraph !!}
                    @endforeach
                    <a class="read-more" href="{{$url}}/{{ $post->slug }}">Подробнее</a>
                </div>
            </div>
            <hr>
            @endforeach
            <div class="wrap-pagination">
                {{ $posts->links() }}
            </div>
        </div>
	</section>
</main>

@endsection


