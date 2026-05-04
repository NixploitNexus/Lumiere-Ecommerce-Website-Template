<?php
$page = $page ?? 'home';
$title = $title ?? 'Lumière — Modern Fashion Atelier';
$desc  = $desc  ?? 'Lumière is a modern fashion house crafting timeless ready-to-wear from sustainable ateliers in Paris and Milan.';
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($desc) ?>">
<link rel="canonical" href="">
<meta property="og:title" content="<?= htmlspecialchars($title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
<meta property="og:type" content="website">
<link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><text y='26' font-size='28' font-family='serif'>L</text></svg>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="announce">Complimentary shipping on orders over €200 · Discover the Autumn / Winter 26 collection</div>
<header class="header">
  <nav class="nav">
    <ul class="nav-left">
      <li><a class="nav-link <?= $page==='shop'?'active':'' ?>" href="shop.php">Shop</a></li>
      <li><a class="nav-link <?= $page==='lookbook'?'active':'' ?>" href="shop.php?cat=lookbook">Lookbook</a></li>
      <li><a class="nav-link <?= $page==='about'?'active':'' ?>" href="about.php">Atelier</a></li>
      <li><a class="nav-link <?= $page==='contact'?'active':'' ?>" href="contact.php">Contact</a></li>
    </ul>
    <a href="index.php" class="brand">LUMIÈRE<small>Paris · est. 2014</small></a>
    <div class="nav-right">
      <button class="menu-toggle" aria-label="Menu" id="menuOpen">☰</button>
      <button class="icon-btn" aria-label="Search">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>
      </button>
      <button class="icon-btn" aria-label="Account">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-7 8-7s8 3 8 7"/></svg>
      </button>
      <a href="cart.php" class="icon-btn" aria-label="Cart">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6 7h12l-1.5 12h-9z"/><path d="M9 7a3 3 0 0 1 6 0"/></svg>
        <span class="cart-count">2</span>
      </a>
    </div>
  </nav>
</header>

<div class="drawer" id="drawer">
  <div class="drawer-panel">
    <button class="drawer-close" id="menuClose">×</button>
    <a href="index.php">Home</a>
    <a href="shop.php">Shop</a>
    <a href="shop.php?cat=lookbook">Lookbook</a>
    <a href="about.php">Atelier</a>
    <a href="contact.php">Contact</a>
    <a href="cart.php">Cart (2)</a>
  </div>
</div>
