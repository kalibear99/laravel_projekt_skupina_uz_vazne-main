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
                    <p class="product-price"><strong>Cena:</strong> {{ $gun->price }} $</p>
                    <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>
                
            @endforeach
        
    @else
        <p>Momentálně nemáme skladem žádné zboží tohodle typu. Omlouváme se :D</p>
    @endif
    </div>
@endsection
