<?php
$page='about';
$title='The Atelier — Lumière';
$desc='Founded in Paris in 2014, Lumière is an independent fashion house dedicated to slow craft and considered design.';
include 'includes/header.php';
?>
<section class="page-head">
  <div class="crumbs"><a href="index.php">Home</a> · The Atelier</div>
  <h1>An atelier of <em style="color:var(--accent);font-style:italic">light</em>.</h1>
  <p class="lead" style="margin:24px auto 0">Founded in a quiet courtyard of Paris's 3rd arrondissement, Lumière is a love letter to the hand of a maker.</p>
</section>

<section class="split reverse">
  <div class="split-img" style="background-image:url('assets/img/about.jpg')"></div>
  <div class="split-copy reveal">
    <span class="eyebrow">Our Beginning</span>
    <h2>From sketchbook to wardrobe.</h2>
    <p class="lead" style="margin:24px 0">Lumière began in 2014 with a single coat — designed by founder Margaux Levêque, cut in a small atelier off Rue de Turenne, and worn until threadbare. A decade later we still design the way we did then: slowly, carefully, and only what we'd wear ourselves.</p>
    <p class="lead">Every collection is built around twelve essential silhouettes. We make less, mend more, and choose mills the way some people choose family.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="about-stats">
      <div class="stat reveal"><div class="num">2014</div><div class="lbl">Founded in Paris</div></div>
      <div class="stat reveal"><div class="num">12</div><div class="lbl">Partner ateliers</div></div>
      <div class="stat reveal"><div class="num">94%</div><div class="lbl">Natural fibres</div></div>
    </div>

    <div id="sustain" style="display:grid;grid-template-columns:1fr 1.6fr;gap:64px;align-items:flex-start">
      <div>
        <span class="eyebrow">Sustainability</span>
        <h2>The slow path.</h2>
      </div>
      <div>
        <p class="lead" style="margin-bottom:18px">We measure success in seasons worn, not units sold. Our Mira coat has a five-year repair guarantee — bring it back when life leaves a mark, and we'll send it home like new.</p>
        <p class="lead" style="margin-bottom:18px">All shipping is carbon offset through verified Gold Standard projects. Our packaging is plastic-free, made in Lyon from FSC-certified paper. We trace every fibre back to the farm.</p>
        <p class="lead">By 2027, every Lumière piece will be fully circular — designed to be unmade and remade.</p>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
