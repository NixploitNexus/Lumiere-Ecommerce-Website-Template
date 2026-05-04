<?php
$page='cart';
$title='Shopping Bag — Lumière';
$desc='Review your Lumière selection and proceed to checkout.';
include 'includes/header.php';
include 'includes/products.php';
$cart = [$PRODUCTS[0], $PRODUCTS[3]];
$subtotal = array_sum(array_column($cart,'price'));
$ship = $subtotal >= 200 ? 0 : 12;
$total = $subtotal + $ship;
?>
<section class="page-head">
  <div class="crumbs"><a href="index.php">Home</a> · Shopping Bag</div>
  <h1>Your Bag</h1>
</section>

<section class="section">
  <div class="container">
    <table class="cart-table">
      <thead>
        <tr><th>Item</th><th>Size</th><th>Qty</th><th style="text-align:right">Price</th></tr>
      </thead>
      <tbody>
      <?php foreach($cart as $c): ?>
        <tr>
          <td>
            <div class="cart-item">
              <img src="assets/img/<?= $c['img'] ?>" alt="<?= htmlspecialchars($c['name']) ?>">
              <div>
                <div style="font-family:var(--serif);font-size:1.2rem"><?= htmlspecialchars($c['name']) ?></div>
                <div style="font-size:12px;color:var(--ink-soft);margin-top:4px">Camel · Wool blend</div>
              </div>
            </div>
          </td>
          <td>S</td>
          <td>
            <div class="qty">
              <button onclick="const i=this.nextElementSibling;i.value=Math.max(1,+i.value-1)">−</button>
              <input type="text" value="1">
              <button onclick="const i=this.previousElementSibling;i.value=+i.value+1">+</button>
            </div>
          </td>
          <td style="text-align:right;font-family:var(--serif);font-size:1.2rem">€<?= $c['price'] ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

    <div class="cart-summary">
      <span>Subtotal</span><span>€<?= $subtotal ?></span>
      <span>Shipping</span><span><?= $ship?'€'.$ship:'Complimentary' ?></span>
      <span class="total">Total</span><span class="total">€<?= $total ?></span>
      <span style="grid-column:1/-1;border-top:1px solid var(--line);padding-top:24px;display:flex;gap:12px;flex-wrap:wrap;justify-content:space-between">
        <a href="shop.php" class="btn btn-outline">← Continue Shopping</a>
        <a href="#" class="btn btn-primary">Secure Checkout →</a>
      </span>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
