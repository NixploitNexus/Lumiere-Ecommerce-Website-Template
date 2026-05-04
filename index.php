<?php
$page='home';
$title='Lumière — Modern Fashion Atelier · Paris';
$desc='Discover Lumière, a Parisian atelier crafting timeless ready-to-wear, leather goods, and the AW26 collection. Considered design, made to last.';
include 'includes/header.php';
include 'includes/products.php';
?>
<section class="hero">
  <div class="hero-copy">
    <span class="eyebrow">Autumn / Winter 2026</span>
    <h1>Quiet luxury,<br>made to <em>last a lifetime</em>.</h1>
    <p class="lead" style="margin-top:24px">A wardrobe of essentials sculpted from cashmere, wool and silk — designed in our Paris atelier and crafted in family-run mills across Italy and France.</p>
    <div style="display:flex;gap:16px;margin-top:40px;flex-wrap:wrap">
      <a href="shop.php" class="btn btn-primary">Shop the Collection →</a>
      <a href="about.php" class="btn btn-ghost">Our Story</a>
    </div>
    <div class="hero-meta">
      <span>Made in Europe</span>
      <span>Free Returns 30d</span>
      <span>Carbon Neutral</span>
    </div>
  </div>
  <div class="hero-img">
    <img src="assets/img/hero.jpg" alt="Lumière AW26 campaign — model in cream wool coat" width="1280" height="1600">
    <div class="hero-tag">Featured Look<strong>The Mira Coat</strong></div>
  </div>
</section>

<div class="marquee">
  <div class="marquee-track">
    <span>Crafted in Italy <i>✦</i> Recycled cashmere <i>✦</i> Slow fashion <i>✦</i> Made to last <i>✦</i> Atelier de Paris <i>✦</i> AW26 lookbook <i>✦</i></span>
    <span>Crafted in Italy <i>✦</i> Recycled cashmere <i>✦</i> Slow fashion <i>✦</i> Made to last <i>✦</i> Atelier de Paris <i>✦</i> AW26 lookbook <i>✦</i></span>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <div>
        <span class="eyebrow">The Edit</span>
        <h2>Three Worlds, One Wardrobe.</h2>
      </div>
      <a href="shop.php" class="btn-ghost">Explore all →</a>
    </div>
    <div class="cats">
      <a href="shop.php?cat=women" class="cat-card reveal">
        <img src="assets/img/p5.jpg" alt="Womenswear category" loading="lazy">
        <div class="cat-card-label"><span class="eyebrow">01</span><h3>Womenswear</h3></div>
      </a>
      <a href="shop.php?cat=accessories" class="cat-card reveal">
        <img src="assets/img/p4.jpg" alt="Accessories category" loading="lazy">
        <div class="cat-card-label"><span class="eyebrow">02</span><h3>Accessories</h3></div>
      </a>
      <a href="shop.php?cat=lookbook" class="cat-card reveal">
        <img src="assets/img/lookbook.jpg" alt="Lookbook" loading="lazy">
        <div class="cat-card-label"><span class="eyebrow">03</span><h3>The Lookbook</h3></div>
      </a>
    </div>
  </div>
</section>

<section class="section" style="padding-top:0">
  <div class="container">
    <div class="section-head reveal">
      <div>
        <span class="eyebrow">Just landed</span>
        <h2>New Season Essentials.</h2>
      </div>
      <a href="shop.php" class="btn-ghost">View all 24 pieces →</a>
    </div>
    <div class="products">
      <?php foreach($PRODUCTS as $p) product_card($p); ?>
    </div>
  </div>
</section>

<section class="split">
  <div class="split-img" style="background-image:url('assets/img/lookbook.jpg')"></div>
  <div class="split-copy reveal">
    <span class="eyebrow">The AW26 Lookbook</span>
    <h2>A study in warm restraint.</h2>
    <p class="lead" style="margin:24px 0 36px">This season we return to the language of texture — the dry hand of brushed wool, the weight of double-faced cashmere, a silk that catches light like late October sun. Quiet pieces, made loudly well.</p>
    <a href="shop.php?cat=lookbook" class="btn btn-outline">Explore the Lookbook →</a>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="values">
      <div class="value reveal">
        <div class="value-icon">✦</div>
        <h4>Made in Europe</h4>
        <p>Every garment crafted in family-run ateliers across France and Italy.</p>
      </div>
      <div class="value reveal">
        <div class="value-icon">↺</div>
        <h4>30-Day Returns</h4>
        <p>Take your time. Free returns on every order, no questions asked.</p>
      </div>
      <div class="value reveal">
        <div class="value-icon">⌖</div>
        <h4>Carbon Neutral</h4>
        <p>Shipping offset on every parcel through verified climate projects.</p>
      </div>
      <div class="value reveal">
        <div class="value-icon">♡</div>
        <h4>Lifetime Repairs</h4>
        <p>We mend what we make — bring any Lumière piece back to its first day.</p>
      </div>
    </div>
  </div>
</section>

<section class="news">
  <div class="container">
    <span class="eyebrow" style="color:var(--gold)">Le Journal</span>
    <h2>Letters from the atelier.</h2>
    <p>Receive private previews, atelier notes and 10% off your first order.</p>
    <form class="news-form" onsubmit="event.preventDefault();this.querySelector('input').value='';this.querySelector('button').textContent='Merci ✓'">
      <input type="email" placeholder="your@email.com" required>
      <button type="submit">Subscribe →</button>
    </form>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
