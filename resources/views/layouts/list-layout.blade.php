@extends('layouts/main-layout')

@section('title')
    <title> {{$destiled}} - Guacacktail</title>
@endsection

@section('style')
    
@endsection

@section('header')
{{-- Header --}}
<header id="header" class="alt style2">
	<a href="/" class="logo"><strong>Guacacktail</strong> | {{$destiled}}</a>
	<nav>
		<a href="#menu">Menu</a>
	</nav>
</header>	
@endsection

@section('banner')
	{{-- Banner --}}
	{{-- Note: The "styleN" class below should match that of the header element. --}}
	<section id="banner" class="style2">
		<div class="inner">
			<span class="image">
				<img src="{{$cocktails[$randnum]['strDrinkThumb']}}" alt="" />
			</span>
			<header class="major">
				<h1>{{$destiled}} Cocktails</h1>
			</header>
		</div>
	</section>
@endsection

@section('content')

@yield('subcontent')
{{-- Pagination --}}
<section id="three">
	<div class="inner" style="margin: auto">
		<ul class="actions">
			@if($page>2)
				<li><a href="{{'/cocktails/'.$ingredient}}" class="button primary">1 ...</a></li>
				<li><a href="{{'/cocktails/'.$ingredient.'?page='.($page-2)}}" class="button">{{$page - 2}}</a></li>
			@endif

			@if($page>1)
				<li><a href="{{'/cocktails/'.$ingredient.'?page='.($page-1)}}" class="button">{{$page - 1}}</a></li>
			@endif

				<li><a href="javascript: void(0)" class="button primary">{{$page}}</a></li>

			@if($page+1<=$last_page)
				<li><a href="{{'/cocktails/'.$ingredient.'?page='.($page+1)}}" class="button">{{$page + 1}}</a></li>
			@endif

			@if($page+2<=$last_page)
				<li><a href="{{'/cocktails/'.$ingredient.'?page='.($page+2)}}" class="button">{{$page + 2}}</a></li>
			@endif

			@if($page<$last_page-1)
				<li><a href="{{'/cocktails/'.$ingredient.'?page='.($last_page)}}" class="button primary">... {{$last_page}}</a></li>
			@endif
		</ul>
	</div>
</section>
@endsection

@section('scripts')
    
@endsection