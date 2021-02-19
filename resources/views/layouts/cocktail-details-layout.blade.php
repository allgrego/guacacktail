@extends('layouts/main-layout')

@section('title')
    <title>{{$cocktail['strDrink']}} - Guacacktail</title>
@endsection

@section('style')
    
@endsection

@section('header')
{{-- Header --}}
{{-- Note: The "styleN" class below should match that of the banner element. --}}
	<header id="header" class="alt style2">
		<a href="/" class="logo"><strong>Guacacktail</strong> | Cocktail {{$cocktail['strDrink']}}</a>
		<nav>
			<a href="#menu">Menu</a>
		</nav>
	</header>
@endsection


