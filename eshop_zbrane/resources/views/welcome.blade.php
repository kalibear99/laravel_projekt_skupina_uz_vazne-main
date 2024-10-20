@extends('layout')

@section('content')
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
    <title>Document</title>
    @vite('resources/css/welcome.css')
</head>
<body>

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
</body>
</html>
@endsection
