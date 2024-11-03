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

    <!-- První sekcec (Welcome) -->
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
    <!-- Konec první sekce -->

    <!-- Druhá sekce kde jsou populární zbraně -->
    <section class="Popular_product-section">
        <h2 class="product-title">POPULÁRNÍ ZBRANĚ</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('Guns/glock 17.avif') }}" alt="Pistol">
                </div>
                <h3 class="product-name">Glock 17 cal. 9mm Luger</h3>
                <p class="product-price"><b>16 160 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>
 
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('Guns/revolver.png') }}" alt="Rifle">
                </div>
                <h3 class="product-name">Revolver</h3>
                <p class="product-price"><b>22 250 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('Guns/beretta.png') }}" alt="Rifle">
                </div>
                <h3 class="product-name">Beretta 92FS cal. 9mm Luger </h3>
                <p class="product-price"><b>28 250 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('Guns/heckler-koch.png') }}" alt="Rifle">
                </div>
                <h3 class="product-name">Heckler & Koch P30 V3 cal. 9mm Luger</h3>
                <p class="product-price"><b>23 500 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>
        </div>
        
    </section>
    <!-- Konec sekce -->

    <!-- třetí sekce ve ktere jsou novinky -->
    <section class="New_products-section">
        <h2 class="new-product-title">NOVINKY</h2>
        <div class="new-product-grid">
            <div class="new-product-card">
                <div class="new-product-image">
                    <img src="{{asset('Knives/knife.png') }}" alt="Nová zbraň">
                    <div class="badge">NEW</div>
                </div>
                <h3 class="new-product-name">JOKER BUFFALO HORN SCALES PACHON NF99 </h3>
                <p class="new-product-price"><b>1525 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>
 
            <div class="new-product-card">
                <div class="new-product-image">
                    <img src="{{asset('Knives/second-knife.webp') }}" alt="Nová zbraň">
                    <div class="badge">NEW</div>
                </div>
                <h3 class="new-product-name">JOKER KNIFE TERRIER BLADE 9cm. NB20 </h3>
                <p class="new-product-price"><b>1132 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>

            <div class="new-product-card">
                <div class="new-product-image">
                    <img src="{{asset('Guns/scorpion.png') }}" alt="Nová zbraň">
                    <div class="badge">NEW</div>
                </div>
                <h3 class="new-product-name">CZ SCORPION EVO 3 S1 cal. 9mm Luger</h3>
                <p class="new-product-price"><b>25 325 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>

            <div class="new-product-card">
                <div class="new-product-image">
                    <img src="{{asset('Guns/DesertEagle.avif') }}" alt="Nová zbraň">
                    <div class="badge">NEW</div>
                </div>
                <h3 class="new-product-name">Desert Eagle XIX 6" Black cal. 50 AE </h3>
                <p class="new-product-price"><b>63 365 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>

        </div>
    </section>
    <!-- Konec třetí sekce -->


    <!-- Začátek sekce O nás -->
    <section class="about-us-section">
        <h2 class="about-title">O NÁS</h2>
        <div class="about-us-container">
            <div class="about-us-image">
                <img src="{{asset('about-us.jpg') }}" alt="Náš obchod">
            </div>
            <div class="about-us-text">
                <h3>Vítejte v našem obchodě!</h3>
                <p>
                    Jsme odborníci na zbraně a střelivo, kteří kladou důraz na kvalitu a spolehlivost. V naší nabídce najdete vše od klasických pistolí až po moderní střelné zbraně, ať už jste začátečník nebo zkušený střelec. Naše produkty jsou pečlivě vybírány s ohledem na vaši bezpečnost a maximální zážitek ze střelby. Navštivte nás osobně nebo si pohodlně objednejte online.
                </p>
            </div>
        </div>
    </section>
    <!-- Konec sekce o nás -->


    <!-- Čtvrá sekce kde jsou Značky -->
<section class="brands-section">
    <h2 class="brands-title">ZNAČKY</h2>
    <div class="brands-container">
        <div class="brand-card">
            <img src="{{ asset('Brands/Beretta-Logo.png') }}" alt="Beretta">
        </div>
        <div class="brand-card">
            <img src="{{ asset('Brands/glock-logo.png') }}" alt="Glock">
        </div>
        <div class="brand-card">
            <img src="{{ asset('Brands/Heckler_Koch_logo.svg.png') }}" alt="HecklerKoch">
        </div>
        <div class="brand-card">
            <img src="{{ asset('Brands/smith-and-wesson.svg') }}" alt="SmithWesson">
        </div>
        <div class="brand-card">
            <img src="{{ asset('Brands/Desert-Eagle.png') }}" alt="">
        </div>
    </div>
</section>
<!-- Konec sekce značky -->

</body>
</html>
@endsection
