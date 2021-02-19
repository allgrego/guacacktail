@extends('layouts/macro-layout')

@section('style')
    
@endsection

@section('macrontent')
{{-- Header  --}}
@yield('header')

{{-- Menu --}}
<nav id="menu">
    <ul class="actions stacked">
        <li><a href="/" class="button fit {{(!isset($destiled)?'primary':'')}}">Home</a></li>
        @foreach ($destilados as $destilado)
            <li><a href="/cocktails/{{$destilado}}" class="button fit {{(isset($destiled)&&strtolower($destiled)==$destilado?'primary':'')}}">{{$destilado}} Cocktails</a></li>    
        @endforeach
    </ul>
</nav>

{{-- Banner --}}
@yield('banner')


{{-- Main  --}}
<div id="main">
    @yield('content')
</div>
@endsection

@section('scripts')
    
@endsection