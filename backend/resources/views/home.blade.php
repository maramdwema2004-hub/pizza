<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pizza Royale</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar">
    <h2>🍕 Pizza Royale</h2>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#reserve">Reserve</a></li>
    </ul>
</nav>

<header class="hero" id="home">
    <div class="hero-content">
        <h1>Luxury Italian Pizza</h1>
        <p>Royal Taste • Premium Quality</p>
        <button onclick="scrollToSection('menu')">Explore Menu</button>
    </div>
</header>

<section class="menu" id="menu">
    <h2>Our Signature Menu</h2>

    <div class="menu-grid">
        @foreach($menu as $item)
        <div class="card">
            <img src="{{ $item['image'] }}">
            <h3>{{ $item['name'] }}</h3>
            <p>{{ $item['desc'] }}</p>
            <span>${{ $item['price'] }}</span>
            <button onclick="order('{{ $item['name'] }}')</button>
        </div>
        @endforeach
    </div>
</section>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
