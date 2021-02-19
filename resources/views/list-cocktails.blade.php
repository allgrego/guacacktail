@extends('layouts/list-layout')

@section('subcontent')

{{-- Two --}}
<section id="two" class="spotlights">
	@foreach($cocktails as $cocktail)
	@php $ingredient = strtolower($destiled); @endphp
	<section id={{$cocktail['idDrink']}}>
		<a href="/cocktail/{{$ingredient}}/{{$cocktail['idDrink']}}" class="image cust_fade-in" style="background: linear-gradient(45deg,#87c5a4,#8d82c4 ,#6fc3df);">
			<img src="{{$cocktail['strDrinkThumb']}}" alt="" data-position="center center" class="cust_colorized"/>
		</a>
		<div class="content">
			<div class="inner">
				<header class="major">
					<a href="/cocktail/{{$ingredient}}/{{$cocktail['idDrink']}}?p={{$page}}"><h2>{{$cocktail['strDrink']}}</h2></a>
				</header>
				
				<ul class="actions">
					<li><a href="/cocktail/{{$ingredient}}/{{$cocktail['idDrink']}}?p={{$page}}" class="button">More Information</a></li>
				</ul>
			</div>
		</div>
	</section>
	@endforeach
</section>
							
							

@endsection