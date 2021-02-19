@extends('layouts/main-layout')

@section('title')
    <title> Guacacktail</title>
@endsection

@section('header')
<header id="header" class="alt">
    <a href="/" class="logo"><strong>Guacacktail</strong></a>
    <nav>
        <a href="#menu">Menu</a>
    </nav>
</header>
@endsection

@section('banner')
<section id="banner" class="major">
    <div class="inner">
        <header class="major">
            <h1>Welcome to Guacacktail</h1>
        </header>
        <div class="content">
            <p>A website where you can submerge into the<br />
            cocktails world</p>
            <ul class="actions">
                <li><a href="#one" class="button next scrolly">Get Started</a></li>
            </ul>
        </div>
    </div>
</section>
@endsection

@section('content')
{{-- One --}}
    <section id="one" class="tiles">
        <article>
            <span class="image">
                <img src="{{$images['rum']}}" alt="rum" />
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
					