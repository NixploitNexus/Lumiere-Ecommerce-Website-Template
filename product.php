<?php
$page='shop';
include 'includes/products.php';
$id = (int)($_GET['id'] ?? 1);
$p = null;
foreach($PRODUCTS as $x){ if($x['id']===$id){ $p=$x; break; } }
if(!$p) $p = $PRODUCTS[0];
$title = $p['name'].' — Lumière';
$desc  = 'Shop the '.$p['name'].' from Lumière. Crafted in Europe from the finest natural fibres.';
include 'includes/header.php';

$related = array_filter($PRODUCTS, fn($x)=>$x['id']!==$p['id']);
$related = array_slice($related,0,4);
?>
<section class="section" style="padding-top:48px">
  <div class="container">
    <div class="crumbs" style="margin-bottom:32px"><a href="index.php">Home</a> · <a href="shop.php">Shop</a> · <?= htmlspecialchars($p['name']) ?></div>
    <div class="pdp">
      <div class="pdp-gallery">
        <img src="assets/img/<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['name']) ?>">
        <img src="assets/img/<?= $PRODUCTS[($p['id'])%count($PRODUCTS)]['img'] ?>" alt="alternate view" loading="lazy">
        <img src="assets/img/<?= $PRODUCTS[($p['id']+1)%count($PRODUCTS)]['img'] ?>" alt="detail view" loading="lazy">
      </div>
      <div class="pdp-info">
        <span class="eyebrow">Autumn / Winter 26</span>
        <h1><?= htmlspecialchars($p['name']) ?></h1>
        <div style="display:flex;gap:14px;align-items:center;margin-bottom:20px">
          <span class="stars">★★★★★</span>
          <span style="font-size:12px;color:var(--ink-soft)">128 reviews</span>
        </div>
        <div class="price-row">
          <?php if($p['old']): ?>
            <span class="now">€<?= $p['price'] ?></span>
            <span class="was">€<?= $p['old'] ?></span>
          <?php else: ?>
            <span class="now">€<?= $p['price'] ?></span>
          <?php endif; ?>
        </div>
        <p class="lead">A heritage piece reimagined for modern wardrobes — soft to the touch, structured in line, crafted to outlast trends.</p>

        <span class="option-label">Colour <em style="font-style:normal;color:var(--ink-soft);font-weight:400">— Camel</em></span>
        <div class="color-opts">
          <?php foreach($p['colors'] as $i=>$c): ?>
            <span class="<?= $i===0?'active':'' ?>" style="background:<?= $c ?>"></span>
          <?php endforeach; ?>
        </div>

        <span class="option-label">Size</span>
        <div class="size-opts">
          <button>XS</button>
          <button class="active">S</button>
          <button>M</button>
          <button>L</button>
          <button>XL</button>
        </div>

        <div class="pdp-actions">
          <div class="qty">
            <button onclick="const i=this.nextElementSibling;i.value=Math.max(1,+i.value-1)">−</button>
            <input type="text" value="1">
            <button onclick="const i=this.previousElementSibling;i.value=+i.value+1">+</button>
          </div>
          <a href="cart.php" class="btn btn-primary">Add to Bag · €<?= $p['price'] ?></a>
        </div>

        <div class="pdp-feats">
          <span>↺ Free Returns</span>
          <span>✦ Made in Italy</span>
          <span>⌖ Carbon Neutral</span>
        </div>

        <div class="pdp-desc">
          <p><strong>Composition.</strong> 90% recycled cashmere, 10% Italian merino wool. Knitted in a family-run mill in Biella, Italy.</p>
          <p><strong>Care.</strong> Hand-wash in cool water with mild soap. Reshape and dry flat away from direct sunlight.</p>
          <p><strong>Fit.</strong> Relaxed silhouette. Model is 178cm and wears size S.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="padding-top:0">
  <div class="container">
    <div class="section-head"><h2>You may also love</h2><a href="shop.php" class="btn-ghost">All pieces →</a></div>
    <div class="products">
      <?php foreach($related as $r) product_card($r); ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
