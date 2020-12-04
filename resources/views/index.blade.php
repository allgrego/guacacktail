@extends('layouts/main-layout')

@section('head')
    <title> Guacacktail</title>
@endsection

@section('content')
<!-- One -->
    <section id="one" class="tiles">
        
        <article>
            <span class="image">
                <img src="{{$images['rum']}}" alt="" />
            </span>
            <header class="major">
                <h3><a href="{{url('/cocktails/rum')}}" class="link">Rum</a></h3>
                <p>Cocktails prepared with rum</p>
            </header>
        </article>
        
        <article>
            <span class="image">
                <img src="{{$images['vodka']}}" alt="" />
            </span>
            <header class="major">
                <h3><a href="{{url('/cocktails/vodka')}}" class="link">Vodka</a></h3>
                <p>Cocktails prepared with Vodka</p>
            </header>
        </article>

        <article>
            <span class="image">
                <img src="{{$images['beer']}}" alt="" />
            </span>
            <header class="major">
                <h3><a href="{{url('/cocktails/beer')}}" class="link">Beer</a></h3>
                <p>Cocktails prepared with Beer</p>
            </header>
        </article>

        <article>
            <span class="image">
                <img src="{{$images['wine']}}" alt="" />
            </span>
            <header class="major">
                <h3><a href="{{url('/cocktails/wine')}}" class="link">Wine</a></h3>
                <p>Cocktails prepared with Wine</p>
            </header>
        </article>

        <article>
            <span class="image">
                <img src="{{$images['tequila']}}" alt="" />
            </span>
            <header class="major">
                <h3><a href="{{url('/cocktails/wine')}}" class="link">Tequila</a></h3>
                <p>Cocktails prepared with Tequila</p>
            </header>
        </article>

        <article>
            <span class="image">
                <img src="{{$images['gin']}}" alt="" />
            </span>
            <header class="major">
                <h3><a href="{{url('/cocktails/gin')}}" class="link">Gin</a></h3>
                <p>Cocktails prepared with Gin</p>
            </header>
        </article>

    </section>
@endsection
					