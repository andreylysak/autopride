<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

	<div class="container">
        <h1>Pages</h1>
        {{menu('Frontend site menu')}}
		<div class="row">
		@foreach($pages as $page)
            <?php 
                $date_created = $page['created_at']->toDateTimeString();
                $date_created = date("jS F, Y", strtotime($date_created));
                $url = url()->current();
            ?>
			<div class="col-md-4">
				<a href="{{$url}}/{{ $page->slug }}">
                    @if ($page->image)
                    <img src="{{ Voyager::image( $page->image ) }}" style="width:100%">
                    @else
                    <img src="{{ asset('site_img/no_image.png') }}" style="width:100%">
                    @endif
					<span>{{ $page->title }}</span>
                    <p>{{ $date_created }}</p>
				</a>
			</div>
		@endforeach
		</div>
	</div>

</body>
</html>