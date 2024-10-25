@extends('layout')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/layout.css', 'resources/css/welcome.css'])
@section('content')
    <h2 class="product-title">Seznam zbraní</h2>
    
    @if(!empty($guns) && count($guns) > 0)
    <div class="product-grid">
            @foreach($guns as $gun)
            <div class="product-card">
                
                    <h3 class="product-name">{{ $gun->name }}</h3>
                    <p class="product-description">{{ $gun->description }}</p>
                    <p class="product-price"><strong>Cena:</strong> {{ $gun->price }} CZK</p>
                    <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>
                
            @endforeach
        <p>Více momentálně není naskladněné</p>
    @else
        <p>Momentálně nemáme skladem žádné zboží tohodle typu. Omlouváme se.</p>
    @endif
    </div>

    <h2 class="product-title">Seznam munice</h2>

    @if(!empty($ammunitions) && count($ammunitions) > 0)
        @foreach($ammunitions as $ammo)
            <div class="product-card">
                <h3 class="product-name">{{ $ammo->type }} - {{ $ammo->caliber }}</h3>
                <p class="product-price"><strong>Cena:</strong> {{ $ammo->price }} CZK</p>
            </div>
        @endforeach
    @else
        <p>Žádná munice není momentálně skladem.</p>
    @endif
@endsection
