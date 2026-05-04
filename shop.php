<?php
$page='shop';
$title='Shop the Collection — Lumière';
$desc='Browse the full Lumière collection: cashmere knits, tailored wool, silk blouses, leather accessories. Crafted in Europe.';
include 'includes/header.php';
include 'includes/products.php';
$cat = $_GET['cat'] ?? 'all';
$filtered = $cat==='all' ? $PRODUCTS : array_filter($PRODUCTS, fn($p)=> $p['cat']===$cat || $cat==='lookbook' || $cat==='new');
?>
<section class="page-head">
  <div class="crumbs"><a href="index.php">Home</a> · Shop <?= $cat!=='all'? '· '.ucfirst($cat) : '' ?></div>
  <h1>The Collection</h1>
  <p class="lead" style="margin:18px auto 0">Considered pieces, made to layer through every season.</p>
</section>

<section class="section">
  <div class="container">
    <div class="shop-layout">
      <aside class="filters">
        <h5>Category</h5>
        <ul>
          <li class="<?= $cat==='all'?'active':'' ?>"><a href="shop.php">All Pieces</a></li>
          <li class="<?= $cat==='women'?'active':'' ?>"><a href="shop.php?cat=women">Women</a></li>
          <li class="<?= $cat==='men'?'active':'' ?>"><a href="shop.php?cat=men">Men</a></li>
          <li class="<?= $cat==='accessories'?'active':'' ?>"><a href="shop.php?cat=accessories">Accessories</a></li>
          <li class="<?= $cat==='new'?'active':'' ?>"><a href="shop.php?cat=new">New Arrivals</a></li>
        </ul>
        <h5>Size</h5>
        <ul>
          <li>XS</li><li>S</li><li>M</li><li>L</li><li>XL</li>
        </ul>
        <h5>Price</h5>
        <ul>
          <li>Under €200</li>
          <li>€200 – €400</li>
          <li>€400 +</li>
        </ul>
        <h5>Material</h5>
        <ul>
          <li>Cashmere</li><li>Wool</li><li>Silk</li><li>Leather</li>
        </ul>
      </aside>

      <div>
        <div class="shop-bar">
          <span style="font-size:13px;color:var(--ink-soft)"><?= count($filtered) ?> pieces</span>
          <select>
            <option>Sort: Featured</option>
            <option>Newest</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
          </select>
        </div>
        <div class="products">
          <?php foreach($filtered as $p) product_card($p); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
