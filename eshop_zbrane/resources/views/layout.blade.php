<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Gun Store</title>
    @vite(['resources/js/app.js'])
    @vite('resources/css/layout.css')
    
</head>
<body>
    <div class="top-bar">
        <div class="contact-info">
            <a class="email" href="mailto:info@gunstore.cz">Email: info@gunstore.com</a>
            <span class="line"> | </span>
            <a class="phone" href="tel: +420 123 456 789" >Telefon: +420 123 456 789</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Vyhledávání...">
            <button type="submit">Hledat</button>
        </div>
    </div>

    <nav class="navbar">
        <div class="logo">
            <a href="#">
                <img src="{{asset('logo.png') }}"> 
            </a>
        </div>
        <ul class="menu">
            <li><a href="/">HOME</a></li>
            <li><a href="#">O NÁS</a></li>
            <li><a href="./guns">ZBRANĚ</a></li>
            <li><a href="#">STŘELIVO</a></li>
            <li><a href="#">DOPLŇKY KE ZBRANÍM</a></li>
            <li><a href="#">NOŽE</a></li>
        </ul>
        <div class="right-side">
            <a href="#" class="cart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="24" height="24" fill="white">
                    <path d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192 32 192c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512L430 512c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32l-85.6 0L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192l-232.6 0L253.3 35.1zM192 304l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16zm128 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16z"/>
                </svg>
                Nákup
            </a>
            <a href="#" class="language-toggle">CZ/EN</a>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
