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
    <script src="https://kit.fontawesome.com/120d3dceee.js" crossorigin="anonymous"></script>
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
        <div class="new-product-grid">
            <div class="new-product-card">
                <div class="product-image">
                    <img src="{{asset('zbrane/glock 17.avif') }}" alt="Pistol">
                </div>
                <h3 class="product-name">Glock 17 cal. 9mm Luger</h3>
                <p class="product-price"><b>16 160 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>
 
            <div class="new-product-card">
                <div class="product-image">
                    <img src="{{asset('zbrane/revolver.png') }}" alt="Rifle">
                </div>
                <h3 class="product-name">Revolver</h3>
                <p class="product-price"><b>22 250 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>

            <div class="new-product-card">
                <div class="product-image">
                    <img src="{{asset('zbrane/beretta.png') }}" alt="Rifle">
                </div>
                <h3 class="product-name">Beretta 92FS cal. 9mm Luger </h3>
                <p class="product-price"><b>28 250 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>

            <div class="new-product-card">
                <div class="product-image">
                    <img src="{{asset('zbrane/heckler-koch.png') }}" alt="Rifle">
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
                    <img src="{{asset('noze/knife.png') }}" alt="Nová zbraň">
                    <div class="badge">NEW</div>
                </div>
                <h3 class="new-product-name">JOKER BUFFALO HORN SCALES PACHON NF99 </h3>
                <p class="new-product-price"><b>1525 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>
 
            <div class="new-product-card">
                <div class="new-product-image">
                    <img src="{{asset('noze/second-knife.webp') }}" alt="Nová zbraň">
                    <div class="badge">NEW</div>
                </div>
                <h3 class="new-product-name">JOKER KNIFE TERRIER BLADE 9cm. NB20 </h3>
                <p class="new-product-price"><b>1132 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>

            <div class="new-product-card">
                <div class="new-product-image">
                    <img src="{{asset('zbrane/scorpion.png') }}" alt="Nová zbraň">
                    <div class="badge">NEW</div>
                </div>
                <h3 class="new-product-name">CZ SCORPION EVO 3 S1 cal. 9mm Luger</h3>
                <p class="new-product-price"><b>25 325 Kč</b></p>
                <button class="add-to-cart_Btn">Přidat do košíku</button>
            </div>

            <div class="new-product-card">
                <div class="new-product-image">
                    <img src="{{asset('zbrane/DesertEagle.avif') }}" alt="Nová zbraň">
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


<!-- Poslední sekce Kontaktovat -->

<section class="contact-section">

    <div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.609250551443!2d17.693298476328145!3d49.22693717138454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4713736217f47a19%3A0x13c5fafd124ff449!2zU3TFmWVkbsOtIMWha29sYSBCYWx0YWNpIHMuci5vLg!5e0!3m2!1scs!2scz!4v1730840342502!5m2!1scs!2scz" width="80%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact-container">

    <div class="contact-infotmation">
        <div class="logo-container">
        <a href="/">
                <img src="{{asset('logo.png') }}"> 
            </a>
        </div>
        <div class="menu-container">
            <h2 class="contact_information-title" >Informace</h2>
            <ul class="contact-menu">
                <li><a href="#home">Domů</a></li>
                <li><a href="#products">Produkty</a></li>
                <li><a href="#about">O nás</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </div>
        <div class="contact-info">
            <h3 class="contact_ContactUS-title" >Kontaktujte nás</h3>
            <p>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                </span>
                 <a href="tel:+420123456789">+420 123 456 789</a>
            </p>
            <p>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                </span>
                <a href="mailto:info@example.com">info@example.com</a></p>
            <p>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="20" height="20"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                </span>
                <a href="https://maps.app.goo.gl/HXUQZoocfdZQendL8">Šrekova bažina 1893, 760 01 Zlín</a></p>
            <div class="social-icons">
                <a href="https://www.facebook.com/skolabaltaci" class="icon-facebook">
                    <i class="fa-brands fa-facebook fa-xl"></i>
                </a>
                <a href="https://www.instagram.com/skolabaltaci/" class="icon-instagram">
                    <i class="fa-brands fa-instagram fa-xl"></i>
                </a>
                <a href="https://x.com/?lang=cs" class="icon-twitter">
                    <i class="fa-brands fa-x-twitter fa-xl"></i>
                </a>
            </div>
                <button class="contact-button">Kontaktní formulář</button>
            </div>
    </div>
        <div class="post-container">
            <div class="post-card">
                <img src="{{ asset('Post/ceska-posta-logo.png') }}" alt="ceskaposta">
            </div>
            <div class="post-card">
                <img src="{{ asset('Post/ppl.png') }}" alt="ppl">
            </div>
            <div class="post-card">
                <img src="{{ asset('Post/zasilkovna-cz.png') }}" alt="zasilkovna">
            </div>
         </div>
    </div>
</section>
<!-- Konec sekce kontaktovat -->

<!-- Footer -->
 <div class="footer">
    <h1 class="footer-text">Copyright 2024 GUNSHOP. Všechna práva vyhrazena. </h1>
 </div>
<!-- Konec Footer -->

</body>
</html>
@endsection
