<?php
$page='contact';
$title='Contact — Lumière';
$desc='Visit our Paris atelier, write to our care team, or find a Lumière stockist near you.';
include 'includes/header.php';
$sent = false;
if($_SERVER['REQUEST_METHOD']==='POST') $sent = true;
?>
<section class="page-head">
  <div class="crumbs"><a href="index.php">Home</a> · Contact</div>
  <h1>Write to us.</h1>
  <p class="lead" style="margin:24px auto 0">Our care team replies within one business day, in French or English.</p>
</section>

<section class="section">
  <div class="container">
    <div class="contact-grid">
      <form class="contact-form" method="post" action="contact.php">
        <?php if($sent): ?>
          <div style="padding:20px;background:var(--bg-alt);border-left:2px solid var(--accent)">
            Merci. Your message is on its way to our atelier.
          </div>
        <?php endif; ?>
        <input type="text" name="name" placeholder="Your name" required>
        <input type="email" name="email" placeholder="Your email" required>
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="How can we help?" required></textarea>
        <div><button type="submit" class="btn btn-primary">Send Message →</button></div>
      </form>
      <div class="contact-info">
        <span class="eyebrow">Get in Touch</span>
        <h2 style="margin-bottom:24px">We are listening.</h2>
        <p class="lead">Whether you have a question about an order, a request for a custom piece, or simply want to say hello — we read every message that arrives.</p>

        <h4>Atelier</h4>
        <p>14 Rue de Turenne, 75003 Paris<br>Mon – Sat · 11h – 19h</p>
        <h4>Care Team</h4>
        <p>care@lumiere-maison.com<br>+33 1 42 71 04 18</p>
        <h4>Press &amp; Wholesale</h4>
        <p>press@lumiere-maison.com</p>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
