@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
    @vite('resources/css/welcome.css')
</head>
<body>
<div class="welcome-body">
    <div class="welcome-container">
        <div class="main-text">
            <h1 class="welcome-title">Vítejte v Gun Store</h1>
        </div>
        <div class="subtitle">
            <h2 class="welcome-subtitle">Nejlepší zbraně a doplňky na trhu</h2>
        </div>
        <div class="btn">
            <a href="#" class="welcome-button">Koupit</a>
        </div>
    </div>
</div>
</body>
</html>
@endsection
