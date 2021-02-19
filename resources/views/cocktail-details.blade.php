@extends('layouts/cocktail-details-layout')

@section('content')
{{-- Two --}}
<section id="two" class="spotlights">
	<section>
		<a  class="image cust_fade-in" >
			<img src="{{$cocktail['strDrinkThumb']}}" alt="" data-position="center center" id="image_"/>
		</a>
		<div class="content">
			
			<div class="inner">
				<header class="major">
					<h2>{{$cocktail['strDrink']}}</h2>
					@if($cocktail['strCategory'])
						<p>{{$cocktail['strCategory']}}</p>
					@endif
				</header>

				@if(isset($ingredients))
				<h3>Ingredients:</h3>
				@endif
				<ul>
				@foreach($ingredients as $key => $ingredient)
					<li>
						@if(!empty($measures[$key])){{$measures[$key]}}@endif {{$ingredient}}
					</li>
				@endforeach
				</ul>
				
				@if(isset($cocktail['strInstructions']))
				<h3>Instructions:</h3>
				<p>{{$cocktail['strInstructions']}}</p>
				@endif

				@if(isset($cocktail['strGlass']))
				<h3>Glass:</h3>
				<p>{{$cocktail['strGlass']}}</p>
				@endif

				<a class="button primary" href="/cocktails/{{$destiled}}#{{$cocktail['idDrink']}}" style="margin-bottom: 2rem;">Volver </a>
			</div>
		</div>
	</section>
</section>
@endsection