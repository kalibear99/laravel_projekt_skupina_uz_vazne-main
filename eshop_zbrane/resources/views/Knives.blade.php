@extends('layout')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/layout.css', 'resources/css/welcome.css'])

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h2 class="product-title">Seznam nožů</h2>
    
    @if(!empty($knives) && count($knives) > 0)
    <div class="product-grid">
        @foreach($knives as $knife)
            <div class="product-card">
                <!-- Zobrazení obrázku -->
                <img src="{{ asset('images/knives/' . $knife->image) }}" alt="{{ $knife->name }}" class="product-image">
                <h3 class="product-name">{{ $knife->name }}</h3>
                <p class="product-description">{{ $knife->description }}</p>
                <p class="product-price"><strong>Cena:</strong> {{ $knife->price }} CZK</p>
                <a href="{{ route('cart.add', $knife->id) }}" class="add-to-cart_Btn">Přidat do košíku</a>
            </div>
        @endforeach
    </div>
    @else
        <p>Momentálně nemáme skladem žádné nože. Omlouváme se.</p>
    @endif
@endsection