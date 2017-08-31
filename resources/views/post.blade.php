@extends('layout')
@section('content')
	<div class="content is-8 column container">
		<ul id="slippry-demo">
			@foreach($photos as $photo)
				<li><a href="#slide1"><img src={{ asset('uploads/'.($photo->img_dir)) }} alt="{{ $photo->name }}"></a></li>
			@endforeach
		</ul>
		<h3>{{ $post->title }}</h3>
		<p>{{ $post->content }}</p>
	</div>
	<style type="text/css">
		ul{
			list-style: none !important;
			margin: 0 !important;
		}
	</style>
@endsection
@section('scrtag')
	<script type="text/javascript" src='{{asset('js/iis-captions.js')}}'></script>
	<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/slippry/1.4.0/slippry.min.js'></script>
	<script type="text/javascript" src='{{asset('js/ideal-image-slider.min.js')}}'></script>
	<script>
				$("#slippry-demo").slippry({
					 transition: 'fade',
					 // useCSS: true,
					// speed: 1000,
					// pause: 3000,
					 // auto: true,
					// preload: 'visible',
					// autoHover: false
				});
	</script>
@endsection
@section('stylelink')
	<link rel="stylesheet" href="{{ asset('css/ideal-image-slider.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slippry/1.4.0/slippry.min.css">

@endsection
