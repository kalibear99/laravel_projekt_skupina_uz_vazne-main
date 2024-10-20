@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
    @vite('resources/css/welcome.css')
</head>
<body>
    <section class="Homepage">
        <div class="welcome-body">
            <div class="welcome-container">
                <div class="main-text">
                    <h1 class="welcome-title">ZBRANĚ PRO KAŽDÉHO <br> NAJDETE ZDE VŠE POTŘEBNÉ PRO STŘELBU</h1>
                </div>
                <div class="subtitle">
                    <h2 class="welcome-subtitle">Vyberte si z naší široké nabídky a získejte to nejlepší pro váš zážitek</h2>
                </div>
                <div class="btn">
                    <a href="#" class="welcome-button">KOUPIT</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Druhá sekce kde jsou populární zbraně -->
    <section class="Popular_product-section">
        <h2 class="product-title">POPULÁRNÍ ZBRANĚ</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('glock 17.png') }}" alt="Pistol">
                    <span class="badge">NEW</span>
                </div>
                <h3 class="product-name">Glock 17 MOD 45154998</h3>
                <p class="product-price">18 390 Kč</p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>
 
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('revolver.png') }}" alt="Rifle">
                    <span class="badge">NEW</span>
                </div>
                <h3 class="product-name">Revolver</h3>
                <p class="product-price">22 250 Kč</p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>
        </div>
        
    </section>
                <!-- Konec sekce -->

</body>
</html>
@endsection
